<?php
/* ---------------------------------------------------------------------------
   Structured data (JSON-LD) for rich results.
   Always outputs: LocalBusiness/HVACBusiness + WebSite.
   Auto from $canonical: BreadcrumbList (skipped on the homepage).
   Optional, set by a page BEFORE including the header:
     $page_faqs  = [[question, answer], ...]   -> FAQPage
     $service_ld = ['name'=>..., 'description'=>...]  -> Service
--------------------------------------------------------------------------- */
$base    = rtrim($site_url, '/');
$ORG_ID  = $base . '/#organization';
$SITE_ID = $base . '/#website';
$logo    = $base . '/assets/img/Aiqon-Quick-Cool-New.png';

$areas = ['Kuala Lumpur','Petaling Jaya','Mont Kiara','Bangsar','Subang Jaya','Shah Alam','Cheras','Kajang','Klang'];
$area_served = [];
foreach ($areas as $a) { $area_served[] = ['@type' => 'City', 'name' => $a]; }

$graph = [];

/* Organization / LocalBusiness */
$graph[] = [
  '@type'       => ['LocalBusiness', 'HVACBusiness'],
  '@id'         => $ORG_ID,
  'name'        => $site_name,
  'url'         => $base . '/',
  'image'       => $logo,
  'logo'        => $logo,
  'telephone'   => $site_phone,
  'priceRange'  => '$$',
  'address'     => [
    '@type'           => 'PostalAddress',
    'addressLocality' => 'Kuala Lumpur',
    'addressRegion'   => 'Kuala Lumpur',
    'addressCountry'  => 'MY',
  ],
  'areaServed'  => $area_served,
  'geo'         => ['@type' => 'GeoCoordinates', 'latitude' => 3.139, 'longitude' => 101.6869],
  'openingHoursSpecification' => [[
    '@type'     => 'OpeningHoursSpecification',
    'dayOfWeek' => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
    'opens'     => '08:00',
    'closes'    => '22:00',
  ]],
  'contactPoint' => [[
    '@type'             => 'ContactPoint',
    'telephone'         => $site_phone,
    'contactType'       => 'customer service',
    'areaServed'        => 'MY',
    'availableLanguage' => ['English', 'Malay'],
  ]],
  'aggregateRating' => [
    '@type'       => 'AggregateRating',
    'ratingValue' => '4.9',
    'reviewCount' => '6',
    'bestRating'  => '5',
    'worstRating' => '1',
  ],
];

/* WebSite */
$graph[] = [
  '@type'      => 'WebSite',
  '@id'        => $SITE_ID,
  'url'        => $base . '/',
  'name'       => $site_name,
  'publisher'  => ['@id' => $ORG_ID],
  'inLanguage' => 'en-MY',
];

/* BreadcrumbList (from the canonical path; skip the homepage) */
if (!empty($canonical)) {
  $path = trim((string) parse_url($canonical, PHP_URL_PATH), '/');
  if ($path !== '') {
    $items = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $base . '/']];
    $acc = $base; $pos = 2;
    foreach (explode('/', $path) as $seg) {
      $acc .= '/' . $seg;
      $items[] = [
        '@type'    => 'ListItem',
        'position' => $pos++,
        'name'     => ucwords(str_replace('-', ' ', $seg)),
        'item'     => $acc . '/',
      ];
    }
    $graph[] = ['@type' => 'BreadcrumbList', 'itemListElement' => $items];
  }
}

/* FAQPage */
if (!empty($page_faqs) && is_array($page_faqs)) {
  $main = [];
  foreach ($page_faqs as $qa) {
    if (empty($qa[0])) continue;
    $main[] = [
      '@type'          => 'Question',
      'name'           => $qa[0],
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => $qa[1]],
    ];
  }
  if ($main) $graph[] = ['@type' => 'FAQPage', 'mainEntity' => $main];
}

/* Service */
if (!empty($service_ld) && is_array($service_ld)) {
  $graph[] = array_merge([
    '@type'      => 'Service',
    'serviceType'=> $service_ld['name'] ?? '',
    'provider'   => ['@id' => $ORG_ID],
    'areaServed' => ['@type' => 'AdministrativeArea', 'name' => 'Klang Valley, Malaysia'],
    'url'        => $canonical ?? ($base . '/'),
  ], $service_ld);
}

echo "\n" . '<script type="application/ld+json">'
   . json_encode(['@context' => 'https://schema.org', '@graph' => $graph],
                 JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
   . '</script>' . "\n";
