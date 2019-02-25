<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 19.8.2018.
 * Time: 14:21
 */

namespace App\DesignPatterns\Singleton;


trait SingletonTrait
{
    private static $instance;

    public static function getInstance()
    {
        if(null === static::$instance){
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct()  {   }
    private function __clone()  {   }
    private function __wakeup()  {   }
}