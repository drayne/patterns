<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 22.8.2018.
 * Time: 21:31
 */

namespace App\DesignPatterns\Structural\Bridge;


class GoodNightService extends Service
{

    function get()
    {
        return $this->implementation->format('Good Night');
    }
}