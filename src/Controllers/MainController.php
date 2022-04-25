<?php

namespace App\Controllers;

use App\Models\User\UserMapper;
use App\Models\User\UserRepository;
use App\Router\Request;

class MainController
{
    public function indexAction(Request $request) : void
    {
        $userRepository = new UserRepository(new UserMapper());

        if ($user = $userRepository->findById($request->get('id'))) {
            echo $user->getUsername();
        } else {
            echo 'Такого пользователя нет';
        }
    }

    public function notFoundPageAction() {
        header("HTTP/1.1 404 Not Found");
    }
}