<?php
$services = require __DIR__ . '/data/services.php';
$slug = isset($_GET['s']) ? preg_replace('/[^a-z0-9\-]/', '', $_GET['s']) : '';

if (!isset($services[$slug])) {
    http_response_code(404);
    include __DIR__ . '/404.php';
    exit;
}
$s = $services[$slug];
$site_url = 'https://www.aircondexpert.my';
$wa = 'https://wa.me/60123456789';

$page_title = $s['title'] . ' in the Klang Valley';
$page_desc  = $s['desc'];
$active     = 'services';
$canonical  = $site_url . '/services/' . $slug . '/';
include __DIR__ . '/inc/header.php';
?>

<section class="phero">
  <div class="glow"></div>
  <div class="wrap">
    <div class="crumb"><a href="/">Home</a> <span>/</span> <a href="/services/">Services</a> <span>/</span> <?= htmlspecialchars($s['title']) ?></div>
    <h1><?= htmlspecialchars($s['title']) ?></h1>
    <p><?= htmlspecialchars($s['tagline']) ?></p>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="sd-grid">
      <div class="sd-body">
        <div class="imgph" style="border-radius:var(--r-lg);aspect-ratio:16/8;margin-bottom:28px;border:1px solid var(--line)">
          <span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add a <?= htmlspecialchars($s['title']) ?> photo</span></span>
          <img src="/assets/img/<?= $slug ?>.jpg" alt="<?= htmlspecialchars($s['title']) ?>" loading="lazy" onerror="this.style.display='none'">
        </div>
        <?php foreach ($s['intro'] as $i => $para): ?>
          <?php if ($i === 0): ?><h2>What This Covers</h2><?php endif; ?>
          <p><?= htmlspecialchars($para) ?></p>
        <?php endforeach; ?>
        <h2>What Is Included</h2>
        <ul class="sd-list">
          <?php foreach ($s['included'] as $item): ?>
          <li><span class="ck">&#10003;</span><?= htmlspecialchars($item) ?></li>
          <?php endforeach; ?>
        </ul>
        <h2>Why Book With Us</h2>
        <p>Licensed, in-house technicians, all major brands, and a clear quote agreed before any work begins. You get clean, careful work, a tidy finish and a real warranty in writing.</p>
      </div>

      <aside class="sd-aside">
        <div class="sd-card">
          <div class="top"><h3>Book <?= htmlspecialchars($s['title']) ?></h3><p>WhatsApp us a photo and your area for a fast reply.</p></div>
          <div class="bd">
            <a href="<?= $wa ?>" class="btn btn-wa"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> Book on WhatsApp</a>
            <a href="tel:60123456789" class="btn btn-line"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.7 2z"/></svg> <span class="btn-txt">Call now</span></a>
            <a href="/contact/" class="btn btn-navy"><span class="btn-txt">Request a quote</span></a>
          </div>
        </div>
      </aside>
    </div>

    <h2 style="color:var(--navy-deep);font-size:24px;margin-top:48px">Related Services</h2>
    <div class="sd-rel">
      <?php foreach ($s['related'] as $r): if(!isset($services[$r])) continue; ?>
      <a href="/services/<?= $r ?>/"><?= htmlspecialchars($services[$r]['title']) ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/inc/footer.php'; ?>
