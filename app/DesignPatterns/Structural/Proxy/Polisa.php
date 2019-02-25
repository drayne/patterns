<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 25.8.2018.
 * Time: 13:39
 */


/*
 * proxy bi trebalo da implementira isti interfejs kao i servis koji sadrzi biznis logiku
 * takodje, proxy treba da sadrzi referencu na originalni servis, jer ce u sebi preko te reference (pored dodantih stvari)
 * da pozove i servisovu originalnu metodu
 *
 * klijent, AKO je code to interface, lako moze da promijeni implementaciju interfejsa, tj proxy umjesto servisa
 *
 * odlican primjer na https://refactoring.guru/design-patterns/proxy/php/example
 */
namespace App\DesignPatterns\Structural\Proxy;


class Polisa
{
    protected $data;

    public function __construct(int $id, string $owner)
    {
        $this->data[$id] = $owner;
    }

    public function getPolisa(int $id)
    {
        return $this->data[$id];
    }

    public function getAll()
    {
        return $this->data;
    }


    public function addPolisa(int $id, string $owner)
    {
        $this->data[$id] = $owner;
    }

}