<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 30.11.2018.
 * Time: 17:36
 */

namespace App\DesignPatterns\Behavioral\Strategy;


class AlgoritmParni implements AlgoritmInterface
{

    public function getNumbers()
    {
        return '2,4,6';
    }
}