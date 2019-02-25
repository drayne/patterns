<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 22.12.2018.
 * Time: 22:40
 */

namespace App\DesignPatterns\Behavioral\Template;


class ImovinaPolisa extends Polisa
{

    function vrstaOsiguranja()
    {
        $this->vrstaOsiguranja = 'Imovina';
    }

    function premija()
    {
        $this->premija = 80;
    }

    function valuta()
    {
        return 'EUR';
    }
}