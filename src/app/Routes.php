<?php

use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Slim\Routing\RouteCollectorProxy;
$app->group('/api', function (RouteCollectorProxy $group) {
    $group->get('/', 'App\Controllers\HomeController:index');
    $group->post('/user', 'App\Controllers\UserController:create');
    $group->get('/user/{id}', 'App\Controllers\UserController:get');
    $group->put('/user/{id}', 'App\Controllers\UserController:update');
    $group->delete('/user/{id}', 'App\Controllers\UserController:delete');
});

$app->get('/', 'App\Controllers\HomeController:index');
