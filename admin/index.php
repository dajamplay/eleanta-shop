<?php

/** Панель администратора */

session_start();

require_once __DIR__ . '\config-admin.php';
require_once DIR_AUTOLOAD . '\autoload.php';

/** Routing */
$router = new App\Router\Router();

$router->get('/', 'AdminMainController', 'indexAction');

$router->run();
