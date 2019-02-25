<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 17.8.2018.
 * Time: 17:26
 */

namespace App\DesignPatterns\AbstractFactory;


abstract class Text
{
    protected $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}