<?php

namespace app\core;

/**
 * Class Router
 * 
 * @author IdaDanuartha <danuart21@gmail.com>
 * @package app/core
 */

class Application 
{
    public Router $router;
    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        $this->router->resolve();
    }
}