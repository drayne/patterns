<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 26.8.2018.
 * Time: 12:32
 */

namespace App\DesignPatterns\Behavioral\Mediator;


abstract class Colleague
{
    protected $mediator;

    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }
}