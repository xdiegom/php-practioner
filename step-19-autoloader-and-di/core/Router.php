<?php

namespace App\Core;

use Exception;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static();

        require $file;

        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            // For Example:
            // $this->routes[$requestType][$uri]: PageController@home

            return $this->callAction(
                // splat operator (...) it is used for unpacking every value from
                // an array and pass them to a function that receives X numbers
                // of arguments.
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new Exception('No route defined for this URI.');
    }

    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller();

        if (!method_exists($controller, $action)) {
            throw new Exception("{$controller} does not respond to the {$action} action.");
        }

        return $controller->$action();
    }
}
