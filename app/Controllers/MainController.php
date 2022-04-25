<?php

namespace App\Controllers;

use App\Models\User\UserMapper;
use App\Models\User\UserRepository;

class MainController
{
    public function __construct() {

    }

    public function indexAction() : void
    {
        $userRepository = new UserRepository();
        $mapper = new UserMapper($userRepository);
        $user = $mapper->findById(1);
        var_dump($user->getUsername());
    }
}