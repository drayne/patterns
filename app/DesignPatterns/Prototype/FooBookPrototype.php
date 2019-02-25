<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 19.8.2018.
 * Time: 20:33
 */

namespace App\DesignPatterns\Prototype;


class FooBookPrototype extends BookPrototype
{
    protected $category = 'Foo';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}