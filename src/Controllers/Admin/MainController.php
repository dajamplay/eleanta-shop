<?php

namespace App\Controllers\Admin;

class MainController extends AbstractController
{
    public function indexAction(): void
    {
        echo 'Index page';
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