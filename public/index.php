<?php
if (PHP_SAPI === 'cli-server') {
    // Let the built-in dev server serve static files
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if ($path !== '/index.php' && is_file(__DIR__ . $path)) {
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../src/app.php';
$app->run();
