<?php

namespace app\core;

/**
 * Class Model
 * 
 * @author IdaDanuartha <danuart21@gmail.com>
 * @package app\core
 */

class Model 
{
    public function loadData($data)
    {
        foreach ($data as $key => $value) {
            if(property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    public function validate() 
    {

    }
}