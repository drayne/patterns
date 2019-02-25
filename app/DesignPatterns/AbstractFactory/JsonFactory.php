<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 17.8.2018.
 * Time: 17:23
 */

namespace App\DesignPatterns\AbstractFactory;


class JsonFactory extends AbstractFactory
{

    public function createText(string $text): Text
    {
        return new JsonText($text);
    }
}