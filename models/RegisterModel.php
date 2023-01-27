<?php

namespace app\models;

/**
 * Class Controller
 * 
 * @author IdaDanuartha <danuart21@gmail.com>
 * @package app\models
 */

class RegisterModel extends Model
{
    public string $name;
    public string $email;
    public string $password;
    public string $confirm_passowrd;

    public function register()
    {
        echo "Creating user account";
    }
}