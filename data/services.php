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
    'related' => ['aircond-service','chemical-wash','gas-top-up'],
  ],
];
