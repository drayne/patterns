<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 22.8.2018.
 * Time: 21:28
 */

namespace App\DesignPatterns\Structural\Bridge;


class HelloWorldService extends Service
{

    function get()
    {
        return $this->implementation->format('Hello world');
    }
}