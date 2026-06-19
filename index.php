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
    <div class="hero-copy">
      <div class="hero-trust">
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/><path d="M9 12l2 2 4-4"/></svg> Licensed technicians</span>
        <span><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"/></svg> 4.9 on Google</span>
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg> 24/7 callouts</span>
      </div>
      <h1>Live better. Work better. <span class="y">Sleep cooler.</span></h1>
      <p class="s">24-hour aircond service, repair, chemical wash, gas top-up and installation across the Klang Valley. Fixed pricing you agree first, and a real reply on WhatsApp within 15 minutes.</p>
      <div class="hero-cta">
        <a href="https://wa.me/60123456789" class="btn btn-wa"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> <span class="btn-txt">Book on WhatsApp</span></a>
        <a href="tel:+60123456789" class="btn btn-ghost"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.7 2z"/></svg> <span class="btn-txt">Call +60 12-345 6789</span></a>
      </div>
    </div>
    <div class="bookcard reveal" id="book">
      <div class="bc-top">
        <span class="pulse"><i></i> 15-min reply</span>
        <h3>Schedule your <em>FREE</em> estimate today</h3>
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

<!-- CORE SERVICES -->
<section class="section core" id="core">
  <div class="wrap center">
    <span class="eyebrow">What We Do</span>
    <h2 style="margin-top:12px">Our Core Services</h2>
    <p class="sub">Everything your aircond needs, handled end to end by our own licensed, in-house technicians.</p>
  </div>
  <div class="wrap"><div class="svc-grid reveal">
    <a href="/services/aircond-service/" class="svc">
      <div class="svc-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Aircond Service photo</span></span><img src="/assets/img/aircond-service.jpg" alt="Aircond Service" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="svc-body"><h3>Aircond Service</h3><p>Filter, coil and drainage care that brings cooling back and keeps your bill down.</p><span class="go">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
    </a>
    <a href="/services/chemical-wash/" class="svc">
      <div class="svc-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Chemical Wash photo</span></span><img src="/assets/img/chemical-wash.jpg" alt="Chemical Wash" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="svc-body"><h3>Chemical Wash</h3><p>A 90 to 120 minute deep clean of coil and blower that revives weak, smelly units.</p><span class="go">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
    </a>
    <a href="/services/aircond-repair/" class="svc">
      <div class="svc-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Aircond Repair photo</span></span><img src="/assets/img/aircond-repair.jpg" alt="Aircond Repair" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="svc-body"><h3>Aircond Repair</h3><p>Capacitor, PCB, fan motor, compressor and gas faults, diagnosed and fixed the same visit.</p><span class="go">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
    </a>
    <a href="/services/installation/" class="svc">
      <div class="svc-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Installation photo</span></span><img src="/assets/img/installation.jpg" alt="Installation" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="svc-body"><h3>Installation</h3><p>Wall split supply and fit with OEM brackets, copper pipe and a full cooling test.</p><span class="go">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
    </a>
    <a href="/services/gas-top-up/" class="svc">
      <div class="svc-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Gas Top-Up photo</span></span><img src="/assets/img/gas-top-up.jpg" alt="Gas Top-Up" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="svc-body"><h3>Gas Top-Up</h3><p>Leak check first, then the correct refrigerant (R32, R410A, R22) and a pressure test.</p><span class="go">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
    </a>
    <a href="/services/general-cleaning/" class="svc">
      <div class="svc-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>General Cleaning photo</span></span><img src="/assets/img/general-cleaning.jpg" alt="General Cleaning" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="svc-body"><h3>General Cleaning</h3><p>Filter and cover wash that restores airflow and keeps your room air fresh between services.</p><span class="go">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
    </a>
  </div></div>
</section>

<!-- COMFORT IN 3 STEPS -->
<section class="section comfort" id="comfort">
  <div class="wrap comfort-grid">
    <div class="comfort-left reveal">
      <span class="eyebrow">Simple From The Start</span>
      <h2>Start living in comfort in 3 steps</h2>
      <p class="lead">We are the aircond experts who get it right the first time. Booking is quick, the price is clear, and the cool air follows.</p>
      <div class="cstep"><span class="cs-n">1</span><div><h4>Tell us about your space</h4><p>WhatsApp a photo of your unit with your area and what is happening, and we size up the job.</p></div></div>
      <div class="cstep"><span class="cs-n">2</span><div><h4>Choose from our wide range</h4><p>We recommend the right service or unit for your home and agree a fixed price before any work begins.</p></div></div>
      <div class="cstep"><span class="cs-n">3</span><div><h4>Relax and enjoy cooling comfort</h4><p>Our licensed technicians install, repair or service, test the cooling, and tidy up before they leave.</p></div></div>
      <div class="cfeats">
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/><path d="M9 12l2 2 4-4"/></svg> Licensed engineers</span>
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/><path d="M9 16l2 2 4-4"/></svg> 1-year warranty</span>
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7L9 18l-5-5"/></svg> Premium brands</span>
      </div>
    </div>
    <div class="comfort-right reveal">
      <div class="cr-frame imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add a van or team photo</span></span><img src="/assets/img/about-team.jpg" alt="Our aircond team" loading="lazy" onerror="this.style.display='none'"></div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE (colourful stats) -->
<section class="section whychoose">
  <div class="wrap center">
    <span class="eyebrow">Why Choose Us</span>
    <h2 style="margin-top:12px">Why choose our trusted professional cooling experts</h2>
    <p class="sub">A decade of clean, careful work across the Klang Valley — and the numbers our customers trust us by.</p>
  </div>
  <div class="wrap"><div class="ws-grid reveal" id="stats">
    <div class="wsc t-lav">
      <span class="ws-num"><span data-c="1000">0</span><span class="y">+</span></span>
      <span class="ws-lbl">Units serviced and installed across the Klang Valley</span>
    </div>
    <div class="wsc t-yel">
      <span class="ws-num"><span class="y">24/7</span></span>
      <span class="ws-lbl">Fast response when your aircond needs urgent help</span>
    </div>
    <div class="wsc t-pnk">
      <span class="ws-num"><span data-c="10">0</span><span class="y">+</span></span>
      <span class="ws-lbl">Years of hands-on aircond experience</span>
    </div>
    <div class="wsc t-grn">
      <span class="ws-num"><span data-c="99">0</span><span class="y">%</span></span>
      <span class="ws-lbl">Customer satisfaction on completed jobs</span>
    </div>
  </div></div>
</section>

<!-- SHOWCASE CTA BAND -->
<section class="showcase">
  <div class="sc-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Add a wide interior / installed unit photo</span></span><img src="/assets/img/work-1.jpg" alt="Cool, comfortable home with a freshly serviced air conditioner" loading="lazy" onerror="this.style.display='none'"></div>
  <div class="sc-inner">
    <div class="sc-content reveal">
      <span class="eyebrow on-dark">Beat The Heat Today</span>
      <h2>Don't sweat it &mdash; let our experts keep you cool</h2>
      <p>Aircond not cooling, dripping water or running up your bill? Get a licensed technician at your door, a fixed price agreed first, and cold air back fast.</p>
      <div class="sc-cta">
        <a href="https://wa.me/60123456789" class="btn btn-wa"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> <span class="btn-txt">Book on WhatsApp</span></a>
        <a href="tel:+60123456789" class="btn btn-ghost"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.7 2z"/></svg> <span class="btn-txt">Call +60 12-345 6789</span></a>
      </div>
      <div class="sc-trust">
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> 15-min WhatsApp reply</span>
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Same-day where slots allow</span>
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> 1-year warranty</span>
      </div>
    </div>
  </div>
</section>

<!-- TRUSTED EXPERTS (about) -->
<section class="section about" id="about">
  <div class="wrap about-grid">
    <div class="about-visual reveal">
      <div class="av-frame imgph">
        <span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 6l-4 4-3-3-5 5v5h5l9-9z"/><path d="M14 6l4-4 2 2-4 4z"/></svg><span>Add a technician-at-work photo</span></span>
        <img src="/assets/img/work-6.jpg" alt="Licensed technician servicing an air conditioning unit" loading="lazy" onerror="this.style.display='none'">
      </div>
      <div class="av-badge"><b>10+</b><span>years<br>of service</span></div>
      <div class="av-badge2"><div class="st"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"/></svg><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"/></svg><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"/></svg><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"/></svg><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.8 5.9 20.4l1.4-6.8L2.2 9l6.9-.7z"/></svg></div><span>4.9 on Google</span></div>
    </div>
    <div class="about-content reveal">
      <span class="eyebrow">Your Trusted Experts</span>
      <h2>Your trusted air conditioning experts</h2>
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

<!-- REVIEWS -->
<section class="section rev" id="reviews">
  <div class="wrap center">
    <span class="eyebrow">Trusted Locally</span>
    <h2 style="margin:10px 0 0">Trusted by homeowners and businesses</h2>
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

<!-- PREMIUM UNITS -->
<section class="section units" id="units">
  <div class="wrap center">
    <span class="eyebrow">Supply &amp; Install</span>
    <h2 style="margin-top:12px">Premium AC units for any budget</h2>
    <p class="sub">We supply and install genuine units from the brands we trust most, with a full cooling test on completion.</p>
  </div>
  <div class="wrap"><div class="units-grid reveal">
    <div class="unit">
      <div class="u-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="7" width="18" height="7" rx="2"/><path d="M6 11h12"/></svg><span>Unit photo</span></span><img src="/assets/img/aircond_service.png" alt="Daikin split unit" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="u-body">
        <span class="u-brand"><img src="/assets/img/brands/4.png" alt="Daikin" loading="lazy" onerror="this.style.display='none'"></span>
        <h3>Daikin Inverter Split</h3>
        <p>Quiet, energy-efficient cooling with R32 gas, ideal for bedrooms and living rooms.</p>
        <a href="https://wa.me/60123456789" class="btn btn-line"><span class="btn-txt">Get a quote</span></a>
      </div>
    </div>
    <div class="unit">
      <div class="u-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="7" width="18" height="7" rx="2"/><path d="M6 11h12"/></svg><span>Unit photo</span></span><img src="/assets/img/aircond_service.png" alt="Panasonic split unit" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="u-body">
        <span class="u-brand"><img src="/assets/img/brands/2.png" alt="Panasonic" loading="lazy" onerror="this.style.display='none'"></span>
        <h3>Panasonic Nanoe-X</h3>
        <p>Air-purifying inverter unit that keeps rooms fresh while cutting running costs.</p>
        <a href="https://wa.me/60123456789" class="btn btn-line"><span class="btn-txt">Get a quote</span></a>
      </div>
    </div>
    <div class="unit">
      <div class="u-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="7" width="18" height="7" rx="2"/><path d="M6 11h12"/></svg><span>Unit photo</span></span><img src="/assets/img/aircond_service.png" alt="Mitsubishi split unit" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="u-body">
        <span class="u-brand"><img src="/assets/img/brands/1.png" alt="Mitsubishi Electric" loading="lazy" onerror="this.style.display='none'"></span>
        <h3>Mitsubishi Starmex</h3>
        <p>Premium build with strong, even cooling and a long, reliable service life.</p>
        <a href="https://wa.me/60123456789" class="btn btn-line"><span class="btn-txt">Get a quote</span></a>
      </div>
    </div>
  </div></div>
</section>

<!-- CURRENT OFFERS -->
<section class="section offers" id="offers">
  <div class="wrap center">
    <span class="eyebrow">Save This Season</span>
    <h2 style="margin-top:12px">Current offers</h2>
    <p class="sub">Limited-time deals on the services our customers book most. WhatsApp us to claim yours.</p>
  </div>
  <div class="wrap"><div class="offers-grid reveal">
    <a href="https://wa.me/60123456789" class="offer">
      <div class="of-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Offer photo</span></span><img src="/assets/img/installation.jpg" alt="Installation offer" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="of-cap"><span class="of-tag">Installation</span><h3>RM100 off new aircond installation</h3><span class="go">Claim offer <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
    </a>
    <a href="https://wa.me/60123456789" class="offer">
      <div class="of-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Offer photo</span></span><img src="/assets/img/aircond-service.jpg" alt="Maintenance offer" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="of-cap"><span class="of-tag">Maintenance</span><h3>Free 1st-year service with installation</h3><span class="go">Claim offer <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
    </a>
    <a href="https://wa.me/60123456789" class="offer">
      <div class="of-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Offer photo</span></span><img src="/assets/img/chemical-wash.jpg" alt="Chemical wash offer" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="of-cap"><span class="of-tag">Chemical wash</span><h3>RM50 cashback on multi-unit wash</h3><span class="go">Claim offer <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
    </a>
  </div></div>
</section>

<!-- INSIGHTS / BLOG -->
<section class="section insights" id="insights">
  <div class="wrap center">
    <span class="eyebrow">From The Blog</span>
    <h2 style="margin-top:12px">Latest insights &amp; cooling tips</h2>
    <p class="sub">Practical advice from our technicians to help you keep your aircond running cool and efficient.</p>
  </div>
  <div class="wrap"><div class="blog-grid reveal">
    <a href="/services/aircond-service/" class="bpost">
      <div class="bp-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Article photo</span></span><img src="/assets/img/work-2.jpg" alt="Choosing the right aircond" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="bp-body"><span class="bp-cat">Buying guide</span><h3>How to choose the right aircond for your home</h3><span class="bp-more">Read more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
    </a>
    <a href="/services/chemical-wash/" class="bpost">
      <div class="bp-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Article photo</span></span><img src="/assets/img/work-3.jpg" alt="Professional maintenance" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="bp-body"><span class="bp-cat">Maintenance</span><h3>What to expect during a professional service</h3><span class="bp-more">Read more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
    </a>
    <a href="/amc/" class="bpost">
      <div class="bp-img imgph"><span class="phl"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10" r="1.5"/><path d="M21 16l-5-5L5 19"/></svg><span>Article photo</span></span><img src="/assets/img/work-4.jpg" alt="Maintenance tips" loading="lazy" onerror="this.style.display='none'"></div>
      <div class="bp-body"><span class="bp-cat">Tips</span><h3>5 essential aircond maintenance tips for homeowners</h3><span class="bp-more">Read more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span></div>
    </a>
  </div></div>
</section>

<!-- GET IN TOUCH (FAQ) -->
<section class="section getintouch" id="faq">
  <div class="wrap getintouch-grid">
    <div class="git-info reveal">
      <span class="eyebrow">Got Questions?</span>
      <h2>Get in touch with our experts</h2>
      <p class="lead">Here are the answers our customers ask for most. Still not sure? Message our team on WhatsApp and a real person replies within 15 minutes.</p>
      <div class="git-cta">
        <a href="https://wa.me/60123456789" class="btn btn-wa"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 00-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1012 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .1-1.7-.1-.4-.1-.9-.3-1.5-.6a8 8 0 01-3.7-3.3c-.3-.4-.7-1.1-.7-2 0-1 .5-1.4.7-1.6.2-.2.4-.2.6-.2h.4c.1 0 .3 0 .5.4l.6 1.5c0 .2 0 .3-.1.4l-.3.4c-.1.1-.3.3-.1.5.1.3.6 1 1.3 1.6.9.8 1.6 1 1.9 1.1.2.1.4.1.5-.1l.5-.6c.2-.2.3-.2.5-.1l1.5.7c.2.1.4.2.4.3.1.1.1.4 0 .6z"/></svg> <span class="btn-txt">Ask on WhatsApp</span></a>
        <a href="tel:+60123456789" class="btn btn-line"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1 1 .4 2 .7 2.9a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.2-1.2a2 2 0 012.1-.5c.9.3 1.9.6 2.9.7a2 2 0 011.7 2z"/></svg> <span class="btn-txt">Call us</span></a>
      </div>
    </div>
    <div class="git-faq reveal">
      <details class="faq" open><summary>Do you serve my area? <span class="pl">+</span></summary><div class="ans">We cover Kuala Lumpur, Petaling Jaya, Mont Kiara, Bangsar, Subang Jaya, Shah Alam, Cheras, Kajang and Klang as standard. Outside that, WhatsApp us your postcode and we will quote on a case basis.</div></details>
      <details class="faq"><summary>How fast can you come? <span class="pl">+</span></summary><div class="ans">Next-day is standard, and same-day where a slot is open. Emergencies like an active leak or a unit fully down get prioritised, and we tell you the real arrival time.</div></details>
      <details class="faq"><summary>How does pricing work? <span class="pl">+</span></summary><div class="ans">Most jobs we can quote on WhatsApp from a photo. Where we cannot, we attend, diagnose and quote on the spot. You approve the price before any work starts.</div></details>
      <details class="faq"><summary>Do you charge a call-out fee? <span class="pl">+</span></summary><div class="ans">We confirm any call-out fee before we come, and it is waived when you proceed with the recommended repair. Whatever it is, you always know it upfront.</div></details>
      <details class="faq"><summary>What brands do you service? <span class="pl">+</span></summary><div class="ans">All major brands including Daikin, Panasonic, Mitsubishi Electric, York, Acson, Hitachi, Hisense, Haier and Midea, for service, repair and installation.</div></details>
    </div>
  </div>
</section>

<!-- AREAS -->
<section class="serving" id="areas">
  <div class="wrap center">
    <span class="eyebrow on-dark">Coverage</span>
    <h2>Serving homes &amp; businesses across the Klang Valley</h2>
    <p class="serving-sub">Local technicians close to you. Not on the list? WhatsApp your postcode and we will quote.</p>
  </div>
  <div class="wrap"><div class="serving-grid">
    <a href="https://wa.me/60123456789">Kuala Lumpur</a>
    <a href="https://wa.me/60123456789">Petaling Jaya</a>
    <a href="https://wa.me/60123456789">Mont Kiara</a>
    <a href="https://wa.me/60123456789">Bangsar</a>
    <a href="https://wa.me/60123456789">Subang Jaya</a>
    <a href="https://wa.me/60123456789">Shah Alam</a>
    <a href="https://wa.me/60123456789">Cheras</a>
    <a href="https://wa.me/60123456789">Kajang</a>
    <a href="https://wa.me/60123456789">Klang</a>
  </div></div>
</section>

<?php include __DIR__."/inc/footer.php"; ?>
