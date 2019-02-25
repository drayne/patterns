<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 29.11.2018.
 * Time: 22:53
 */

namespace App\DesignPatterns\Structural\DecoratorNew;


class DecoratorIme implements TextInput
{

    public $samoIme;

    public function __construct(TextInput $samoIme)
    {
        $this->samoIme = $samoIme;
    }

    public function formatText(string $text)
    {
        return $this->samoIme->formatText($text);
    }
}