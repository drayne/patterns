<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 6.1.2019.
 * Time: 20:33
 */

namespace App\DesignPatterns\Behavioral\State;


class Context
{
    protected $obradaState;
    protected $odobrenaState;
    protected $rezervisanaState;

    protected $state;

    public function __construct()
    {
        $this->obradaState = new ObradaState($this);
        $this->odobrenaState = new OdobrenaState($this);
        $this->rezervisanaState = new RezervisanaState($this);

        //inicijalni state
        $this->state = new ObradaState($this);
    }

    public function setState(StateInterface $state)
    {
        $this->state = $state;
    }

    public function obradiStetu()
    {
        $this->state->obradi();
    }

    public function odobriStetu()
    {
        $this->state->odobri();
    }

    public function rezervisiStetu()
    {
        $this->state->rezervisi();
    }

    public function getObradaState()
    {
        return $this->obradaState;
    }

    public function getOdobrenaState()
    {
        return $this->odobrenaState;
    }

    public function getRezervisanaState()
    {
        return $this->rezervisanaState;
    }
}