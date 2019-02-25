<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 30.11.2018.
 * Time: 17:37
 */

namespace App\DesignPatterns\Behavioral\Strategy;


class AlgoritmNeparni implements AlgoritmInterface
{

    public function getNumbers()
    {
        return '1,3,5';
    }
}