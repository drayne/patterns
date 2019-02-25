<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 17.8.2018.
 * Time: 17:24
 */

namespace App\DesignPatterns\AbstractFactory;


class HtmlFactory extends AbstractFactory
{

    public function createText(string $text): Text
    {
        return new HtmlText($text);
    }
}