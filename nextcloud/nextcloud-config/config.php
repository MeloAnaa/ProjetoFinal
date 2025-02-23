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
    8 => "nextcloud.pontanegra.br"
  ),
  
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '29.0.6.1',
  'overwrite.cli.url' => 'https://mail.pontanegra.br',
  
  // Configuração do Banco de Dados
  'dbname' => 'nextcloud',
  'dbhost' => 'nextcloud_db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud_user',
  'dbpassword' => 'nextcloud_password',
  
  'installed' => true,
  
  // Autenticação IMAP
  'auth' => [
    'classes' => [
        'OCA\UserExternal\IMAP',
    ],
  ],
  'user_backends' => [
    [
        'class' => 'OCA\UserExternal\IMAP',
        'arguments' => [
            'webmail',  // Nome do serviço no Docker
            143,        // Porta IMAP
            'STARTTLS'  // Criptografia
        ],
    ]
  ],
  
  // Configurações de E-mail
  'mail_smtpmode' => 'smtp',
  'mail_smtpauthtype' => 'LOGIN',
  'mail_smtpauth' => true,
  'mail_smtphost' => 'webmail',  // Nome do serviço no Docker
  'mail_smtpport' => 587,
  'mail_smtpname' => 'nextcloud@pontanegra.br',
  'mail_smtppassword' => 'SenhaSegura123',
  'mail_from_address' => 'noreply',
  'mail_domain' => 'pontanegra.br',
  
  // Segurança
  'allow_local_remote_servers' => true,
  'overwriteprotocol' => 'https',
  
  // Logs
  'loglevel' => 2,
  'debug' => true
);
