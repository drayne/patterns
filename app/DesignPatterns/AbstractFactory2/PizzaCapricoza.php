<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 2.12.2018.
 * Time: 19:00
 */

namespace App\DesignPatterns\AbstractFactory2;


class PizzaCapricoza extends Pizza
{

    function makePizza()
    {
        $kora = $this->ingredientFactory->kora();
        $parizer = $this->ingredientFactory->parizer();
    }
}