<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 29.11.2018.
 * Time: 22:38
 */

namespace App\DesignPatterns\Structural\DecoratorNew;


class SamoIme implements TextInput
{

    public function formatText(string $text)
    {
        return $text;
    }
}