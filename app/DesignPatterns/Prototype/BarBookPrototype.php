<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 19.8.2018.
 * Time: 20:33
 */

namespace App\DesignPatterns\Prototype;


class BarBookPrototype extends BookPrototype
{

    protected $category = 'Bar';

    public function __clone()
    {

    }


}