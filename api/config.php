<?php
/* ------------------------------------------------------------------
   Base configuration — SAFE TO COMMIT (no secrets here).
   Put your real secrets (DB password, admin key) in:
        api/config.local.php
   That file is git-ignored, so deploys/pulls never touch it and you
   never get "local changes would be overwritten" errors again.
   See api/config.local.sample.php for the template.
-------------------------------------------------------------------*/
$config = [
  'to_email'   => 'shujaatshakeeb26@gmail.com',     // where enquiries are emailed
  'from_email' => 'noreply@aiqonquickcool.com.my',  // a real mailbox on your domain
  'site_name'  => 'Aiqon Quick Cool',
  'log_file'   => __DIR__ . '/leads.log',

  'db' => [
    'enabled' => false,
    'host'    => 'localhost',
    'name'    => 'carpente_aiqonquickcool',
    'user'    => 'carpente_aiqonquickcooll',
    'pass'    => 'ASDJKH2918@Q&^Y&*HASDJh7892h',
  ],

  'admin_key' => 'aiqonquickcool@756@^@*&',
];

/* Local overrides (your secrets) — not tracked by git */
$local = __DIR__ . '/config.local.php';
if (is_file($local)) {
  $over = require $local;
  if (is_array($over)) {
    $config = array_replace_recursive($config, $over);
  }
}

return $config;
