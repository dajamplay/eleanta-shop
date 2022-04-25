<?php


namespace App;

use App\Controllers\MainController;
use App\Repositories\User\DBUserRepository;

class App
{
    public function init() : void
    {
        $controller = new MainController();
        $controller->indexAction();
    }
}