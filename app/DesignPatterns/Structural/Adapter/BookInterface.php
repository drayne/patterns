<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 22.8.2018.
 * Time: 20:48
 */

namespace App\DesignPatterns\Structural\Adapter;


interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage();
}