<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 2.12.2018.
 * Time: 18:59
 */

namespace App\DesignPatterns\AbstractFactory2;


abstract class Pizza
{
    protected $ingredientFactory;

    public function __construct(IngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    abstract function makePizza();

}