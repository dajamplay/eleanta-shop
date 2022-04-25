<?php

namespace App\Controllers;

use App\Models\User\UserMapper;
use App\Models\User\UserRepository;
use App\Router\Request;

class MainController
{
    public function indexAction(Request $request) : void
    {
        $userRepository = new UserRepository();
        $userMapper = new UserMapper($userRepository);

        if ($id = $request->get('id')) {
            if ($user = $userMapper->findById($id)) {
                echo $user->getUsername();
            } else {
                echo 'Такого пользователя нет';
            }
        }
    }
}