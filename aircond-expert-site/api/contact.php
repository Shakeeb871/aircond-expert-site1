<?php
$cfg = require __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: /contact/'); exit; }

// honeypot: bots fill the hidden "company" field
if (!empty($_POST['company'])) { header('Location: /contact/?sent=1'); exit; }

function clean($k){ return isset($_POST[$k]) ? trim(strip_tags($_POST[$k])) : ''; }
$name=clean('name'); $phone=clean('phone'); $area=clean('area');
$service=clean('service'); $message=clean('message');

if ($name === '' || $phone === '') { header('Location: /contact/?err=1'); exit; }

$lines = [
  'Name: '.$name, 'Phone: '.$phone, 'Area: '.$area,
  'Service: '.$service, 'Message: '.$message,
  'Time: '.date('Y-m-d H:i:s'), 'IP: '.(isset($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:''),
];
$body = implode("\n", $lines);

// 1) always keep a local backup
@file_put_contents($cfg['log_file'], $body."\n----\n", FILE_APPEND);

// 2) try to email it
$subject = 'New enquiry: '.$name.' ('.($service ?: 'general').')';
$headers = 'From: '.$cfg['site_name'].' <'.$cfg['from_email'].">\r\n".
           'Reply-To: '.$cfg['from_email']."\r\n".
           'Content-Type: text/plain; charset=UTF-8';
@mail($cfg['to_email'], $subject, $body, $headers);

header('Location: /contact/?sent=1');
exit;
