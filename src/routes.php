<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    var_dump(GCMStats::getViewGCMStats()['hits']);

    // Render index view
    return $this->view->render($response, 'index.html.twig', [
        'features' => Features::getAll(),
        'gcm_stats' => GCMStats::getViewGCMStats()
    ]);
});
