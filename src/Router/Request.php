<?php


namespace App\Router;


class Request
{
    public function get(): array
    {
        return $_GET;
    }

    public function post(): array
    {
        return $_POST;
    }
}