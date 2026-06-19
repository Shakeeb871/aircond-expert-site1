<?php
/* Reusable storytelling testimonials slider (auto right-to-left). Include on any page. */
$testimonials = [
  ['Nurul A.', 'Mont Kiara', 'Our bedroom unit had not cooled properly in months and the bills kept climbing. The technician arrived on time, found a clogged coil and a small gas leak, fixed both, and explained everything calmly. That night we slept cold and comfortable for the first time all year.'],
  ['Wei Jie L.', 'Petaling Jaya', 'I messaged late on a Sunday expecting no reply until Monday. Within fifteen minutes someone answered, and by morning a technician was at my door. He serviced three units, showed me the dirt he removed, and tidied everything after. The price matched the quote exactly.'],
  ['Raj M.', 'Shah Alam', 'After two other companies failed to fix my aircond, these folks diagnosed a faulty capacitor in minutes. They showed me the burnt part before replacing it, never once pushing me to buy a whole new unit. Cool air returned within the hour. Honest and genuinely skilled people.'],
  ['Aisyah R.', 'Subang Jaya', 'We booked a chemical wash for two old units that smelled musty and cooled weakly. The difference afterwards was night and day: fresh air, strong cooling and no odour at all. The team protected our floor, worked neatly and finished on time. It felt like brand new aircons.'],
  ['Daniel T.', 'Cheras', 'Our office needed new units installed without disrupting work. They arrived early, ran neat copper piping, sealed everything cleanly and tested the cooling before leaving. No mess, no fuss, and no surprise charges on the invoice. Professional from the first message right through to the final handover.'],
  ['Mei Ling C.', 'Bangsar', 'I signed up for the annual plan after one great service and have not looked back. They arrive on schedule, keep every unit spotless, and answer quickly whenever something feels off. No chasing, no hassle, just reliable people who clearly know aircond systems inside and out.'],
];
?>
<section class="section tsec">
  <div class="wrap center">
    <span class="eyebrow">Testimonials</span>
    <h2 style="margin-top:12px">What Our Customers Say</h2>
    <p class="sub">Real stories from homes and businesses we have helped stay cool across the Klang Valley.</p>
  </div>
  <div class="wrap">
    <div class="tslider">
      <div class="tviewport">
        <div class="ttrack">
          <?php foreach ($testimonials as $t): ?>
          <figure class="tcard">
            <span class="stars"><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6.3 6.9.6-5.2 4.6 1.6 6.8L12 17.8 5.8 20.9l1.6-6.8L2.2 8.9l6.9-.6z"/></svg></span>
            <blockquote><?= htmlspecialchars($t[2]) ?></blockquote>
            <figcaption><span class="tav"><?= htmlspecialchars(substr($t[0],0,1)) ?></span><span class="tw"><b><?= htmlspecialchars($t[0]) ?></b><span><?= htmlspecialchars($t[1]) ?></span></span></figcaption>
          </figure>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
