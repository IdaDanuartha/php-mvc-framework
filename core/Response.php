<?php

namespace app\core;

/**
 * Class Response
 * 
 * @author IdaDanuartha <danuart21@gmail.com>
 * @package app/core
 */

class Response 
{
    public function setStatusCode($code)
    {
        http_response_code($code);
    }
}