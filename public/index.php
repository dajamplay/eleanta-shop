<?php

/**
 * Интернет-магазин с возможностью импорта Excel файлов
 * Разработчик: Аксенов Максим Александрович
 * Заказчик: ООО "Елеанта"
 * Веб-адрес: https://www.eleanta.ru
 */

//session_start();

require_once __DIR__ . '\..\config\config.php';
require_once __DIR__ . '\..\vendor\autoload.php';

/** Debug Bar */
use DebugBar\StandardDebugBar;
$debugBar = new StandardDebugBar();
$debugBarRenderer = $debugBar->getJavascriptRenderer('/debugbar/');



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo $debugBarRenderer->renderHead() ?>
</head>
<body>
<?php echo $debugBarRenderer->render() ?>
</body>
</html>

<?php
/** Routing */
$router = new App\Router\Router();
$router->get('/', 'MainController', 'indexAction');
$router->run();
?>
