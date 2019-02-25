<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 22.8.2018.
 * Time: 21:21
 */

namespace App\DesignPatterns\Structural\Bridge;


interface FormatterInterface
{
    public function format(string $text);
}