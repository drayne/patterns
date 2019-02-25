<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 30.11.2018.
 * Time: 17:39
 */

namespace App\Http\Controllers;


use App\DesignPatterns\AbstractFactory2\BijeljinaFactory;
use App\DesignPatterns\AbstractFactory2\PizzaCapricoza;
use App\DesignPatterns\Behavioral\State\Context;
use App\DesignPatterns\Behavioral\Strategy\AlgoritmNeparni;
use App\DesignPatterns\Behavioral\Strategy\AlgoritmParni;
use App\DesignPatterns\Behavioral\Strategy\Brojevi;

class TestController
{
    public function strategy()
    {
        $algoritmParni = new AlgoritmParni();
        $algoritmNeparni = new AlgoritmNeparni();

        $brojevi = new Brojevi($algoritmParni);

        $brojevi->setStrategy($algoritmNeparni);
        return $brojevi->execute();
    }

    public function abstractFactory()
    {
        $ingredientFactory = new BijeljinaFactory();
        $pizzaCapricioza = new PizzaCapricoza($ingredientFactory);
    }

    public function state()
    {
        $steta = new Context();
        $steta->obradiStetu();
        $steta->obradiStetu();
        $steta->odobriStetu();
    }
}