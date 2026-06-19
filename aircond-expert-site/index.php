<?php
$page_title='24-Hour Aircond Service, Repair & Installation';
$page_desc='Licensed 24-hour aircond service, repair, chemical wash, gas top-up and installation across the Klang Valley. All major brands, fixed pricing, 15-minute WhatsApp reply.';
$active='home';
$canonical='https://www.aircondexpert.my/';
include __DIR__.'/inc/header.php';
?>

<!-- HERO -->
<section class="hero" id="top">
  <img class="hero-bg" src="/assets/img/hero.jpg" alt="" loading="eager" onerror="this.style.display='none'">
  <div class="glow"></div>
  <div class="wrap">
    <div>
      <h1>Cold air, fixed <span class="y">fast.</span> Priced fair, every time.</h1>
      <p class="s">24-hour aircond service, repair, chemical wash, gas top-up and installation. Licensed technicians, fixed pricing you agree first, and a real reply on WhatsApp within 15 minutes.</p>
      <div class="chips">
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> All major brands</span>
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> 1-year warranty</span>
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> No bait pricing</span>
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Same-day where slots allow</span>
      </div>
      <div class="hero-cta">
        <a href="https://wa.me/60123456789" class="btn btn-wa"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> <span class="btn-txt">Book on WhatsApp</span></a>
        <a href="tel:+60123456789" class="btn btn-ghost"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.7 2z"/></svg> <span class="btn-txt">Call +60 12-345 6789</span></a>
      </div>
    </div>
    <div class="bookcard reveal" id="book">
      <div class="bc-top">
        <span class="pulse"><i></i> 15-min reply</span>
        <h3>Book your aircond visit</h3>
        <p>Tell us what you need. A real person replies on WhatsApp, fast.</p>
      </div>
      <div class="bc-body">
        <div class="bc-field">
          <label for="bf-name">Full name</label>
          <input id="bf-name" type="text" placeholder="e.g. Ahmad or Mei Ling">
        </div>
        <div class="bc-row">
          <div class="bc-field"><label for="bf-phone">Phone</label><input id="bf-phone" type="tel" placeholder="01X-XXX XXXX"></div>
          <div class="bc-field"><label for="bf-area">Area</label><input id="bf-area" type="text" placeholder="e.g. Mont Kiara"></div>
        </div>
        <div class="bc-field">
          <label for="bf-service">Service needed</label>
          <select id="bf-service">
            <option value="" disabled selected>Select a service</option>
            <option>Aircond Service</option>
            <option>Chemical Wash</option>
            <option>Aircond Repair</option>
            <option>Installation</option>
            <option>Gas Top-Up</option>
            <option>General Cleaning</option>
            <option>Not sure, need advice</option>
          </select>
        </div>
        <div class="bc-field">
          <label for="bf-msg">What is happening?</label>
          <textarea id="bf-msg" rows="2" placeholder="e.g. Not cooling, water dripping, 2 units"></textarea>
        </div>
        <button type="button" class="btn btn-wa bc-submit" id="bookBtn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> <span class="btn-txt">Book on WhatsApp</span></button>
        <p class="bc-note">No spam. We only use this to reply to your request.</p>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="section usp" id="features">
  <div class="wrap center">
    <h2>Built On Four Simple Promises</h2>
    <p class="sub">The things our customers notice first, and the reasons they call us back.</p>
  </div>
  <div class="wrap"><div class="usp-grid reveal">
    <div class="usp-card">
      <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/><path d="M9 12l2 2 4-4"/></svg></span>
      <h3>Expert Technicians</h3>
      <p>Every job is handled by our own trained, insured technicians, never a random subcontractor. They know split units, cassettes and inverter systems inside out, carry the right tools and genuine parts, and explain clearly what they find before any work starts on your aircond.</p>
    </div>
    <div class="usp-card">
      <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M5 5l2 2M19 5l-2 2M2 12h4M18 12h4"/></svg></span>
      <h3>Cool &amp; Efficient</h3>
      <p>A properly serviced aircond cools faster and draws less power, which shows up on your monthly bill. We clean coils, clear drainage and check gas pressure so airflow stays strong, rooms reach temperature quickly, and your compressor is never forced to overwork through the Malaysian heat.</p>
    </div>
    <div class="usp-card">
      <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
      <h3>Serving Malaysia</h3>
      <p>From condos in the city centre to landed homes in the suburbs, our teams cover the whole Klang Valley. Because technicians are based close to you, response times stay short, same-day slots are realistic, and we already know the common aircond setups in your area and building.</p>
    </div>
    <div class="usp-card">
      <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 9V5a3 3 0 00-6 0v4M5 9h14l1 12H4z"/></svg></span>
      <h3>Affordable Pricing</h3>
      <p>Fair, upfront pricing is the rule here, not a promotion. You get a clear quote agreed before any work begins, so there are no inflated call-outs and no surprise charges on the invoice. Honest rates, paired with workmanship that lasts, are what keep our customers coming back.</p>
    </div>
  </div></div>
</section>

<!-- ABOUT -->
<section class="section about" id="about">
  <div class="wrap about-grid">
    <div class="about-visual reveal">
      <div class="av-frame imgph">
        <span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="8" r="3.4"/><path d="M3.5 20a5.5 5.5 0 0111 0M16 4a3 3 0 010 6M21.5 20a5.5 5.5 0 00-4-5.3"/></svg><span>Add a team or technician photo</span></span>
        <img src="/assets/img/about-team.jpg" alt="Aiqon Quick Cool technicians at work" loading="lazy" onerror="this.style.display='none'">
      </div>
      <div class="av-badge"><b>10+</b><span>years<br>of service</span></div>
      <div class="av-badge2"><div class="st"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"/></svg><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"/></svg><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"/></svg><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"/></svg><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"/></svg></div><span>4.9 on Google</span></div>
    </div>
    <div class="about-content reveal">
      <h2>Cooling Malaysian homes, the honest way</h2>
      <p>We are a team of licensed, in-house aircond technicians serving the Klang Valley. No subcontractors, no guesswork, no surprise invoices. Just clean, careful work and a unit that cools the way it should.</p>
      <ul class="about-points">
        <li><span class="ck"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span> Licensed, in-house technicians on every single job</li>
        <li><span class="ck"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span> A clear quote agreed before any work begins</li>
        <li><span class="ck"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span> Every major aircond brand serviced and repaired</li>
        <li><span class="ck"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span> One-year workmanship warranty in writing</li>
      </ul>
      <div class="about-stats">
        <div><b>6,000+</b><span>Units serviced</span></div>
        <div><b>15 min</b><span>Avg WhatsApp reply</span></div>
        <div><b>9</b><span>Areas covered</span></div>
      </div>
      <a href="https://wa.me/60123456789" class="btn btn-navy"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> <span class="btn-txt">Talk to us on WhatsApp</span></a>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="section" id="services">
  <div class="wrap center">
    <h2 style="margin:14px 0 0">Every aircond job, done properly</h2>
    <p class="sub">In-house technicians, all major brands, and a written fixed-price quote before any work begins.</p>
  </div>
  <div class="wrap"><div class="svc-grid reveal">
    <div class="svc">
      <div class="svc-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add a "Aircond Service" photo</span></span><img src="/assets/img/aircond-service.jpg" alt="Aircond Service" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="svc-body"><h3>Aircond Service</h3><p>Filter, coil and drainage care that brings cooling back and keeps your bill down.</p>
      <a href="/services/aircond-service/" class="btn btn-line svc-more"><span class="btn-txt">Learn More</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
    </div>
    <div class="svc">
      <div class="svc-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add a "Chemical Wash" photo</span></span><img src="/assets/img/chemical-wash.jpg" alt="Chemical Wash" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="svc-body"><h3>Chemical Wash</h3><p>A 90 to 120 minute deep clean of coil and blower that revives weak, smelly units.</p>
      <a href="/services/chemical-wash/" class="btn btn-line svc-more"><span class="btn-txt">Learn More</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
    </div>
    <div class="svc">
      <div class="svc-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add a "Aircond Repair" photo</span></span><img src="/assets/img/aircond-repair.jpg" alt="Aircond Repair" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="svc-body"><h3>Aircond Repair</h3><p>Capacitor, PCB, fan motor, compressor and gas faults, diagnosed and fixed the same visit.</p>
      <a href="/services/aircond-repair/" class="btn btn-line svc-more"><span class="btn-txt">Learn More</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
    </div>
    <div class="svc">
      <div class="svc-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add a "Installation" photo</span></span><img src="/assets/img/installation.jpg" alt="Installation" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="svc-body"><h3>Installation</h3><p>Wall split supply and fit with OEM brackets, copper pipe and a full cooling test.</p>
      <a href="/services/installation/" class="btn btn-line svc-more"><span class="btn-txt">Learn More</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
    </div>
    <div class="svc">
      <div class="svc-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add a "Gas Top-Up" photo</span></span><img src="/assets/img/gas-top-up.jpg" alt="Gas Top-Up" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="svc-body"><h3>Gas Top-Up</h3><p>Leak check first, then the correct refrigerant (R32, R410A, R22) and a pressure test.</p>
      <a href="/services/gas-top-up/" class="btn btn-line svc-more"><span class="btn-txt">Learn More</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
    </div>
    <div class="svc">
      <div class="svc-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add a "General Cleaning" photo</span></span><img src="/assets/img/general-cleaning.jpg" alt="General Cleaning" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="svc-body"><h3>General Cleaning</h3><p>Filter and cover wash that restores airflow and keeps your room air fresh between services.</p>
      <a href="/services/general-cleaning/" class="btn btn-line svc-more"><span class="btn-txt">Learn More</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
    </div>
  </div></div>
</section>

<!-- BRANDS -->
<section class="section brands" id="brands" style="padding:62px 0">
  <div class="wrap head">
    <div>
      <span class="eyebrow">Trusted Across All Brands</span>
      <h2 style="font-size:clamp(24px,3vw,34px);margin-top:10px">We service every major aircond brand</h2>
      <p class="brands-sub">From Daikin to Mitsubishi — our certified technicians know every system inside and out.</p>
    </div>
    <a href="https://wa.me/60123456789" class="btn btn-line"><span class="btn-txt">Ask about your unit</span></a>
  </div>
  <div class="wrap" style="max-width:none;padding:0">
    <div class="mq-mask"><div class="brand-marquee">
      <div class="blogo"><img src="/assets/img/brands/1.png" alt="Mitsubishi Electric" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/2.png" alt="Panasonic" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/3.png" alt="Hitachi" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/4.png" alt="Daikin" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/5.png" alt="York" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/6.png" alt="Hisense" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/7.png" alt="Midea" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/8.png" alt="Acson" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/9.png" alt="Haier" loading="lazy"></div>
      <!-- duplicate set for seamless marquee -->
      <div class="blogo"><img src="/assets/img/brands/1.png" alt="" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/2.png" alt="" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/3.png" alt="" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/4.png" alt="" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/5.png" alt="" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/6.png" alt="" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/7.png" alt="" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/8.png" alt="" loading="lazy"></div>
      <div class="blogo"><img src="/assets/img/brands/9.png" alt="" loading="lazy"></div>
    </div></div>
  </div>
</section>

<!-- WHY US -->
<section class="why" id="why">
  <div class="wrap why-wrap">
    <div class="why-left reveal">
      <h2>Four Promises, Written On Every Invoice</h2>
      <p>No vague slogans. These are the exact commitments our technicians stand behind on every visit, from the first WhatsApp message right through to the final cooling test.</p>
      <a href="https://wa.me/60123456789" class="btn btn-y"><span class="btn-txt">Book On WhatsApp</span></a>
    </div>
    <div class="why-right reveal">
      <div class="why-card"><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M9 14l2 2 4-4"/></svg></span><div><h4>Licensed Where It Matters</h4><p>Certified technicians for aircond and electrical work. Ask for our credentials and we send them before the visit.</p></div></div>
      <div class="why-card"><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.6 13.4l-7.2 7.2a2 2 0 01-2.8 0l-7-7A2 2 0 013 12.2V5a2 2 0 012-2h7.2a2 2 0 011.4.6l7 7a2 2 0 010 2.8z"/><circle cx="7.5" cy="7.5" r="1.5"/></svg></span><div><h4>Upfront, Honest Quotes</h4><p>You get a clear quote before we start, and the price we agree is the price you pay. No bait, no surprise invoicing.</p></div></div>
      <div class="why-card"><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/><path d="M9 16l2 2 4-4"/></svg></span><div><h4>1-Year Workmanship Warranty</h4><p>On installations, plus 30 days on repairs. If something we fixed fails in that window, we come back free.</p></div></div>
      <div class="why-card"><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="8" r="3"/><path d="M3 20a6 6 0 0112 0M16 3.5a3 3 0 010 5.8M21 20a6 6 0 00-4-5.6"/></svg></span><div><h4>No Subcontracting</h4><p>The technician at your door is on our team. Same accountability on every visit, no surprise rates.</p></div></div>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="stats"><div class="wrap reveal" id="stats">
  <div class="stat">
    <div class="ring">
      <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="9" r="6"/><path d="M8.5 13.5L7 22l5-3 5 3-1.5-8.5"/></svg></span>
      <span class="num"><span data-c="10">0</span><span class="y">+</span></span>
    </div>
    <span class="lbl">Years Serving Malaysia</span>
  </div>
  <div class="stat">
    <div class="ring">
      <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="10" rx="2"/><path d="M6 11h12"/><path d="M8 19c0-2 0-2 0-4M12 20c0-2.5 0-2.5 0-5M16 19c0-2 0-2 0-4"/></svg></span>
      <span class="num"><span data-c="6000">0</span><span class="y">+</span></span>
    </div>
    <span class="lbl">Aircond Units Serviced</span>
  </div>
  <div class="stat">
    <div class="ring">
      <span class="ic"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg></span>
      <span class="num"><span data-c="4" data-dec="9">0</span></span>
    </div>
    <span class="lbl">Average Google Rating</span>
  </div>
  <div class="stat">
    <div class="ring">
      <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
      <span class="num"><span class="y">24/7</span></span>
    </div>
    <span class="lbl">Emergency Callouts</span>
  </div>
</div></section>

<!-- PROCESS -->
<section class="section" id="process">
  <div class="wrap center">
    <h2 style="margin:14px 0 0">Booked to cool in four steps</h2>
  </div>
  <div class="wrap"><div class="proc-grid reveal">
    <div class="step"><span class="n"><span>1</span></span><h4>Message us</h4><p>WhatsApp a photo of your unit and tell us the problem and your area.</p></div>
    <div class="step"><span class="n"><span>2</span></span><h4>Fast reply</h4><p>We answer within 15 minutes with a price or a real arrival time, not a script.</p></div>
    <div class="step"><span class="n"><span>3</span></span><h4>Fixed-price fix</h4><p>The technician diagnoses, agrees the price first, then fixes it on the spot.</p></div>
    <div class="step"><span class="n"><span>4</span></span><h4>Cool &amp; guaranteed</h4><p>You get cold air, a clean workspace and a warranty in writing.</p></div>
  </div></div>
</section>

<!-- AMC -->
<section class="section" id="amc">
  <div class="wrap center">
    <h2 style="margin:14px 0 0">Pay once a year, forget the hassle</h2>
    <p class="sub">One plan covers scheduled servicing through the year, with priority response and no need to book each time. Pick the size of your home and we tailor the rest.</p>
  </div>
  <div class="wrap"><div class="amc-grid reveal">
    <div class="amc"><div class="tier">Bronze</div><div class="amt">2 to 3<em> units</em></div><p class="desc">Condos and smaller homes. Scheduled servicing kept on time, all year.</p><a href="https://wa.me/60123456789" class="btn btn-line"><span class="btn-txt">Get a quote</span></a></div>
    <div class="amc pop"><span class="tag">Most popular</span><div class="tier">Silver</div><div class="amt">4 to 5<em> units</em></div><p class="desc">Family homes. Priority response and scheduled servicing for every unit.</p><a href="https://wa.me/60123456789" class="btn btn-navy"><span class="btn-txt">Get a quote</span></a></div>
    <div class="amc"><div class="tier">Gold</div><div class="amt">5 to 8<em> units</em></div><p class="desc">Landed homes. Premium response window and full-home coverage.</p><a href="https://wa.me/60123456789" class="btn btn-line"><span class="btn-txt">Get a quote</span></a></div>
  </div></div>
</section>

<!-- AREAS -->
<section class="section areas" id="areas">
  <div class="wrap center">
    <h2 style="margin:14px 0 0">Across the Klang Valley</h2>
    <p class="sub">Local technicians close to you. Not on the list? WhatsApp your postcode and we will quote.</p>
  </div>
  <div class="wrap center"><div class="chips2" style="justify-content:center">
    <a href="https://wa.me/60123456789"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Kuala Lumpur</a>
    <a href="https://wa.me/60123456789"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Petaling Jaya</a>
    <a href="https://wa.me/60123456789"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Mont Kiara</a>
    <a href="https://wa.me/60123456789"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Bangsar</a>
    <a href="https://wa.me/60123456789"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Subang Jaya</a>
    <a href="https://wa.me/60123456789"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Shah Alam</a>
    <a href="https://wa.me/60123456789"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Cheras</a>
    <a href="https://wa.me/60123456789"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Kajang</a>
    <a href="https://wa.me/60123456789"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Klang</a>
  </div></div>
</section>

<!-- GALLERY -->
<section class="section gallery" id="work">
  <div class="wrap center">
    <h2 style="margin:14px 0 0">Real Jobs, Real Results</h2>
    <p class="sub">A look at recent aircond service, chemical wash and installation jobs across the Klang Valley.</p>
  </div>
  <div class="wrap"><div class="gal-grid reveal">
    <div class="gal wide tall"><div class="imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add a featured job photo</span></span><img src="/assets/img/work-1.jpg" alt="Recent aircond installation" loading="lazy" onerror="this.style.display='none'"></div><span class="tagp">Installation</span><span class="cap">New wall split units, Mont Kiara</span></div>
    <div class="gal"><div class="imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add photo</span></span><img src="/assets/img/work-2.jpg" alt="Chemical wash before and after" loading="lazy" onerror="this.style.display='none'"></div><span class="tagp">Chemical wash</span><span class="cap">Coil deep clean, Bangsar</span></div>
    <div class="gal"><div class="imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add photo</span></span><img src="/assets/img/work-3.jpg" alt="Aircond repair job" loading="lazy" onerror="this.style.display='none'"></div><span class="tagp">Repair</span><span class="cap">PCB fault fixed, Petaling Jaya</span></div>
    <div class="gal"><div class="imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add photo</span></span><img src="/assets/img/work-4.jpg" alt="Servicing visit" loading="lazy" onerror="this.style.display='none'"></div><span class="tagp">Service</span><span class="cap">Routine servicing, Subang</span></div>
    <div class="gal"><div class="imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add photo</span></span><img src="/assets/img/work-5.jpg" alt="Gas top up" loading="lazy" onerror="this.style.display='none'"></div><span class="tagp">Gas top-up</span><span class="cap">Leak fix and refill, Cheras</span></div>
    <div class="gal wide"><div class="imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add a wide job photo</span></span><img src="/assets/img/work-6.jpg" alt="Commercial aircond job" loading="lazy" onerror="this.style.display='none'"></div><span class="tagp">Commercial</span><span class="cap">Office multi-unit service, Shah Alam</span></div>
  </div></div>
</section>

<!-- REVIEWS -->
<section class="section rev" id="reviews">
  <div class="wrap center">
    <h2 style="margin:0">Rated 4.9 By Malaysian Homes</h2>
    <p class="sub">Real, unedited reviews from our customers on Google. We never write or curate them ourselves.</p>
    <div class="rev-badge"><svg class="g-logo" viewBox="0 0 48 48"><path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"/><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/><path fill="#FBBC05" d="M11.69 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.69-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24s.85 6.91 2.34 9.88l7.35-5.7z"/><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"/></svg><div class="rb-txt"><span class="rb-name">Google Reviews</span><span class="rb-meta"><span class="stars"><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg></span> <b>4.9</b> out of 5</span></div></div>
  </div>
  <div class="wrap">
    <div class="rev-slider">
      <div class="rev-viewport"><div class="rev-track" id="revTrack">
      <div class="rcard">
        <div class="rc-top"><span class="stars"><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg></span><svg class="g-logo rc-g" viewBox="0 0 48 48"><path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"/><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/><path fill="#FBBC05" d="M11.69 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.69-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24s.85 6.91 2.34 9.88l7.35-5.7z"/><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"/></svg></div>
        <p>I booked on WhatsApp at nine and the technician arrived by noon, exactly when they promised. He chemical washed two units, showed me how clogged the coils were, and tidied up properly afterwards. Cooling feels brand new and the final price matched the quote with zero surprises. Genuinely impressed.</p>
        <div class="who"><span class="av"><img src="/assets/img/review-1.jpg" alt="" loading="lazy" onerror="this.style.display='none'">N</span><div><b>Nurul A.</b><span>Mont Kiara &middot; Posted on Google</span></div></div>
      </div>
      <div class="rcard">
        <div class="rc-top"><span class="stars"><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg></span><svg class="g-logo rc-g" viewBox="0 0 48 48"><path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"/><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/><path fill="#FBBC05" d="M11.69 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.69-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24s.85 6.91 2.34 9.88l7.35-5.7z"/><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"/></svg></div>
        <p>My bedroom aircond kept tripping the breaker late at night. They diagnosed a faulty capacitor, showed me the burnt part before replacing it, and had everything running within the hour. No upselling, no pressure to swap the whole unit. Fair price and a clear explanation throughout. I will call them again.</p>
        <div class="who"><span class="av"><img src="/assets/img/review-2.jpg" alt="" loading="lazy" onerror="this.style.display='none'">W</span><div><b>Wei Jie L.</b><span>Petaling Jaya &middot; Posted on Google</span></div></div>
      </div>
      <div class="rcard">
        <div class="rc-top"><span class="stars"><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg></span><svg class="g-logo rc-g" viewBox="0 0 48 48"><path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"/><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/><path fill="#FBBC05" d="M11.69 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.69-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24s.85 6.91 2.34 9.88l7.35-5.7z"/><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"/></svg></div>
        <p>We needed two new units installed in our office without disrupting the work day. The team arrived on time, ran neat copper piping, sealed everything cleanly and tested the cooling before leaving. They even cleared away all the mess. Professional from start to finish, and the quote never changed once.</p>
        <div class="who"><span class="av"><img src="/assets/img/review-3.jpg" alt="" loading="lazy" onerror="this.style.display='none'">R</span><div><b>Raj M.</b><span>Shah Alam &middot; Posted on Google</span></div></div>
      </div>
      <div class="rcard">
        <div class="rc-top"><span class="stars"><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg></span><svg class="g-logo rc-g" viewBox="0 0 48 48"><path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"/><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/><path fill="#FBBC05" d="M11.69 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.69-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24s.85 6.91 2.34 9.88l7.35-5.7z"/><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"/></svg></div>
        <p>Honestly the easiest aircond booking I have ever done. One WhatsApp message, a quick reply, and a technician at my door the next morning. He serviced three units, checked the gas and drainage, and explained what to watch for. The rooms cool far faster now and our bill has dropped noticeably.</p>
        <div class="who"><span class="av"><img src="/assets/img/review-4.jpg" alt="" loading="lazy" onerror="this.style.display='none'">A</span><div><b>Aisyah R.</b><span>Subang Jaya &middot; Posted on Google</span></div></div>
      </div>
      <div class="rcard">
        <div class="rc-top"><span class="stars"><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg></span><svg class="g-logo rc-g" viewBox="0 0 48 48"><path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"/><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/><path fill="#FBBC05" d="M11.69 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.69-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24s.85 6.91 2.34 9.88l7.35-5.7z"/><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"/></svg></div>
        <p>One unit stopped cooling so I expected a huge repair bill. Instead they checked for a leak first, sealed it, then topped up the gas and pressure tested everything. They explained why simply refilling without fixing the leak would only waste my money. Honest, knowledgeable and fast. This is proper service.</p>
        <div class="who"><span class="av"><img src="/assets/img/review-5.jpg" alt="" loading="lazy" onerror="this.style.display='none'">D</span><div><b>Daniel T.</b><span>Cheras &middot; Posted on Google</span></div></div>
      </div>
      <div class="rcard">
        <div class="rc-top"><span class="stars"><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg></span><svg class="g-logo rc-g" viewBox="0 0 48 48"><path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"/><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/><path fill="#FBBC05" d="M11.69 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.69-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24s.85 6.91 2.34 9.88l7.35-5.7z"/><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"/></svg></div>
        <p>We signed up for their annual plan after a great first service and it has been worth every cent. The team arrives on schedule, keeps all our units spotless, and responds quickly whenever something feels off. No chasing, no hassle, just reliable people who clearly know aircond systems inside out.</p>
        <div class="who"><span class="av"><img src="/assets/img/review-6.jpg" alt="" loading="lazy" onerror="this.style.display='none'">M</span><div><b>Mei Ling C.</b><span>Bangsar &middot; Posted on Google</span></div></div>
      </div>
      </div></div>
    </div>
    <div class="rev-ctrl">
      <button class="rev-nav" id="revPrev" aria-label="Previous reviews"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 6l-6 6 6 6"/></svg></button>
      <div class="rev-dots" id="revDots"></div>
      <button class="rev-nav" id="revNext" aria-label="Next reviews"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"/></svg></button>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section" id="faq">
  <div class="wrap center">
    <h2 style="margin:14px 0 0">Frequently asked questions</h2>
  </div>
  <div class="wrap"><div class="faq-wrap">
    <details class="faq" open><summary>Do you serve my area? <span class="pl">+</span></summary><div class="ans">We cover Kuala Lumpur, Petaling Jaya, Mont Kiara, Bangsar, Subang Jaya, Shah Alam, Cheras, Kajang and Klang as standard. Outside that, WhatsApp us your postcode and we will quote on a case basis.</div></details>
    <details class="faq"><summary>How fast can you come? <span class="pl">+</span></summary><div class="ans">Next-day is standard, and same-day where a slot is open. Emergencies like an active leak or a unit fully down get prioritised, and we tell you the real arrival time.</div></details>
    <details class="faq"><summary>How does pricing work? <span class="pl">+</span></summary><div class="ans">Most jobs we can quote on WhatsApp from a photo. Where we cannot, we attend, diagnose and quote on the spot. You approve the price before any work starts.</div></details>
    <details class="faq"><summary>Do you charge a call-out fee? <span class="pl">+</span></summary><div class="ans">We confirm any call-out fee before we come, and it is waived when you proceed with the recommended repair. Whatever it is, you always know it upfront.</div></details>
    <details class="faq"><summary>What brands do you service? <span class="pl">+</span></summary><div class="ans">All major brands including Daikin, Panasonic, Mitsubishi Electric, York, Acson, Hitachi, LG, Samsung and Midea, for service, repair and installation.</div></details>
  </div></div>
</section>

<?php include __DIR__."/inc/footer.php"; ?>
