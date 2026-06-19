<?php
http_response_code(404);
$page_title='Page Not Found';
$page_desc='Sorry, the page you were looking for does not exist.';
$active='';
include __DIR__.'/inc/header.php';
?>
<section class="section"><div class="wrap e404">
  <div class="big">4<span>0</span>4</div>
  <h1>This Page Took A Day Off</h1>
  <p>The page you are looking for has moved or never existed. Let us get you back to cooler ground.</p>
  <div class="btns">
    <a href="/" class="btn btn-navy"><span class="btn-txt">Back to home</span></a>
    <a href="/services/" class="btn btn-line"><span class="btn-txt">Browse services</span></a>
    <a href="https://wa.me/60123456789" class="btn btn-wa"><span class="btn-txt">WhatsApp us</span></a>
  </div>
</div></section>
<?php include __DIR__.'/inc/footer.php'; ?>