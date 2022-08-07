<?php

use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function(RouteCollectorProxy $group) {
    $group->get('/citas', 'App\controllers\CitasController:getAll');
    
    $group->get('/ciudades', 'App\controllers\CitasController:ciudadesUnicas');
});
