<?php

namespace App\Core;


abstract class Singleton
{
    protected static $instance;

    protected function __construct(){}

    public static function getInstance(){
        if(null == static::$instance){
            static::$instance = new static;
        }

        return static::$instance;
    }
}