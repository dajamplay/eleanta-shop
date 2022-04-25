<?php

use App\Router\Router;

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config.php';

/**
 * Routing
 */
$router = new Router();

$router->get('/', 'MainController', 'indexAction');

$router->run();
