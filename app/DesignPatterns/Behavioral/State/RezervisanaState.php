<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 6.1.2019.
 * Time: 20:46
 */

namespace App\DesignPatterns\Behavioral\State;


class RezervisanaState implements StateInterface
{
    protected $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function plati()
    {
        echo "Steta placena";
        //Todo
        //$this->context->setState($this->context->getPlacnenaState());
    }

    public function odobri()
    {
        // TODO: Implement odobri() method.
    }

    public function odbij()
    {
        // TODO: Implement odbij() method.
    }

    public function obradi()
    {
        // TODO: Implement obradi() method.
    }

    public function rezervisi()
    {
        // TODO: Implement rezervisi() method.
    }
}