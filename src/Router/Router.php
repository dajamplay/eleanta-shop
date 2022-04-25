<?php


namespace App\Router;


class Router
{
    private array $routes = [];

    public function get($path, $controller, $action)
    {
        $this->routes[$path] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function post()
    {

    }

    public function run()
    {
        $path = $_SERVER['REQUEST_URI'];
        if(array_key_exists($path, $this->routes)) {
            call_user_func_array([
                'App\\Controllers\\' . $this->routes[$path]['controller'],
                $this->routes[$path]['action']
            ], []);
        }
    }
}