<?php

namespace App\Controllers\Main;

use App\Models\User\UserMapper;
use App\Models\User\UserRepository;
use App\Services\Request\Request;

class MainController
{
    public function indexAction(Request $request) : void
    {
        $userRepo = new UserRepository(new UserMapper());

        if ($id = $request->get('id')) {
            if ($user = $userRepo->findById($id)) {
                var_dump($user);
            } else {
                echo 'Такого пользователя нет.';
            }
        } else {
            $users = $userRepo->findAll();
            var_dump($users);
        }
    }

    public function notFoundPageAction() {
        header("HTTP/1.1 404 Not Found");
    }
}