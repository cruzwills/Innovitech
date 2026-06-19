<?php

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/'
);

// Serve existing static files directly from public/
if ($uri !== '/' && file_exists(__DIR__ . '/../public' . $uri)) {
    return false;
}

// Force env vars before Laravel boots
$envOverrides = [
    'VERCEL'                 => '1',
    'APP_ENV'                => 'production',
    'APP_DEBUG'              => 'false',
    'APP_KEY'                => 'base64:pvRE80ao6tWoVgwcDlpoc5/dVeHwM906jxhFveiGLl0=',
    'SESSION_DRIVER'         => 'cookie',
    'SESSION_SECURE_COOKIE'  => 'false',
    'CACHE_STORE'            => 'array',
    'LOG_CHANNEL'            => 'stderr',
    'DB_CONNECTION'          => 'sqlite',
    'DB_DATABASE'            => ':memory:',
];

foreach ($envOverrides as $key => $value) {
    putenv("{$key}={$value}");
    $_ENV[$key]    = $value;
    $_SERVER[$key] = $value;
}

// Create writable directories in /tmp for Vercel serverless environment
foreach ([
    '/tmp/storage/app/public',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
] as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

require __DIR__ . '/../public/index.php';
