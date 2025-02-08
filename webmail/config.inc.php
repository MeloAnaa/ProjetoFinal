<?php

/*
 +-----------------------------------------------------------------------+
 | Local configuration for the Roundcube Webmail installation.           |
 +-----------------------------------------------------------------------+
*/

$config = [];

// Configuração do banco de dados (usando o serviço 'db' do docker-compose)
$config['db_dsnw'] = 'mysql://roundcube:pass@db/roundcubemail';



#$config['db_dsnw'] = 'mysql://roundcube:roundcube@db/roundcube';




// Configuração do servidor IMAP (alterado para conectar ao container correto)
$config['imap_host'] = 'tls://webmail:993';

// Configuração do servidor SMTP (alterado para conectar ao container correto)
$config['smtp_host'] = 'tls://webmail:587';

// SMTP autenticação
$config['smtp_user'] = '%u';
$config['smtp_pass'] = '%p';

// URL de suporte (opcional)
$config['support_url'] = '';

// Nome do serviço exibido no login
$config['product_name'] = 'Roundcube Webmail';

// Chave de criptografia (mantenha segura e altere para sua própria chave)
$config['des_key'] = 'rcmail-!24ByteDESkey*Str';

// Plugins ativados
$config['plugins'] = [
    'archive',
    'zipdownload',
];

// Tema (skin) do Roundcube
$config['skin'] = 'elastic';
