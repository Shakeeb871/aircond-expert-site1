<?php
$services = require __DIR__ . '/data/services.php';
$page_title = 'Our Aircond Services';
$page_desc  = 'Aircond service, chemical wash, repair, installation, gas top-up and general cleaning across Kuala Lumpur and Selangor. All major brands.';
$active='services'; $canonical='https://www.aircondexpert.my/services/';
include __DIR__.'/inc/header.php';
$icons=[
 'aircond-service'=>'<circle cx="12" cy="12" r="3"/><path d="M12 2v3M12 19v3M5 5l2 2M17 17l2 2M2 12h3M19 12h3M5 19l2-2M17 7l2-2"/>',
 'chemical-wash'=>'<path d="M3 21l8-8M14 4l6 6-9 9H5v-6z"/><path d="M13 5l6 6"/>',
 'aircond-repair'=>'<path d="M14 6l-4 4-3-3-5 5v5h5l9-9z"/><path d="M14 6l4-4 2 2-4 4z"/>',
 'installation'=>'<rect x="2" y="5" width="20" height="11" rx="2"/><path d="M6 12h12M9 20h6"/>',
 'gas-top-up'=>'<path d="M12 2s5 5 5 9a5 5 0 01-10 0c0-4 5-9 5-9z"/>',
 'general-cleaning'=>'<path d="M3 12h18M3 6h18M3 18h18"/>',
];
?>
<section class="phero"><div class="glow"></div><div class="wrap">
  <div class="crumb"><a href="/">Home</a> <span>/</span> Services</div>
  <h1>Our Aircond Services</h1>
  <p>From a quick service to a full chemical wash or a new installation, our licensed technicians cover it all across Kuala Lumpur and Selangor.</p>
</div></section>
<section class="section"><div class="wrap"><div class="svc-grid" style="margin-top:0">
<?php foreach($services as $slug=>$s): ?>
  <div class="svc">
    <div class="svc-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add a "<?= htmlspecialchars($s['title']) ?>" photo</span></span><img src="/assets/img/<?= $slug ?>.jpg" alt="<?= htmlspecialchars($s['title']) ?>" loading="lazy" onerror="this.style.display='none'"></div>
    <div class="svc-body"><h3><?= htmlspecialchars($s['title']) ?></h3><p><?= htmlspecialchars($s['tagline']) ?></p>
      <a href="/services/<?= $slug ?>/" class="btn btn-line svc-more"><span class="btn-txt">Learn More</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
  </div>
<?php endforeach; ?>
</div></div></section>
<?php include __DIR__.'/inc/brands.php'; ?>
<?php include __DIR__.'/inc/footer.php'; ?>