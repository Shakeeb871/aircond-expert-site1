<?php
/* Reusable brand logos marquee — original colours, transparent background. */
$brand_names = ['Mitsubishi Electric','Panasonic','Hitachi','Daikin','York','Hisense','Midea','Acson','Haier'];
?>
<section class="section brands" id="brands" style="padding:54px 0">
  <div class="wrap head">
    <div>
      <span class="eyebrow">Trusted Across All Brands</span>
      <h2 style="font-size:clamp(23px,3vw,32px);margin-top:10px">We Service Every Major Aircond Brand</h2>
      <p class="brands-sub">From Daikin to Mitsubishi, our certified technicians know every system inside and out.</p>
    </div>
    <a href="https://wa.me/60123456789" class="btn btn-line"><span class="btn-txt">Ask about your unit</span></a>
  </div>
  <div class="wrap" style="max-width:none;padding:0">
    <div class="mq-mask"><div class="brand-marquee">
      <?php for ($pass = 0; $pass < 2; $pass++): for ($i = 1; $i <= 9; $i++): ?>
      <div class="blogo"><img src="/assets/img/brands/<?= $i ?>.png" alt="<?= $pass === 0 ? htmlspecialchars($brand_names[$i-1]) : '' ?>" loading="lazy"></div>
      <?php endfor; endfor; ?>
    </div></div>
  </div>
</section>
