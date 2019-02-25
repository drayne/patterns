<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 17.8.2018.
 * Time: 17:27
 */

namespace App\DesignPatterns\AbstractFactory;


class HtmlText extends Text
{
    //nesto dodatno sto moze odraditi
    public function getText()
    {
        return $this->text;
    }
}