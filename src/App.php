<?php

namespace App;

use App\Router\Router;

class App
{
    public function __construct(private Router $router)
    {
    }

    public function run() : void
    {
        $this->router->run();
    }


}