<?php


namespace App\Router;


class Request
{
    /**
     * @param $param
     * @return string|null
     */
    public function get($param): string | null
    {
        return $_GET[$param] ?? null;
    }

    /**
     * @param $param
     * @return string|null
     */
    public function post($param): string | null
    {
        return $_GET[$param] ?? null;
    }
}