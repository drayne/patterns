<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 17.8.2018.
 * Time: 17:21
 */

namespace App\DesignPatterns\AbstractFactory;


abstract class AbstractFactory
{
    abstract public function createText(string $text): Text;
}