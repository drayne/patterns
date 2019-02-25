<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 22.12.2018.
 * Time: 22:45
 */

namespace App\DesignPatterns\Behavioral\Template;


class AoPolisa extends Polisa
{

    function vrstaOsiguranja()
    {
        $this->vrstaOsiguranja = "Autoodgovornost";
    }

    function premija()
    {
        $this->premija = 300;
    }
}