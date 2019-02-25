<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 25.8.2018.
 * Time: 13:45
 */

namespace App\DesignPatterns\Structural\Proxy;


class VirtualProxy
{
    private $polisa;

    public function __construct(Polisa $polisa)
    {
        $this->polisa = $polisa;
    }

    //opisniji naziv metode
    public function dajPolisu(int $id)
    {
        return $this->polisa->getPolisa($id);
    }
}