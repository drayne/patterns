<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 6.1.2019.
 * Time: 20:29
 */

namespace App\DesignPatterns\Behavioral\State;


interface StateInterface
{
    //definisemo sve akcije
    public function plati();

    public function odobri();

    public function odbij();

    public function obradi();

    public function rezervisi();
}