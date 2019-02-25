<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 18.8.2018.
 * Time: 20:46
 */

namespace App\DesignPatterns\SimpleFactory;


class Bar
{
    protected $i;
    protected $s;

    public function __construct(string $s, int $i)
    {
        $this->i = $i;
        $this->s = $s;
    }

    public function getBar()
    {
        return 'bar';
    }
}