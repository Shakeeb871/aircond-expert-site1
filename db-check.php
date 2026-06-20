<?php
/* Database diagnostic — open: /db-check.php?key=YOUR_ADMIN_KEY
   Shows exactly why the database connection works or fails.
   Safe: never prints your password. Delete this file once everything works. */
session_start();
$cfg = require __DIR__ . '/api/config.php';
$adminKey = is_string($cfg['admin_key'] ?? null) ? $cfg['admin_key'] : '';
$key = $_GET['key'] ?? ($_POST['key'] ?? '');
$ok  = !empty($_SESSION['leads_auth']) || ($adminKey !== '' && hash_equals($adminKey, (string)$key));

header('Content-Type: text/html; charset=utf-8');
header('X-Robots-Tag: noindex');
function h($v){ return htmlspecialchars((string)$v, ENT_QUOTES); }

echo '<!DOCTYPE html><meta name="viewport" content="width=device-width,initial-scale=1">';
echo '<style>body{font-family:system-ui,Segoe UI,Arial,sans-serif;max-width:760px;margin:30px auto;padding:0 18px;color:#0c1830;line-height:1.6}
h1{font-size:20px}.row{padding:12px 14px;border-radius:10px;margin:8px 0;border:1px solid #e6edf5}
.ok{background:#e7f8ee;border-color:#bfe8cf}.bad{background:#fdeaea;border-color:#f3c2c2}.info{background:#eef3fb;border-color:#d6e4f6}
code{background:#0c1830;color:#fff;padding:2px 6px;border-radius:5px;font-size:13px}b{font-weight:700}</style>';

if (!$ok) {
  echo '<h1>Database check</h1><div class="row info">Add your admin key to the URL, e.g. <code>/db-check.php?key=YOUR_ADMIN_KEY</code></div>';
  exit;
}

echo '<h1>Database check</h1>';

/* 1) config.local.php present? */
$localFile = __DIR__ . '/api/config.local.php';
if (is_file($localFile)) {
  echo '<div class="row ok">✓ <b>config.local.php</b> found and loaded.</div>';
} else {
  echo '<div class="row bad">✗ <b>api/config.local.php</b> NOT found. Create it (copy api/config.local.sample.php) and put your DB details there.</div>';
}

/* 2) settings */
$d = $cfg['db'] ?? [];
$en = !empty($d['enabled']);
echo '<div class="row '.($en?'ok':'bad').'">'.($en?'✓':'✗').' db.enabled = <b>'.($en?'true':'false').'</b>'.($en?'':' — set it to true').'</div>';
echo '<div class="row info">host=<b>'.h($d['host']??'').'</b> &nbsp; name=<b>'.h($d['name']??'').'</b> &nbsp; user=<b>'.h($d['user']??'').'</b> &nbsp; password=<b>'.(!empty($d['pass'])?'(set)':'(empty!)').'</b></div>';

if (!$en) { echo '<div class="row info">Enable the database first, then reload this page.</div>'; exit; }
if (empty($d['pass'])) { echo '<div class="row bad">✗ Password is empty. Add the MySQL user password in config.local.php.</div>'; }

/* 3) connect WITHOUT a database first (tests host + user + password) */
try {
  $pdo = new PDO("mysql:host={$d['host']};charset=utf8mb4", $d['user'], $d['pass'], [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_TIMEOUT=>5]);
  echo '<div class="row ok">✓ Connected to MySQL — <b>username & password are correct</b>.</div>';
} catch (Throwable $e) {
  echo '<div class="row bad">✗ Login failed: <b>'.h($e->getMessage()).'</b><br>This usually means a wrong <b>user</b> or <b>password</b>. Copy them exactly from cPanel → MySQL Databases.</div>';
  exit;
}

/* 4) can we select the database? (tests db name + user-to-db privileges) */
try {
  $pdo->exec("USE `".str_replace('`','',$d['name'])."`");
  echo '<div class="row ok">✓ Database <b>'.h($d['name']).'</b> opened — user is added to it.</div>';
} catch (Throwable $e) {
  echo '<div class="row bad">✗ Cannot open database <b>'.h($d['name']).'</b>: '.h($e->getMessage()).'<br>Either the <b>name is wrong</b>, or the <b>user is not added to this database</b> (cPanel → MySQL Databases → "Add User To Database" → ALL PRIVILEGES).</div>';
  exit;
}

/* 5) create table + count */
try {
  $pdo->exec("CREATE TABLE IF NOT EXISTS leads (
    id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(120) NOT NULL, phone VARCHAR(40) NOT NULL,
    email VARCHAR(160) NULL, area VARCHAR(120) NULL, service VARCHAR(120) NULL, message TEXT NULL,
    source VARCHAR(160) NULL, ip VARCHAR(45) NULL, created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
  $n = $pdo->query("SELECT COUNT(*) FROM leads")->fetchColumn();
  echo '<div class="row ok">✓ <b>leads</b> table is ready. Current records: <b>'.(int)$n.'</b>.</div>';
  echo '<div class="row ok"><b>Everything works.</b> Forms will now save to the database and show in <code>/leads.php</code>. You can delete this db-check.php file.</div>';
} catch (Throwable $e) {
  echo '<div class="row bad">✗ Table error: '.h($e->getMessage()).'<br>The user needs ALL PRIVILEGES on this database.</div>';
}
