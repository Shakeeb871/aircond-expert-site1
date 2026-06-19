<?php
$page_title='Contact Aiqon Quick Cool';
$page_desc='Get in touch for aircond service, repair or installation across the Klang Valley. WhatsApp, call, or send us a message.';
$active='contact'; $canonical='https://www.aircondexpert.my/contact/';
$sent = isset($_GET['sent']); $err = isset($_GET['err']);
include __DIR__.'/inc/header.php';
?>
<section class="phero"><div class="glow"></div><div class="wrap">
  <div class="crumb"><a href="/">Home</a> <span>/</span> Contact</div>
  <h1>Get In Touch</h1>
  <p>Tell us what you need and we will reply on WhatsApp, usually within 15 minutes.</p>
</div></section>
<section class="section"><div class="wrap"><div class="contact-grid">
  <div class="cinfo">
    <div class="ci"><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.7 2z"/></svg></span><div><h4>Call or WhatsApp</h4><a href="tel:60123456789">+60 12-345 6789</a></div></div>
    <div class="ci"><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 6 10-6"/></svg></span><div><h4>Email</h4><a href="mailto:hello@aircondexpert.my">hello@aircondexpert.my</a></div></div>
    <div class="ci"><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span><div><h4>Opening hours</h4><p>Monday to Sunday, 8am to 10pm</p></div></div>
    <div class="ci"><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></span><div><h4>Coverage</h4><p>Across the Klang Valley</p></div></div>
    <a href="https://wa.me/60123456789" class="btn btn-wa" style="margin-top:6px"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> <span class="btn-txt">Chat on WhatsApp</span></a>
  </div>
  <div class="bookcard" style="max-width:none;margin:0">
    <div class="bc-top"><span class="pulse"><i></i> 15-min reply</span><h3>Send Us A Message</h3><p>We will get back to you fast with a price or arrival time.</p></div>
    <div class="bc-body">
      <?php if($sent): ?><div class="notice ok">Thanks, your message has been sent. We will reply shortly.</div><?php endif; ?>
      <?php if($err): ?><div class="notice err">Something went wrong. Please WhatsApp us instead and we will sort it.</div><?php endif; ?>
      <form action="/api/contact.php" method="post">
        <div class="bc-field"><label for="name">Full name</label><input id="name" name="name" type="text" required placeholder="e.g. Ahmad or Mei Ling"></div>
        <div class="bc-row">
          <div class="bc-field"><label for="phone">Phone</label><input id="phone" name="phone" type="tel" required placeholder="01X-XXX XXXX"></div>
          <div class="bc-field"><label for="area">Area</label><input id="area" name="area" type="text" placeholder="e.g. Mont Kiara"></div>
        </div>
        <div class="bc-field"><label for="service">Service needed</label>
          <select id="service" name="service">
            <option value="" disabled selected>Select a service</option>
            <option>Aircond Service</option><option>Chemical Wash</option><option>Aircond Repair</option>
            <option>Installation</option><option>Gas Top-Up</option><option>General Cleaning</option><option>Not sure, need advice</option>
          </select>
        </div>
        <div class="bc-field"><label for="message">What is happening?</label><textarea id="message" name="message" rows="3" placeholder="e.g. Not cooling, water dripping, 2 units"></textarea></div>
        <input type="text" name="company" style="display:none" tabindex="-1" autocomplete="off">
        <button type="submit" class="btn btn-wa bc-submit"><span class="btn-txt">Send Message</span></button>
        <p class="bc-note">No spam. We only use this to reply to your request.</p>
      </form>
    </div>
  </div>
</div></div></section>
<?php include __DIR__.'/inc/footer.php'; ?>