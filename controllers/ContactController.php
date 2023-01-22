<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
/**
 * Class ContactController
 * 
 * @author IdaDanuartha <danuart21@gmail.com>
 * @package app\controllers
 */

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Danuartha'
        ];

        return $this->render('contact', $data);
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        // echo "Submitted form contact";
    }
}