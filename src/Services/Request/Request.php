<?php


namespace App\Services\Request;


class Request
{
    public function get($param): string | null
    {
        return $_GET[$param] ?? null;
    }

    public function post($param): string | null
    {
        return $_GET[$param] ?? null;
    }
}