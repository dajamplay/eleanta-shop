<?php

namespace App\Services\Render;

class Render
{
    private static string $template = 'default';

    public static function setTemplate($template): void
    {
        self::$template = $template;
    }

    public static function run($view = 'main/index', array $data = []): void
    {
        extract($data);
        ob_start();
        require_once DIR_VIEWS . $view . '.php';
        $content = ob_get_clean();
        require_once DIR_VIEWS_TEMPLATES . self::$template . '.php';
    }
}