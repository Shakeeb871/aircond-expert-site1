<?php
$site_name      = 'Aiqon Quick Cool';
$site_phone     = '+60 12-345 6789';
$site_phone_raw = '60123456789';
$wa             = 'https://wa.me/60123456789';
$site_url       = 'https://www.aircondexpert.my';
if (!isset($page_title)) $page_title = '24-Hour Aircond Service, Repair & Installation Malaysia';
if (!isset($page_desc))  $page_desc  = 'Licensed 24-hour aircond service, repair, chemical wash, gas top-up and installation across Kuala Lumpur and Selangor. All brands, fast WhatsApp reply.';
if (!isset($active))     $active     = '';
if (!isset($canonical))  $canonical  = '';
$cssv = @filemtime(__DIR__ . '/../assets/css/style.css') ?: '1';
$logov = @filemtime(__DIR__ . '/../assets/img/logo.png') ?: '1';
function nav_active($k){ global $active; return $active === $k ? ' active' : ''; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($page_title) ?> | <?= $site_name ?></title>
<meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
<?php if (!empty($page_keywords)): ?><meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>">
<?php endif; ?><?php if ($canonical): ?><link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
<?php endif; ?>
<meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="<?= $site_url ?>/assets/img/Aiqon-Quick-Cool-New.png">
<link rel="icon" href="/assets/img/logo.png?v=<?= $logov ?>" sizes="any">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css?v=<?= $cssv ?>">
</head>
<body>

<div class="tbar">
  <div class="wrap">
    <span><i>&#10003;</i> <b>Licensed technicians</b></span><span class="dot"></span>
    <span><i>&#9733;</i> <b>1-Year warranty</b></span><span class="dot"></span>
    <span><b>15-min WhatsApp reply</b></span><span class="dot"></span>
    <span><b>Open Mon to Sun, 8am to 10pm</b></span>
  </div>
</div>

<header class="hd" id="hd">
  <div class="wrap nav">
    <a href="/" class="brand">
      <img src="/assets/img/Aiqon-Quick-Cool-New.png" alt="Aiqon Quick Cool – 24-Hour Aircond Service" class="brand-logo">
    </a>
    <nav class="menu" id="menu">
      <div class="menu-head"><span class="menu-title">Menu</span><button class="menu-close" id="menuClose" aria-label="Close menu"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 6l12 12M18 6L6 18"/></svg></button></div>
      <a href="/"<?= nav_active('home') ? ' class="active"' : '' ?>>Home</a>
      <div class="mdd<?= $active==='services' ? ' active' : '' ?>" id="mdd">
        <span>Services <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M6 9l6 6 6-6"/></svg></span>
        <div class="mega">
          <h5>Aircond</h5>
          <a href="/services/aircond-service/"><span class="mi"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M5 5l2 2M17 17l2 2M2 12h3M19 12h3M5 19l2-2M17 7l2-2"/></svg></span> Aircond Service</a>
          <a href="/services/chemical-wash/"><span class="mi"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21l8-8M14 4l6 6-9 9H5v-6z"/></svg></span> Chemical Wash</a>
          <a href="/services/aircond-repair/"><span class="mi"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 6l-4 4-3-3-5 5v5h5l9-9z"/><path d="M14 6l4-4 2 2-4 4z"/></svg></span> Aircond Repair</a>
          <a href="/services/installation/"><span class="mi"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="11" rx="2"/><path d="M6 12h12M9 20h6"/></svg></span> Installation</a>
          <a href="/services/gas-top-up/"><span class="mi"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2s5 5 5 9a5 5 0 01-10 0c0-4 5-9 5-9z"/></svg></span> Gas Top-Up</a>
          <a href="/services/general-cleaning/"><span class="mi"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12h18M3 6h18M3 18h18"/></svg></span> General Cleaning</a>
          <h5>Explore</h5>
          <a href="/services/"><span class="mi"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16"/></svg></span> All Services</a>
          <a href="/#brands"><span class="mi"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="6" width="18" height="12" rx="2"/></svg></span> Aircond By Brand</a>
          <div class="promo"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#00B0F0" stroke-width="2"><path d="M12 2l2.4 6.9H22l-5.8 4.2 2.2 6.9L12 16l-6.4 4 2.2-6.9L2 8.9h7.6z"/></svg> <span><b>Annual Maintenance</b> plans. <a href="/amc/" style="color:#fff;text-decoration:underline">See AMC &rarr;</a></span></div>
        </div>
      </div>
      <a href="/about/"<?= $active==='about' ? ' class="active"' : '' ?>>About</a>
      <a href="/coverage/"<?= $active==='coverage' ? ' class="active"' : '' ?>>Coverage</a>
      <a href="/amc/"<?= $active==='amc' ? ' class="active"' : '' ?>>AMC</a>
      <a href="/contact/"<?= $active==='contact' ? ' class="active"' : '' ?>>Contact</a>
      <div class="menu-cta">
        <a href="<?= $wa ?>" class="btn btn-wa"><span class="btn-txt">Book on WhatsApp</span></a>
        <a href="tel:<?= $site_phone_raw ?>" class="btn btn-line"><span class="btn-txt">Call <?= $site_phone ?></span></a>
      </div>
    </nav>
    <div class="nav-end">
      <a href="<?= $wa ?>" class="btn btn-y nav-book"><span class="btn-txt">Book on WhatsApp</span></a>
      <button class="burger" id="burger" aria-label="Open menu"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M3 6h18M3 12h18M3 18h18"/></svg></button>
    </div>
  </div>
</header>
<div class="ov" id="ov"></div>
