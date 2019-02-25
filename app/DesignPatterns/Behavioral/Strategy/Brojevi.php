<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 30.11.2018.
 * Time: 17:35
 */

namespace App\DesignPatterns\Behavioral\Strategy;


class Brojevi
{
    protected $strategy;

    public function __construct(AlgoritmInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(AlgoritmInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function execute()
    {
        return $this->strategy->getNumbers();
    }
}