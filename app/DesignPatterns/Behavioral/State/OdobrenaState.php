<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 6.1.2019.
 * Time: 20:40
 */

namespace App\DesignPatterns\Behavioral\State;


class OdobrenaState implements StateInterface
{
    protected $context;

    /*
     * sad u svakoj imam isti konstruktor... bolje je bilo da je umjesto interfejsa abstract klasa, gdje ce biti zajednicki konstruktor
     */
    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function plati()
    {
        echo "Steta mora prvo biti rezervisana";
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
        echo "Steta rezervisana";
//        $this->context->setState(new RezervisanaState($this->context));
        $this->context->setState($this->context->getRezervisanaState());
    }

    public function odobri()
    {
        // TODO: Implement odobri() method.
    }
}