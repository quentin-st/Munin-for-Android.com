<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;

$app = AppFactory::create();

$twig = Twig::create(__DIR__ . '/../templates', [
    'cache' => getenv('APP_ENV') === 'dev' ? false : __DIR__ . '/../var/cache/twig',
]);

$app->addRoutingMiddleware();
$app->addErrorMiddleware(getenv('APP_ENV') === 'dev', true, true);

$app->get('/', fn (Request $request, Response $response) => $twig->render($response, 'index.html.twig', [
    'features' => Features::getAll(),
    'gcm_stats' => GCMStats::getViewGCMStats(),
]));

$app->get('/i18n', fn (Request $request, Response $response) => $twig->render($response, 'i18n.html.twig'));

$redirects = [
    '/index.php' => '/',
    '/i18n.php' => '/i18n',
];
foreach ($redirects as $old => $new) {
    $app->redirect($old, $new, 301);
}

return $app;
