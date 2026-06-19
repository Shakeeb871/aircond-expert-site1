<?php
/* Key-protected leads viewer. Shows a login box instead of a dead-end. */
$cfg = require __DIR__ . '/api/config.php';

$adminKey = is_string($cfg['admin_key'] ?? null) ? $cfg['admin_key'] : '';
$given = $_POST['key'] ?? ($_GET['key'] ?? '');
$authed = ($adminKey !== '' && hash_equals($adminKey, (string)$given));

function h($v){ return htmlspecialchars((string)$v, ENT_QUOTES); }

if (!$authed) {
  // login form (no "Forbidden" dead-end)
  $tried = ($given !== '');
  ?>
  <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex,nofollow"><title>Leads login</title>
  <style>
    body{font-family:system-ui,Segoe UI,Arial,sans-serif;background:#0E3988;margin:0;min-height:100vh;display:flex;align-items:center;justify-content:center}
    form{background:#fff;padding:34px 30px;border-radius:16px;box-shadow:0 30px 60px -30px rgba(0,0,0,.5);width:min(360px,90vw)}
    h1{font-size:18px;margin:0 0 4px;color:#0c1830}
    p{font-size:13px;color:#5b6b82;margin:0 0 18px}
    input{width:100%;box-sizing:border-box;padding:13px 14px;border:1.5px solid #dce7f1;border-radius:11px;font-size:15px;margin-bottom:12px}
    button{width:100%;padding:13px;border:none;border-radius:11px;background:#0E3988;color:#fff;font-weight:700;font-size:15px;cursor:pointer}
    .err{color:#b23b3b;font-size:13px;margin-bottom:10px}
  </style></head><body>
    <form method="post" action="/leads-admin.php">
      <h1>Leads access</h1>
      <p>Enter your admin key to view enquiries.</p>
      <?php if ($tried): ?><div class="err">Wrong key. Try again.</div><?php endif; ?>
      <input type="password" name="key" placeholder="Admin key" autofocus autocomplete="off">
      <button type="submit">View leads</button>
    </form>
  </body></html>
  <?php
  exit;
}

if (empty($cfg['db']['enabled'])) {
  exit('Database is not enabled yet. In api/config.php set db.enabled => true and fill in your MySQL details.');
}

$rows = [];
$err = '';
try {
  $d = $cfg['db'];
  $pdo = new PDO(
    "mysql:host={$d['host']};dbname={$d['name']};charset=utf8mb4",
    $d['user'], $d['pass'],
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
  $rows = $pdo->query("SELECT * FROM leads ORDER BY id DESC LIMIT 500")->fetchAll(PDO::FETCH_ASSOC);
} catch (Throwable $e) {
  $err = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex,nofollow">
<title>Leads — Aiqon Quick Cool</title>
<style>
  body{font-family:system-ui,Segoe UI,Arial,sans-serif;margin:0;background:#f4f7fb;color:#0c1830}
  header{background:#0E3988;color:#fff;padding:18px 24px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:10px}
  header h1{font-size:18px;margin:0}
  header .c{font-size:13px;color:#cfe0f5}
  .wrap{padding:22px;overflow-x:auto}
  table{border-collapse:collapse;width:100%;background:#fff;border-radius:10px;overflow:hidden;box-shadow:0 10px 30px -20px rgba(14,57,136,.5);font-size:13.5px}
  th,td{padding:11px 13px;text-align:left;border-bottom:1px solid #e6edf5;vertical-align:top}
  th{background:#eef3fb;font-size:12px;text-transform:uppercase;letter-spacing:.05em;color:#0E3988}
  tr:hover td{background:#fafcff}
  td.msg{max-width:320px;white-space:pre-wrap}
  .empty{padding:40px;text-align:center;color:#5b6b82}
  a.tel{color:#0E3988;font-weight:600;text-decoration:none}
</style>
</head><body>
<header>
  <h1>Leads — Aiqon Quick Cool</h1>
  <span class="c"><?= count($rows) ?> record(s) &middot; newest first</span>
</header>
<div class="wrap">
<?php if ($err): ?>
  <p style="color:#b23b3b">Database error: <?= h($err) ?></p>
<?php elseif (!$rows): ?>
  <div class="empty">No enquiries yet.</div>
<?php else: ?>
  <table>
    <thead><tr>
      <th>#</th><th>Date</th><th>Name</th><th>Phone</th><th>Email</th>
      <th>Area</th><th>Service</th><th>Message</th><th>Source</th>
    </tr></thead>
    <tbody>
    <?php foreach ($rows as $r): ?>
      <tr>
        <td><?= h($r['id']) ?></td>
        <td><?= h($r['created_at']) ?></td>
        <td><?= h($r['name']) ?></td>
        <td><a class="tel" href="tel:<?= h($r['phone']) ?>"><?= h($r['phone']) ?></a></td>
        <td><?= h($r['email']) ?></td>
        <td><?= h($r['area']) ?></td>
        <td><?= h($r['service']) ?></td>
        <td class="msg"><?= h($r['message']) ?></td>
        <td><?= h($r['source']) ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>
</div>
</body></html>
