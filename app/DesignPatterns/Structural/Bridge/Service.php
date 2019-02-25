<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 22.8.2018.
 * Time: 21:24
 */

namespace App\DesignPatterns\Structural\Bridge;

/*
 * service je taj koji ce da odvoji apstrakciju od implementacije (bridge izmedju apstrakcije i implementacije)
 * pomocu njega cemo moci da setujemo implementacije
 */
abstract class Service
{
    protected $implementation;

    public function __construct(FormatterInterface $formatter)
    {
        $this->implementation = $formatter;
    }

    public function setImplementation(FormatterInterface $formatter)
    {
        $this->implementation = $formatter;
    }

    /*
     * npr zelimo da na razlicite nacine vraca implementaciju ova metoda
     * umjesto da u njoj pravimo if else if ...
     * proglasimo je abstract, pa je u podklasama implementiramo na razlicite nacine
     */
    abstract function get();

}