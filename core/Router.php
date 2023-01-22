<?php

namespace app\core;

use app\core\Request;
/**
 * Class Router
 * 
 * @author IdaDanuartha <danuart21@gmail.com>
 * @package app/core
 */

class Router 
{
    protected array $routes = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if($callback === false) {
            echo "Page not found";
            exit;
        }

        echo call_user_func($callback);
    }
}