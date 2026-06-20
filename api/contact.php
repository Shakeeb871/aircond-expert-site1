<?php
$cfg = require __DIR__ . '/config.php';

$isAjax = (isset($_POST['ajax']) && $_POST['ajax'] === '1')
       || (strtolower($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '') === 'xmlhttprequest');

function respond($isAjax, $ok, $err = '') {
  if ($isAjax) {
    header('Content-Type: application/json');
    echo json_encode(['ok' => $ok, 'error' => $err]);
    exit;
  }
  header('Location: /contact/?' . ($ok ? 'sent=1' : 'err=1'));
  exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: /contact/'); exit; }

// honeypot: bots fill the hidden "company" field — pretend success
if (!empty($_POST['company'])) { respond($isAjax, true); }

function clean($k){ return isset($_POST[$k]) ? trim(strip_tags($_POST[$k])) : ''; }
$name=clean('name'); $phone=clean('phone'); $email=clean('email'); $area=clean('area');
$service=clean('service'); $message=clean('message');
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$source = '';
if (!empty($_SERVER['HTTP_REFERER'])) {
  $source = substr((string)(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH) ?: ''), 0, 160);
}

if ($name === '' || $phone === '') { respond($isAjax, false, 'Please enter your name and phone number.'); }

// 1) Save to the database (best-effort; never blocks the enquiry)
if (!empty($cfg['db']['enabled'])) {
  try {
    $d = $cfg['db'];
    $pdo = new PDO(
      "mysql:host={$d['host']};dbname={$d['name']};charset=utf8mb4",
      $d['user'], $d['pass'],
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_TIMEOUT => 5]
    );
    $pdo->exec("CREATE TABLE IF NOT EXISTS leads (
      id INT AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(120) NOT NULL,
      phone VARCHAR(40) NOT NULL,
      email VARCHAR(160) NULL,
      area VARCHAR(120) NULL,
      service VARCHAR(120) NULL,
      message TEXT NULL,
      source VARCHAR(160) NULL,
      ip VARCHAR(45) NULL,
      created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
    $st = $pdo->prepare("INSERT INTO leads (name,phone,email,area,service,message,source,ip)
                         VALUES (?,?,?,?,?,?,?,?)");
    $st->execute([$name,$phone,$email,$area,$service,$message,$source,$ip]);
  } catch (Throwable $e) {
    @file_put_contents($cfg['log_file'], '[DB ERROR] '.$e->getMessage()."\n", FILE_APPEND);
  }
}

// 2) Always keep a local text backup
$lines = [
  'Name: '.$name, 'Phone: '.$phone, 'Email: '.$email, 'Area: '.$area,
  'Service: '.$service, 'Message: '.$message, 'Source: '.$source,
  'Time: '.date('Y-m-d H:i:s'), 'IP: '.$ip,
];
$body = implode("\n", $lines);
@file_put_contents($cfg['log_file'], $body."\n----\n", FILE_APPEND);

// 3) Email it to you
$subject = 'New enquiry: '.$name.' ('.($service ?: 'general').')';
$replyTo = ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) ? $email : $cfg['from_email'];
$headers = 'From: '.$cfg['site_name'].' <'.$cfg['from_email'].">\r\n".
           'Reply-To: '.$replyTo."\r\n".
           'Content-Type: text/plain; charset=UTF-8';
@mail($cfg['to_email'], $subject, $body, $headers);

respond($isAjax, true);
