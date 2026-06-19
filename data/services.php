<?php
/* Single source of truth for all service pages. Add a new service here and a page exists automatically. */
return [
  'aircond-service' => [
    'title' => 'Aircond Service',
    'tagline' => 'Filter, coil and drainage care that brings the cold back.',
    'desc' => 'Professional aircond service across the Klang Valley. Cleaning, gas and drainage checks for stronger cooling and lower bills.',
    'intro' => [
      'A routine aircond service keeps your unit cooling at full strength and stops small problems turning into expensive repairs. Our technicians clean the filters, blower and coil, clear the drainage line, and check the gas pressure so air flows strong and your room cools quickly.',
      'Most homes need a service every three to four months, more often if you run the unit daily or live near dust and traffic. We work on all major brands and always agree the price before we start.'
    ],
    'included' => [
      'Filter, cover and front panel wash',
      'Indoor coil and blower cleaning',
      'Drainage line flush to stop water leaks',
      'Gas pressure and temperature check',
      'Electrical and mounting safety check'
    ],
    'benefits' => [
      ['Cools faster', 'Clean coils and filters restore airflow so rooms reach temperature quickly.'],
      ['Lower bills', 'A unit that breathes freely draws less power and saves you money each month.'],
      ['Fewer breakdowns', 'Regular care catches small issues early, before they become costly repairs.'],
    ],
    'process' => [
      ['Tell us about your unit', 'Send a photo and your area on WhatsApp; we confirm a price and a slot.'],
      ['On-site inspection', 'The technician checks the unit and confirms the work before starting.'],
      ['Clean and check', 'Filters, coil, blower and drainage cleaned; gas and electricals checked.'],
      ['Cooling test', 'We test the cooling, tidy up, and leave your unit running like new.'],
    ],
    'faqs' => [
      ['How often should I service my aircond?', 'Every three to four months for daily use, or more often in dusty areas. We will advise a schedule that suits your home.'],
      ['How long does a service take?', 'A standard service takes around 30 to 45 minutes per unit.'],
      ['Do you service all brands?', 'Yes — Daikin, Panasonic, Mitsubishi, York, Acson, Hitachi, Midea and more.'],
    ],
    'related' => ['chemical-wash','gas-top-up','general-cleaning'],
  ],
  'chemical-wash' => [
    'title' => 'Chemical Wash',
    'tagline' => 'A deep clean that revives weak, smelly aircond units.',
    'desc' => 'Aircond chemical wash service in the Klang Valley. A full coil and blower deep clean for units that cool poorly or smell musty.',
    'intro' => [
      'When a normal service is not enough, a chemical wash strips out the built up dirt, mould and bacteria deep inside the coil and blower wheel. This is the fix for units that cool weakly, drip water, or push out a musty smell.',
      'The job takes around 90 to 120 minutes per unit. We dismantle the relevant parts, treat them with proper coil chemicals, flush everything clean, then reassemble and test the cooling before we leave.'
    ],
    'included' => [
      'Partial dismantle of indoor unit',
      'Chemical treatment of coil and blower wheel',
      'Deep flush of drainage and tray',
      'Anti-bacterial and deodorising rinse',
      'Reassembly and full cooling test'
    ],
    'benefits' => [
      ['Removes odour', 'Anti-bacterial treatment clears mould and musty smells at the source.'],
      ['Restores cooling', 'A deep coil clean brings back airflow a normal service cannot reach.'],
      ['Healthier air', 'Less mould and bacteria means cleaner air for your family.'],
    ],
    'process' => [
      ['Assess the unit', 'We confirm a chemical wash is the right fix and agree the price.'],
      ['Dismantle and protect', 'Relevant parts are removed and the area is sheeted to keep it clean.'],
      ['Chemical treatment', 'Coil and blower are treated, flushed and deodorised thoroughly.'],
      ['Reassemble and test', 'The unit is rebuilt and the cooling tested before we leave.'],
    ],
    'faqs' => [
      ['How is a chemical wash different from a service?', 'A service is a routine clean; a chemical wash is a deep strip-down of the coil and blower for units that cool poorly or smell.'],
      ['How long does it take?', 'Around 90 to 120 minutes per unit, depending on the build-up.'],
      ['How often do I need one?', 'Most units benefit from a chemical wash once a year, or sooner if cooling drops or odours appear.'],
    ],
    'related' => ['aircond-service','aircond-repair','gas-top-up'],
  ],
  'aircond-repair' => [
    'title' => 'Aircond Repair',
    'tagline' => 'Faults diagnosed and fixed the same visit.',
    'desc' => 'Aircond repair across the Klang Valley. Capacitor, PCB, fan motor, compressor and gas faults diagnosed and fixed fast.',
    'intro' => [
      'If your aircond is not cooling, tripping the breaker, leaking water or making noise, our technicians find the real cause before quoting. We carry common parts so most faults are fixed on the same visit.',
      'We show you the faulty part before we replace it and agree the price first. No guesswork, no pressure to replace a whole unit when a single component is the problem.'
    ],
    'included' => [
      'Full diagnostic of the fault',
      'Capacitor, PCB and fan motor replacement',
      'Compressor and gas fault checks',
      'Water leak and noise troubleshooting',
      'Written quote before any work begins'
    ],
    'benefits' => [
      ['Same-visit fixes', 'We carry common parts so most faults are repaired on the first visit.'],
      ['Honest diagnosis', 'We show you the faulty part and explain the cause before replacing it.'],
      ['No upselling', 'We fix the component at fault rather than pushing a whole new unit.'],
    ],
    'process' => [
      ['Describe the fault', 'Tell us the symptoms on WhatsApp; we give an arrival window.'],
      ['Diagnose on site', 'The technician finds the real cause and shows you the issue.'],
      ['Approve the price', 'You get a clear quote before any work begins.'],
      ['Repair and test', 'We replace the part, test cooling, and back repairs with a warranty.'],
    ],
    'faqs' => [
      ['Can you fix it the same day?', 'Most common faults are fixed on the first visit as we carry frequently needed parts.'],
      ['Do you charge a call-out fee?', 'Any call-out fee is confirmed upfront and waived when you proceed with the repair.'],
      ['Is the repair guaranteed?', 'Yes, repairs are backed by a 30-day workmanship warranty.'],
    ],
    'related' => ['chemical-wash','gas-top-up','installation'],
  ],
  'installation' => [
    'title' => 'Aircond Installation',
    'tagline' => 'Wall split supply and fit, tested and guaranteed.',
    'desc' => 'Aircond installation in the Klang Valley. Wall split supply and fit with OEM brackets, copper pipe and a one-year workmanship warranty.',
    'intro' => [
      'A good installation decides how well your aircond performs for years. We mount the unit level, run proper copper pipe, fit OEM brackets, vacuum the line, and test the cooling fully before handover.',
      'We can supply the unit or install one you already bought. Every installation carries a one-year workmanship warranty in writing.'
    ],
    'included' => [
      'Site check and best position advice',
      'OEM wall brackets and fixings',
      'Copper piping and proper insulation',
      'Vacuum, gas charge and pressure test',
      'One-year workmanship warranty'
    ],
    'benefits' => [
      ['Done right first time', 'Level mounting and proper piping mean strong, quiet cooling for years.'],
      ['Supply or fit-only', 'We can provide the unit or install one you already bought.'],
      ['One-year warranty', 'Every installation is backed in writing for your peace of mind.'],
    ],
    'process' => [
      ['Site assessment', 'We advise the best position and the right unit size for the room.'],
      ['Mount and pipe', 'OEM brackets, copper piping and insulation are fitted neatly.'],
      ['Vacuum and charge', 'The line is vacuumed, gas charged and pressure tested.'],
      ['Test and hand over', 'Full cooling test, a tidy finish and your warranty in writing.'],
    ],
    'faqs' => [
      ['Can you install a unit I bought myself?', 'Yes, we offer fit-only installation as well as supply-and-install.'],
      ['What size unit do I need?', 'Send us your room size and we will recommend the right capacity before installing.'],
      ['Is there a warranty?', 'Yes, every installation carries a one-year workmanship warranty in writing.'],
    ],
    'related' => ['aircond-service','gas-top-up','aircond-repair'],
  ],
  'gas-top-up' => [
    'title' => 'Gas Top-Up',
    'tagline' => 'Leak checked first, then the correct refrigerant.',
    'desc' => 'Aircond gas top-up in the Klang Valley. Leak detection first, then the correct refrigerant (R32, R410A, R22) and a pressure test.',
    'intro' => [
      'If your unit runs but no longer cools, low refrigerant is often the cause. We check for leaks first, because simply refilling a leaking system wastes your money and the gas escapes again within weeks.',
      'Once any leak is sealed, we charge the correct refrigerant for your unit and pressure test it so the cooling holds.'
    ],
    'included' => [
      'Leak detection and sealing',
      'Correct refrigerant: R32, R410A or R22',
      'Accurate pressure charging',
      'Cooling temperature verification',
      'Honest advice on repair versus replace'
    ],
    'benefits' => [
      ['Leak checked first', 'We find and seal leaks so your gas does not escape again in weeks.'],
      ['Correct refrigerant', 'We charge the exact gas your unit needs — R32, R410A or R22.'],
      ['Cooling that holds', 'Accurate charging and a pressure test mean lasting performance.'],
    ],
    'process' => [
      ['Check the symptoms', 'Tell us the unit runs but does not cool; we book a visit.'],
      ['Detect the leak', 'We locate and seal any leak before adding refrigerant.'],
      ['Charge correctly', 'The right gas is charged to the exact pressure for your unit.'],
      ['Verify cooling', 'We confirm the temperature drop and that the charge holds.'],
    ],
    'faqs' => [
      ['Why not just refill the gas?', 'Refilling a leaking system only wastes money — the gas escapes again. We seal the leak first.'],
      ['Which refrigerants do you carry?', 'We carry R32, R410A and R22 to suit most units.'],
      ['Is low gas a sign of a bigger problem?', 'It often points to a leak. We advise honestly whether a repair or replacement makes sense.'],
    ],
    'related' => ['aircond-repair','chemical-wash','aircond-service'],
  ],
  'general-cleaning' => [
    'title' => 'General Cleaning',
    'tagline' => 'A quick refresh that keeps airflow and air fresh.',
    'desc' => 'Aircond general cleaning in the Klang Valley. Filter and cover wash that restores airflow and keeps room air fresh between full services.',
    'intro' => [
      'A light general cleaning between full services keeps airflow strong and the air in your room fresh. It is the quick, affordable way to maintain cooling and reduce dust if you cannot do a full service yet.',
      'We wash the filters and front cover, wipe the visible parts, and check that the unit is draining and cooling as it should.'
    ],
    'included' => [
      'Filter removal and wash',
      'Front cover and panel wipe down',
      'Visible coil dust clearing',
      'Quick drainage and cooling check',
      'Advice on when a full service is due'
    ],
    'benefits' => [
      ['Quick and affordable', 'A fast refresh that keeps cooling steady between full services.'],
      ['Fresher air', 'Clean filters cut dust and keep the air in your room fresh.'],
      ['Keeps airflow strong', 'Clearing filters and covers restores comfortable airflow.'],
    ],
    'process' => [
      ['Book a slot', 'Message us your area and unit count for a quick quote.'],
      ['Wash and wipe', 'Filters and covers are washed; visible parts wiped down.'],
      ['Quick checks', 'We confirm drainage and cooling are working as they should.'],
      ['Advice', 'We let you know when a full service or chemical wash is due.'],
    ],
    'faqs' => [
      ['Is general cleaning the same as a service?', 'No — it is a lighter refresh. A full service also cleans the coil and checks gas and electricals.'],
      ['How often should I do it?', 'A general clean every month or two keeps airflow strong between full services.'],
      ['Can you do multiple units?', 'Yes, we clean as many units as you need in one visit.'],
    ],
    'related' => ['aircond-service','chemical-wash','gas-top-up'],
  ],
];
