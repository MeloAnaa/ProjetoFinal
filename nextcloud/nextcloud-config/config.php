<?php
$CONFIG = array(
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  
  'apps_paths' => array(
    0 => array(
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false
    ),
    1 => array(
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true
    )
  ),
  
  'upgrade.disable-web' => true,
  'instanceid' => 'ocu42rj8ajr9',
  'passwordsalt' => 'ei6znmK43utPYG2JB7br6VcD0a5Ub1',
  'secret' => 'eMgFJyfHzEUR0Is35RIrsHkU1U3bpSgbmp1um25rNJFDDDmp',
  
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => 'mail.pipa.com.br',
    2 => 'mail.genipabu.com.br',
    3 => 'mail.pontanegra.br',
    4 => '192.168.1.103',
    5 => 'webmail',
    6 => 'nextcloud',  # Nome do container
    7 => '10.0.2.14',
  ),
  
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '29.0.6.1',
  'overwrite.cli.url' => 'https://mail.pipa.com.br',
  
  # Configuração do Banco de Dados
  'dbname' => 'nextcloud',
  'dbhost' => 'nextcloud_db',  # Nome do serviço no docker-compose
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud_user',
  'dbpassword' => 'nextcloud_password',
  
  'installed' => true,
  
  # Configurações de E-mail
  'app.mail.verify-tls-peer' => false,
  'mail_smtpdebug' => true,
  'loglevel' => 2,
  'debug' => true,  # Corrigido typo "debud"
  
  'mail_smtpmode' => 'smtp',
  'mail_sendmailmode' => 'smtp',
  'mail_from_address' => 'noreply',
  'mail_domain' => 'pipa.com.br',  # Domínio principal
  
  # Conexão com o webmail
  'mail_smtphost' => 'webmail',  # Nome do serviço no docker-compose
  'mail_smtpport' => '587',       # Porta segura com STARTTLS
  'mail_smtpstreamoptions' => array(
    'ssl' => array(
      'allow_self_signed' => true,
      'verify_peer' => false,
      'verify_peer_name' => false
    )
  ),
  
  'defaultapp' => 'mail'  # App padrão para abrir
);
