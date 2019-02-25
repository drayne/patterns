<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 29.11.2018.
 * Time: 22:37
 */

namespace App\DesignPatterns\Structural\DecoratorNew;


interface TextInput
{
    public function formatText(string $text);
}