<?php

namespace App\Services\Session;

class Session
{
    static function get($field): string|null
    {
        return $_SESSION[$field] ?? null;
    }
}