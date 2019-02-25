<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 29.11.2018.
 * Time: 23:02
 */

namespace App\DesignPatterns\Structural\DecoratorNew;


class DodajPrezime extends DecoratorIme
{
    public function formatText(string $text)
    {
        //$ime = parent::formatText($text);
        $ime = $this->samoIme->formatText($text);   //isto sto i gornje
        return $ime . ' Bojicic';
    }
}