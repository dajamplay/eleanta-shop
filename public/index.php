<?php require_once '../vendor/autoload.php';

const DB_HOST = 'localhost';
const DB_NAME = 'eleanta_db';
const DB_USER = 'root';
const DB_PASS = '';
const DB_CHAR = 'utf8';

use App\App;

$app = new App();
$app->init();
