<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 18.8.2018.
 * Time: 20:46
 */

namespace App\DesignPatterns\SimpleFactory;


class Foo
{
    protected $bar;
    protected $baz;

    public function __construct(Bar $bar, Baz $baz)
    {
        $this->bar= $bar;
        $this->baz= $baz;
    }

    public function getFoo()
    {
        return $this->baz->getBaz() . ' - ' . $this->bar->getBar();
    }

}