<?php

namespace App\Router;

class Router
{
    private array $handlers = [];
    private const METHOD_GET = 'GET';
    private const METHOD_POST = 'POST';

    public function get(string $path, string $controller, string $action): void
    {
        $this->addHandler(
            method: self::METHOD_GET,
            path: $path,
            controller: $controller,
            action: $action
        );
    }

    public function post(string $path, string $controller, string $action): void
    {
        $this->addHandler(
            method: self::METHOD_POST,
            path: $path,
            controller: $controller,
            action: $action
        );
    }

    /**
     * Run APP
     */
    public function run(): void
    {
        $request = new Request();
        $requestUri = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = $requestUri['path'];
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        $controller = DIR_CONTROLLERS . 'MainController';
        $action = 'notFoundPageAction';

        foreach ($this->handlers as $handler)
        {
            if ($handler['path'] == $requestPath && $handler['method'] == $requestMethod)
            {
                $controller = DIR_CONTROLLERS .$handler['controller'];
                $action = $handler['action'];
                break;
            }
        }

        call_user_func([new $controller,$action], $request);
    }

    private function addHandler(string $method, string $path, string $controller, string $action): void
    {
        $this->handlers[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'action' => $action
        ];
    }
}