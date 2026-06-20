<?php
/* Key-protected leads dashboard. */
session_start();
/* never cache this page (LiteSpeed/cPanel can serve stale output otherwise) */
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: 0');
header('X-LiteSpeed-Cache-Control: no-cache');
$cfg = require __DIR__ . '/api/config.php';

$adminKey = is_string($cfg['admin_key'] ?? null) ? $cfg['admin_key'] : '';

if (isset($_GET['logout'])) { $_SESSION = []; session_destroy(); header('Location: /leads.php'); exit; }

$given = $_POST['key'] ?? '';
if ($adminKey !== '' && $given !== '' && hash_equals($adminKey, (string)$given)) {
  $_SESSION['leads_auth'] = true;
}
$authed = !empty($_SESSION['leads_auth']);

function h($v){ return htmlspecialchars((string)$v, ENT_QUOTES); }
function waNum($p){ $d=preg_replace('/\D/','',(string)$p); if($d==='')return''; if(strpos($d,'60')===0)return $d; if($d[0]==='0')return '60'.substr($d,1); return $d; }

if (!$authed) {
  $tried = ($given !== '');
  ?>
  <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex,nofollow"><title>Leads login</title>
  <style>
    *{box-sizing:border-box}
    body{font-family:system-ui,Segoe UI,Arial,sans-serif;background:radial-gradient(900px 500px at 70% -10%,#15489C,#0E3988 60%,#0C2A63);margin:0;min-height:100vh;display:flex;align-items:center;justify-content:center;padding:20px}
    form{background:#fff;padding:36px 32px;border-radius:18px;box-shadow:0 40px 80px -40px rgba(0,0,0,.6);width:min(380px,92vw)}
    .badge{width:54px;height:54px;border-radius:14px;background:linear-gradient(140deg,#0E3988,#15489C);display:flex;align-items:center;justify-content:center;margin-bottom:18px}
    .badge svg{width:28px;height:28px;color:#FCCF08}
    h1{font-size:20px;margin:0 0 4px;color:#0c1830}
    p{font-size:13.5px;color:#5b6b82;margin:0 0 20px}
    input{width:100%;padding:13px 14px;border:1.5px solid #dce7f1;border-radius:11px;font-size:15px;margin-bottom:12px}
    input:focus{outline:none;border-color:#15489C;box-shadow:0 0 0 3px rgba(21,72,156,.13)}
    button{width:100%;padding:13px;border:none;border-radius:11px;background:#0E3988;color:#fff;font-weight:700;font-size:15px;cursor:pointer}
    button:hover{background:#0C2A63}
    .err{background:#fdeaea;border:1px solid #f3c2c2;color:#b23b3b;font-size:13px;padding:9px 12px;border-radius:9px;margin-bottom:14px}
  </style></head><body>
    <form method="post" action="/leads.php">
      <div class="badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
      <h1>Leads Dashboard</h1>
      <p>Enter your admin key to view enquiries.</p>
      <?php if ($tried): ?><div class="err">Wrong key. Please try again.</div><?php endif; ?>
      <input type="password" name="key" placeholder="Admin key" autofocus autocomplete="off">
      <button type="submit">Sign in</button>
    </form>
  </body></html>
  <?php
  exit;
}

if (empty($cfg['db']['enabled'])) {
  exit('Database is not enabled yet. Set db.enabled => true in api/config.local.php with your MySQL details.');
}

$rows = []; $err = '';
try {
  $d = $cfg['db'];
  $pdo = new PDO("mysql:host={$d['host']};dbname={$d['name']};charset=utf8mb4", $d['user'], $d['pass'],
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_TIMEOUT => 5]);
  $pdo->exec("CREATE TABLE IF NOT EXISTS leads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(120) NOT NULL, phone VARCHAR(40) NOT NULL, email VARCHAR(160) NULL,
    area VARCHAR(120) NULL, service VARCHAR(120) NULL, message TEXT NULL,
    source VARCHAR(160) NULL, ip VARCHAR(45) NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
  $rows = $pdo->query("SELECT * FROM leads ORDER BY id DESC LIMIT 1000")->fetchAll(PDO::FETCH_ASSOC);
} catch (Throwable $e) { $err = $e->getMessage(); }

$total=count($rows); $today=0; $week=0; $month=0; $now=time();
foreach($rows as $r){ $ts=strtotime((string)$r['created_at']); if(!$ts)continue;
  if(date('Y-m-d',$ts)===date('Y-m-d'))$today++;
  if($ts >= $now-7*86400)$week++;
  if(date('Y-m',$ts)===date('Y-m'))$month++;
}
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex,nofollow">
<title>Leads Dashboard — Aiqon Quick Cool</title>
<style>
  *{box-sizing:border-box}
  :root{--navy:#0E3988;--navy2:#15489C;--ink:#0c1830;--muted:#5b6b82;--line:#e6edf5;--yellow:#FCCF08}
  body{font-family:system-ui,Segoe UI,Arial,sans-serif;margin:0;background:#eef2f7;color:var(--ink)}
  .top{background:linear-gradient(120deg,#0C2A63,#15489C);color:#fff;padding:18px 26px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px}
  .top .b{display:flex;align-items:center;gap:12px}
  .top .mark{width:40px;height:40px;border-radius:11px;background:rgba(255,255,255,.12);display:flex;align-items:center;justify-content:center}
  .top .mark svg{width:22px;height:22px;color:var(--yellow)}
  .top h1{font-size:17px;margin:0;font-weight:700}
  .top .sub{font-size:12.5px;color:#cfe0f5}
  .top a.out{color:#fff;text-decoration:none;font-size:13px;font-weight:600;background:rgba(255,255,255,.14);padding:9px 16px;border-radius:9px}
  .top a.out:hover{background:rgba(255,255,255,.24)}
  .page{max-width:1200px;margin:0 auto;padding:22px}
  .cards{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:22px}
  .card{display:flex;align-items:center;gap:15px;background:#fff;border:1px solid var(--line);border-radius:16px;padding:18px 20px;box-shadow:0 14px 34px -26px rgba(14,57,136,.5);transition:transform .2s,box-shadow .2s}
  .card:hover{transform:translateY(-3px);box-shadow:0 22px 44px -26px rgba(14,57,136,.6)}
  .card .ic{width:50px;height:50px;border-radius:14px;display:flex;align-items:center;justify-content:center;flex:0 0 auto}
  .card .ic svg{width:24px;height:24px;color:#fff}
  .card .n{font-size:27px;font-weight:800;line-height:1;color:var(--ink)}
  .card .l{font-size:12.5px;color:var(--muted);margin-top:5px}
  .lav{display:inline-flex;align-items:center;justify-content:center;width:30px;height:30px;border-radius:50%;background:linear-gradient(140deg,var(--navy),var(--navy2));color:#fff;font-weight:700;font-size:12px;margin-right:9px;vertical-align:middle}
  .panel{background:#fff;border:1px solid var(--line);border-radius:16px;box-shadow:0 14px 34px -26px rgba(14,57,136,.5);overflow:hidden}
  .panel .bar{display:flex;justify-content:space-between;align-items:center;gap:12px;padding:16px 20px;border-bottom:1px solid var(--line);flex-wrap:wrap}
  .panel .bar h2{font-size:15px;margin:0}
  .search{position:relative}
  .search input{padding:10px 14px 10px 36px;border:1.5px solid var(--line);border-radius:10px;font-size:14px;width:min(280px,70vw)}
  .search input:focus{outline:none;border-color:var(--navy2);box-shadow:0 0 0 3px rgba(21,72,156,.12)}
  .search svg{position:absolute;left:11px;top:50%;transform:translateY(-50%);width:16px;height:16px;color:#9fb0c4}
  .tw{overflow-x:auto}
  table{border-collapse:collapse;width:100%;font-size:13.5px;min-width:860px}
  th,td{padding:12px 14px;text-align:left;border-bottom:1px solid var(--line);vertical-align:top}
  th{background:#f5f8fc;font-size:11.5px;text-transform:uppercase;letter-spacing:.05em;color:var(--navy);position:sticky;top:0}
  tbody tr:hover td{background:#fafcff}
  td.msg{max-width:300px;white-space:pre-wrap;color:#3a4658}
  .who{font-weight:600;color:var(--ink)}
  .svc{display:inline-block;background:#eef3fb;color:var(--navy);font-size:12px;font-weight:600;padding:4px 10px;border-radius:999px}
  .acts{display:flex;gap:7px}
  .acts a{width:30px;height:30px;border-radius:8px;display:flex;align-items:center;justify-content:center;text-decoration:none}
  .acts a.call{background:#eef3fb;color:var(--navy)}
  .acts a.wa{background:#e7f8ee;color:#1f9d57}
  .acts a:hover{filter:brightness(.96)}
  .acts svg{width:16px;height:16px}
  .ph{font-weight:600;color:var(--ink)}
  .empty{padding:48px;text-align:center;color:var(--muted)}
  .err{padding:20px;color:#b23b3b}
  @media(max-width:760px){.cards{grid-template-columns:1fr 1fr}}
</style>
</head><body>
<div class="top">
  <div class="b">
    <span class="mark"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 13h8V3H3zM13 21h8V8h-8zM3 21h8v-5H3z"/></svg></span>
    <div><h1>Leads Dashboard</h1><div class="sub">Aiqon Quick Cool &middot; Aircond enquiries</div></div>
  </div>
  <a class="out" href="/leads.php?logout=1">Log out</a>
</div>

<div class="page">
<?php if ($err): ?>
  <div class="panel"><div class="err">Database error: <?= h($err) ?></div></div>
<?php else: ?>
  <div class="cards">
    <div class="card"><span class="ic" style="background:#15489C"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.9"/></svg></span><div><div class="n"><?= $total ?></div><div class="l">Total leads</div></div></div>
    <div class="card"><span class="ic" style="background:#1f9d57"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span><div><div class="n"><?= $today ?></div><div class="l">Today</div></div></div>
    <div class="card"><span class="ic" style="background:#e0b400"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span><div><div class="n"><?= $week ?></div><div class="l">Last 7 days</div></div></div>
    <div class="card"><span class="ic" style="background:#d8628a"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/></svg></span><div><div class="n"><?= $month ?></div><div class="l">This month</div></div></div>
  </div>

  <div class="panel">
    <div class="bar">
      <h2>All Enquiries</h2>
      <div class="search">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4-4"/></svg>
        <input id="q" type="text" placeholder="Search name, phone, service…" oninput="filterRows()">
      </div>
    </div>
    <?php if (!$rows): ?>
      <div class="empty">No enquiries yet. New form submissions will appear here.</div>
    <?php else: ?>
    <div class="tw">
      <table id="tbl">
        <thead><tr>
          <th>#</th><th>Date</th><th>Name</th><th>Phone</th><th>Email</th>
          <th>Area</th><th>Service</th><th>Message</th><th>Source</th><th>Contact</th>
        </tr></thead>
        <tbody>
        <?php foreach ($rows as $r): $ts=strtotime((string)$r['created_at']); $wa=waNum($r['phone']); ?>
          <tr>
            <td><?= h($r['id']) ?></td>
            <td><?= $ts ? date('M j, Y', $ts).'<br><span style="color:#9fb0c4;font-size:12px">'.date('g:i A',$ts).'</span>' : h($r['created_at']) ?></td>
            <td class="who"><span class="lav"><?= h(strtoupper(substr((string)$r['name'],0,1))) ?></span><?= h($r['name']) ?></td>
            <td class="ph"><?= h($r['phone']) ?></td>
            <td><?= h($r['email']) ?></td>
            <td><?= h($r['area']) ?></td>
            <td><?= $r['service'] ? '<span class="svc">'.h($r['service']).'</span>' : '' ?></td>
            <td class="msg"><?= h($r['message']) ?></td>
            <td><?= h($r['source']) ?></td>
            <td><div class="acts">
              <a class="call" href="tel:<?= h($r['phone']) ?>" title="Call"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.7 2z"/></svg></a>
              <?php if($wa): ?><a class="wa" target="_blank" href="https://wa.me/<?= h($wa) ?>" title="WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm0 18a8 8 0 01-4.1-1.1l-.3-.2-2.8.7.8-2.7-.2-.3A8 8 0 1112 20z"/></svg></a><?php endif; ?>
            </div></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <?php endif; ?>
  </div>
<?php endif; ?>
</div>

<script>
function filterRows(){
  var q=document.getElementById('q').value.toLowerCase();
  document.querySelectorAll('#tbl tbody tr').forEach(function(tr){
    tr.style.display = tr.textContent.toLowerCase().indexOf(q)>-1 ? '' : 'none';
  });
}
</script>
</body></html>
