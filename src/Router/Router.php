<?php


namespace App\Router;


class Router
{
    private array $handlers = [];
    private const METHOD_GET = 'GET';
    private const METHOD_POST = 'POST';

    public function get($path, $controller, $action): void
    {
        $this->addHandler(self::METHOD_GET, $path, $controller, $action);
    }

    public function post($path, $controller, $action): void
    {
        $this->addHandler(self::METHOD_POST, $path, $controller, $action);
    }

    public function run(): void
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = $requestUri['path'];
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        $controller = null;
        $action = null;

        foreach ($this->handlers as $handler) {
            if ($handler['path'] == $requestPath && $handler['method'] == $requestMethod) {
                $controller = 'App\\Controllers\\' .$handler['controller'];
                $action = $handler['action'];
            }
        }
        call_user_func([new $controller,$action], new Request());
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