<?php

namespace app\controllers\auth;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;
/**
 * Class RegisterController
 * 
 * @author IdaDanuartha <danuart21@gmail.com>
 * @package app\controllers
 */

class RegisterController extends Controller
{
    public function index()
    {
        $registerModel = new RegisterModel();
        
        if($request->isPost()) {
            $registerModel->loadData($request->getBody);

            if($registerModel->validate() && $registerModel->register()) {
                return "Success";
            }

            return $this->render('auth/register', [
                "model" => $registerModel
            ]);
        }

        $this->setLayout('auth');
        return $this->render('auth/register', [
            "model" => $registerModel
        ]);
    }
}