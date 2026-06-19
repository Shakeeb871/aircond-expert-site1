<?php
/* ------------------------------------------------------------------
   Deployment settings. Edit these on your server (cPanel).
   This file is blocked from the web by .htaccess.
-------------------------------------------------------------------*/
return [
  // Where enquiry emails are delivered
  'to_email'   => 'shujaatshakeeb26@gmail.com',

  // The "From" address — MUST be a real mailbox on YOUR domain
  // (create it in cPanel -> Email Accounts) for good deliverability.
  'from_email' => 'noreply@aircondexpert.my',

  'site_name'  => 'Aiqon Quick Cool',
  'log_file'   => __DIR__ . '/leads.log',   // plain-text backup of every lead

  /* ---- MySQL database ----------------------------------------------
     1) cPanel -> MySQL Databases: create a database + a user, add the
        user to the database with ALL PRIVILEGES.
     2) Fill in the four values below.
     3) Set 'enabled' => true.
     The "leads" table is created automatically on the first submission.
  -------------------------------------------------------------------*/
  'db' => [
    'enabled' => false,
    'host'    => 'localhost',
    'name'    => 'CPANELUSER_aircond',   // e.g. shakeeb_aircond
    'user'    => 'CPANELUSER_aircond',   // e.g. shakeeb_aircond
    'pass'    => 'YOUR_DB_PASSWORD',
  ],

  // Secret key to open the leads viewer: /leads-admin.php?key=THIS
  // CHANGE this to a long random string.
  'admin_key' => 'change-this-to-a-long-random-key',
];
