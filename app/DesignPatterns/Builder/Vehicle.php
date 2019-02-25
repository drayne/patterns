<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 19.8.2018.
 * Time: 11:05
 */

namespace App\DesignPatterns\Builder;


class Vehicle
{
    protected $parts = array();

    public function setPart($part)
    {
        $this->parts[] = $part;
    }
}