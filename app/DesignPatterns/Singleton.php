<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 19.8.2018.
 * Time: 11:28
 */

//kao staticka klasa
namespace App\DesignPatterns;


final class Singleton
{
    public static $counter;

    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    public static function incrementCounter()
    {
        static::$counter +=1;
    }


    public static function getInstance()
    {
        if(null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    public static function getCounter()
    {
        return static::$counter;
    }



}