<?php
use Slim\Factory\AppFactory;
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../settings.php';
$app = AppFactory::create();
$app->addRoutingMiddleware();
$container = $app->getContainer();
include __DIR__ . '/../app/Routes.php';
$app->run();
