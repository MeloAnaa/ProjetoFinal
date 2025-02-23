<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'passwordsalt' => 'yuX1Ux1z9RcJlye3IGDPDZbi4ysE17',
  'secret' => '6T7iB4flaXa7Yr5slznJu8u9M5tp7C1QFuai6QIPu8+C5V1N',
  'trusted_domains' => 
  array (
    0 => 'localhost',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '30.0.6.2',
  'overwrite.cli.url' => 'http://localhost',
  'dbname' => 'nextcloud',
  'dbhost' => 'nextcloud_db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud_user',
  'dbpassword' => 'nextcloud_password',
  'installed' => true,
  'instanceid' => 'ocb4us2o0xde',
  'loglevel' => 2,
  'maintenance' => false,
);
