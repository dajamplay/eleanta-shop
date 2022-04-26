<?php

/**
 * Интернет-магазин с возможностью импорта Excel файлов
 * Разработчик: Аксенов Максим Александрович
 * Заказчик: ООО "Елеанта"
 * Веб-адрес: https://www.eleanta.ru
 */

require_once __DIR__ . '/../config.php';
require_once DIR_AUTOLOAD . 'autoload.php';

/** Routing */
$router = new App\Router\Router();

$router->get('/', 'Main\\MainController', 'indexAction');

$router->run();
