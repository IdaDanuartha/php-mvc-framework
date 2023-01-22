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

    public function __construct()
    {
        $this->router = new Router();
    }
}