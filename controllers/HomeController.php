<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
/**
 * Class HomeController
 * 
 * @author IdaDanuartha <danuart21@gmail.com>
 * @package app\controllers
 */

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Danuartha'
        ];

        return $this->render('home', $data);
    }
}