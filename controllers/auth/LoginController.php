<?php

namespace app\controllers\auth;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
/**
 * Class LoginController
 * 
 * @author IdaDanuartha <danuart21@gmail.com>
 * @package app\controllers
 */

class LoginController extends Controller
{
    public function index()
    {
        $this->setLayout('auth');
        return $this->render('auth/login');
    }
}