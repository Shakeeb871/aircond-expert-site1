<?php
$services = require __DIR__ . '/data/services.php';
$slug = isset($_GET['s']) ? preg_replace('/[^a-z0-9\-]/', '', $_GET['s']) : '';

if (!isset($services[$slug])) {
    http_response_code(404);
    include __DIR__ . '/404.php';
    exit;
}
$s = $services[$slug];
$page_keywords = !empty($s['keywords']) ? implode(', ', $s['keywords']) : '';
$site_url = 'https://aiqonquickcool.com.my';
$wa = 'https://wa.me/60123456789';

$page_title = $s['title'] . ' in Kuala Lumpur and Selangor';
$page_desc  = $s['desc'];
$active     = 'services';
$canonical  = $site_url . '/services/' . $slug . '/';
$service_ld = ['name' => $s['title'], 'description' => $s['desc']];
$page_faqs  = !empty($s['faqs']) ? $s['faqs'] : [];
include __DIR__ . '/inc/header.php';

$benefit_icons = [
  '<path d="M13 2L3 14h7l-1 8 10-12h-7z"/>',
  '<path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/><path d="M9 12l2 2 4-4"/>',
  '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
];
?>

<section class="phero">
  <div class="glow"></div>
  <div class="wrap">
    <div class="crumb"><a href="/">Home</a> <span>/</span> <a href="/services/">Services</a> <span>/</span> <?= htmlspecialchars($s['title']) ?></div>
    <span class="eyebrow on-dark">Aircond Service</span>
    <h1 style="margin-top:10px"><?= htmlspecialchars($s['title']) ?></h1>
    <p><?= htmlspecialchars($s['tagline']) ?></p>
    <div class="phero-chips">
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg> Licensed technicians</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg> Fixed price agreed first</span>
      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6L9 17l-5-5"/></svg> All major brands</span>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="sd-grid">
      <div class="sd-body">
        <div class="imgph" style="border-radius:var(--r-lg);aspect-ratio:16/8;margin-bottom:30px;border:1px solid var(--line)">
          <span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add a <?= htmlspecialchars($s['title']) ?> photo</span></span>
          <img src="/assets/img/<?= $slug ?>.jpg" alt="<?= htmlspecialchars($s['title']) ?>" loading="lazy" onerror="this.style.display='none'">
        </div>

        <h2>Professional <?= htmlspecialchars($s['title']) ?> in Kuala Lumpur and Selangor</h2>
        <?php foreach ($s['intro'] as $para): ?>
          <p><?= htmlspecialchars($para) ?></p>
        <?php endforeach; ?>

        <?php if (!empty($s['sections'])): foreach ($s['sections'] as $sec): ?>
        <h2><?= htmlspecialchars($sec[0]) ?></h2>
        <?= $sec[1] ?>
        <?php endforeach; endif; ?>

        <?php if (!empty($s['benefits'])): ?>
        <h2>Why It Matters</h2>
        <div class="sv-benefits">
          <?php foreach ($s['benefits'] as $i => $b): ?>
          <div class="sv-benefit">
            <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><?= $benefit_icons[$i % count($benefit_icons)] ?></svg></span>
            <h4><?= htmlspecialchars($b[0]) ?></h4>
            <p><?= htmlspecialchars($b[1]) ?></p>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <h2>What Is Included</h2>
        <ul class="sd-list">
          <?php foreach ($s['included'] as $item): ?>
          <li><span class="ck">&#10003;</span><?= htmlspecialchars($item) ?></li>
          <?php endforeach; ?>
        </ul>

        <?php if (!empty($s['process'])): ?>
        <h2>How It Works</h2>
        <div class="sv-steps">
          <?php foreach ($s['process'] as $i => $st): ?>
          <div class="sv-step">
            <span class="n"><?= $i + 1 ?></span>
            <div><h4><?= htmlspecialchars($st[0]) ?></h4><p><?= htmlspecialchars($st[1]) ?></p></div>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <h2>Why Book With Us</h2>
        <p>Licensed, in-house technicians on every job, all major brands serviced, and a clear quote agreed before any work begins. You get clean, careful work, a tidy finish, and a real warranty in writing — never a subcontractor and never a surprise on the invoice.</p>

        <?php if (!empty($s['faqs'])): ?>
        <h2>Frequently Asked Questions</h2>
        <div class="sv-faq">
          <?php foreach ($s['faqs'] as $i => $f): ?>
          <details class="faq"<?= $i === 0 ? ' open' : '' ?>><summary><?= htmlspecialchars($f[0]) ?> <span class="pl">+</span></summary><div class="ans"><?= htmlspecialchars($f[1]) ?></div></details>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if (!empty($s['keywords'])): ?>
        <h2>Popular Searches</h2>
        <div class="sv-keywords">
          <?php foreach ($s['keywords'] as $kw): ?><span><?= htmlspecialchars($kw) ?></span><?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>

      <aside class="sd-aside">
        <div class="sd-card">
          <div class="top"><h3>Get a Free Quote</h3><p>Tell us about your <?= htmlspecialchars(strtolower($s['title'])) ?> and we reply fast on WhatsApp.</p></div>
          <form class="bd lead-form" data-wa="60123456789" action="/api/contact.php" method="post">
            <input type="text" name="company" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px" aria-hidden="true">
            <input type="hidden" name="service" value="<?= htmlspecialchars($s['title']) ?>">
            <div class="bc-field"><label for="sf-name">Full name</label><input id="sf-name" name="name" type="text" placeholder="Your name" required></div>
            <div class="bc-field"><label for="sf-phone">Phone</label><input id="sf-phone" name="phone" type="tel" placeholder="01X-XXX XXXX" required></div>
            <div class="bc-field"><label for="sf-email">Email <span style="color:#9fb0c4">(optional)</span></label><input id="sf-email" name="email" type="email" placeholder="you@example.com"></div>
            <div class="bc-field"><label for="sf-area">Area</label><input id="sf-area" name="area" type="text" placeholder="e.g. Mont Kiara"></div>
            <div class="bc-field"><label for="sf-msg">What do you need?</label><textarea id="sf-msg" name="message" rows="3" placeholder="e.g. 2 units, not cooling well"></textarea></div>
            <button type="submit" class="btn btn-wa" style="width:100%;justify-content:center"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> <span class="btn-txt">Send Enquiry</span></button>
            <p class="bc-note">We save your request and email our team, then open WhatsApp so you can confirm instantly.</p>
          </form>
        </div>

        <div class="sd-card">
          <div class="top"><h3>Prefer to talk?</h3><p>Reach a real person for a fast reply.</p></div>
          <div class="bd">
            <a href="<?= $wa ?>" class="btn btn-wa"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> <span class="btn-txt">Book on WhatsApp</span></a>
            <a href="tel:60123456789" class="btn btn-line"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.7 2z"/></svg> <span class="btn-txt">Call +60 12-345 6789</span></a>
          </div>
        </div>
      </aside>
    </div>

    <h2 style="color:var(--navy-deep);font-size:24px;margin-top:50px">Related Services</h2>
    <div class="sd-rel">
      <?php foreach ($s['related'] as $r): if(!isset($services[$r])) continue; ?>
      <a href="/services/<?= $r ?>/"><?= htmlspecialchars($services[$r]['title']) ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/inc/testimonials.php'; ?>
<?php include __DIR__ . '/inc/footer.php'; ?>


