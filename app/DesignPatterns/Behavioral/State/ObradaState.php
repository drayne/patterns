<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 6.1.2019.
 * Time: 20:31
 */

namespace App\DesignPatterns\Behavioral\State;


class ObradaState implements StateInterface
{
    protected $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function plati()
    {
        echo "Steta je tek u fazi obrade";
    }

    public function odbij()
    {
        echo "Steta je tek u fazi obrade";
    }

    public function obradi()
    {
        echo "Steta je vec obradjena";

    }

    public function rezervisi()
    {
        echo "Steta je tek u fazi obrade";
    }

    public function odobri()
    {
        echo "Steta je odobrena";
        //$this->context->setState(new OdobrenaState($this->context)); // ovako bi se stvarala direktna zavisnost izmedju statusa - context je zajednicka tacka - postaviti tu getere i setere za svaki
        $nextState = $this->context->getOdobrenaState();
        $this->context->setState($nextState);
    }
}