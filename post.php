<?php
$posts = require __DIR__ . '/data/posts.php';
$slug  = isset($_GET['slug']) ? preg_replace('/[^a-z0-9\-]/', '', $_GET['slug']) : '';

if (!isset($posts[$slug])) {
    http_response_code(404);
    include __DIR__ . '/404.php';
    exit;
}
$p  = $posts[$slug];
$wa = 'https://wa.me/60123456789';

$page_title = $p['title'];
$page_desc  = $p['excerpt'];
$active      = 'blog';
$canonical   = 'https://aiqonquickcool.com.my/blog/' . $slug . '/';
include __DIR__ . '/inc/header.php';

// up to 3 other posts for "More Articles"
$more = array_filter($posts, fn($k) => $k !== $slug, ARRAY_FILTER_USE_KEY);
$more = array_slice($more, 0, 3, true);
?>
<section class="phero"><div class="glow"></div><div class="wrap">
  <div class="crumb"><a href="/">Home</a> <span>/</span> <a href="/blog/">Blog</a> <span>/</span> <?= htmlspecialchars($p['title']) ?></div>
  <h1><?= htmlspecialchars($p['title']) ?></h1>
  <p><?= date('M j, Y', strtotime($p['date'])) ?> &middot; <?= (int)$p['read'] ?> min read &middot; <?= htmlspecialchars($p['category']) ?></p>
</div></section>

<section class="section"><div class="wrap">
  <div class="post-wrap">
    <div class="imgph post-hero-img">
      <span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add a <?= htmlspecialchars($p['title']) ?> photo</span></span>
      <img src="/assets/img/<?= $p['img'] ?>.jpg" alt="<?= htmlspecialchars($p['title']) ?>" loading="lazy" onerror="this.style.display='none'">
    </div>

    <article class="prose"><?= $p['body'] ?></article>

    <div class="post-cta">
      <div><h3>Need an aircond expert?</h3><p>WhatsApp us a photo and your area for a fast, fixed-price reply.</p></div>
      <a href="<?= $wa ?>" class="btn btn-wa"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> <span class="btn-txt">Book on WhatsApp</span></a>
    </div>
  </div>

  <h2 style="color:var(--navy-deep);font-size:24px;margin:48px 0 0;text-align:center">More Articles</h2>
  <div class="blog-grid">
  <?php foreach ($more as $mslug => $m): ?>
    <a href="/blog/<?= $mslug ?>/" class="bpost">
      <div class="bp-img imgph">
        <span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Article photo</span></span>
        <img src="/assets/img/<?= $m['img'] ?>.jpg" alt="<?= htmlspecialchars($m['title']) ?>" loading="lazy" onerror="this.style.display='none'">
        <span class="bp-cat"><?= htmlspecialchars($m['category']) ?></span>
      </div>
      <div class="bp-body">
        <span class="bp-meta"><?= date('M j, Y', strtotime($m['date'])) ?> &middot; <?= (int)$m['read'] ?> min read</span>
        <h3><?= htmlspecialchars($m['title']) ?></h3>
        <p class="bp-excerpt"><?= htmlspecialchars($m['excerpt']) ?></p>
        <span class="bp-more">Read More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
      </div>
    </a>
  <?php endforeach; ?>
  </div>
</div></section>

<?php include __DIR__ . '/inc/testimonials.php'; ?>
<?php include __DIR__ . '/inc/footer.php'; ?>


