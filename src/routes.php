<?php
// Routes

/**
 * Index
 */
$app->get('/', function ($request, $response, $args) use ($app) {
    return $this->view->render($response, 'index.html.twig', [
        'features' => Features::getAll(),
        'gcm_stats' => GCMStats::getViewGCMStats()
    ]);
});

/**
 * I18n
 */
$app->get('/i18n', function ($request, $response, $args) use ($app) {
    return $this->view->render($response, 'i18n.html.twig');
});


/**
 * Redirects
 */
$redirects = [
    '/index.php' => '/',
    '/i18n.php' => '/i18n'
];
foreach ($redirects as $old => $new) {
    $app->get($old, function($request, $response, $args) use ($app, $old, $new) {
        return $response->withRedirect($new, 301);
    });
}
