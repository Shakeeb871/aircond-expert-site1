<?php
$posts = require __DIR__ . '/data/posts.php';
$page_title = 'Aircond Tips & Guides';
$page_desc  = 'Practical air conditioning advice from our technicians: buying guides, maintenance tips and troubleshooting for Klang Valley homes.';
$active = 'blog';
$canonical = 'https://www.aircondexpert.my/blog/';
include __DIR__ . '/inc/header.php';
?>
<section class="phero"><div class="glow"></div><div class="wrap">
  <div class="crumb"><a href="/">Home</a> <span>/</span> Blog</div>
  <h1>Aircond Tips &amp; Guides</h1>
  <p>Practical advice from our licensed technicians to help you keep your aircond cool, efficient and trouble-free.</p>
</div></section>

<section class="section"><div class="wrap">
  <div class="blog-grid" style="margin-top:0">
  <?php foreach ($posts as $slug => $p): ?>
    <a href="/blog/<?= $slug ?>/" class="bpost">
      <div class="bp-img imgph">
        <span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Article photo</span></span>
        <img src="/assets/img/<?= $p['img'] ?>.jpg" alt="<?= htmlspecialchars($p['title']) ?>" loading="lazy" onerror="this.style.display='none'">
        <span class="bp-cat"><?= htmlspecialchars($p['category']) ?></span>
      </div>
      <div class="bp-body">
        <span class="bp-meta"><?= date('M j, Y', strtotime($p['date'])) ?> &middot; <?= (int)$p['read'] ?> min read</span>
        <h3><?= htmlspecialchars($p['title']) ?></h3>
        <p class="bp-excerpt"><?= htmlspecialchars($p['excerpt']) ?></p>
        <span class="bp-more">Read More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
      </div>
    </a>
  <?php endforeach; ?>
  </div>
</div></section>

<?php include __DIR__ . '/inc/footer.php'; ?>
