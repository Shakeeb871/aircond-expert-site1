<?php
/* ------------------------------------------------------------------
   COPY this file to  api/config.local.php  (same folder) and fill in
   your real values. config.local.php is git-ignored, so it is never
   overwritten by a pull/deploy.
-------------------------------------------------------------------*/
return [
  'db' => [
    'enabled' => true,
    'host'    => 'localhost',
    'name'    => 'CPANELUSER_aircond',   // your MySQL database name
    'user'    => 'CPANELUSER_aircond',   // your MySQL user
    'pass'    => 'YOUR_DB_PASSWORD',      // your MySQL user password
  ],

  // Password for the leads viewer at /leads.php
  'admin_key' => 'a-long-random-secret-key',
];
