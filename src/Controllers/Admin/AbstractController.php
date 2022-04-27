<?php

namespace App\Controllers\Admin;

use App\Models\User\UserMapper;
use App\Models\User\UserRepository;
use App\Services\Session\Session;

abstract class AbstractController
{
    public function __construct()
    {
//        $userRepo = new UserRepository(new UserMapper());
//        $user = $userRepo->findByEmail('a@a.a');
//        var_dump($user);
//
//        //password_hash();
//        //password_verify();
//        if ($this->checkAccess()) {
//            echo 'Привет';
//        } else {
//            echo 'нет доступа';
//        }
    }

    public function checkAccess(): bool
    {
        return Session::get('admin') == 'admin';
    }
}