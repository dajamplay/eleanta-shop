<?php

namespace App\Controllers\Admin;

use App\Models\User\UserMapper;
use App\Models\User\UserRepository;
use App\Services\Render\Render;

class MainController extends AbstractController
{
    public function indexAction(): void
    {
        $userRepo = new UserRepository(new UserMapper());
        $user = $userRepo->findByEmail('a@a.a');
        Render::run('main/index', ['user' => $user]);
    }

    public function logonAction(): void
    {
        echo 'Login form';
    }

    public function pageNotFoundAction(): void
    {
        header("HTTP/1.1 404 Not Found");
    }
}