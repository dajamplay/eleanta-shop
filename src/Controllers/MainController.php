<?php

namespace App\Controllers;

use App\Models\User\UserMapper;
use App\Models\User\UserRepository;
use App\Router\Request;

class MainController
{
    public function indexAction(Request $request) : void
    {
        $userRepo = new UserRepository(new UserMapper());
        $user = $userRepo->findById($request->get('id'));


    }

    /**
     * View for not found pages
     */
    public function notFoundPageAction() {
        header("HTTP/1.1 404 Not Found");
    }
}