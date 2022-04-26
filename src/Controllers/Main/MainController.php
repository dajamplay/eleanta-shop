<?php

namespace App\Controllers\Main;

use App\Models\User\UserMapper;
use App\Models\User\UserRepository;
use App\Router\Request;

class MainController
{
    public function indexAction() : void
    {
        $userRepo = new UserRepository(new UserMapper());
        $user = $userRepo->findById(1);
        echo $user->getUsername();
    }

    public function notFoundPageAction() {
        header("HTTP/1.1 404 Not Found");
    }
}