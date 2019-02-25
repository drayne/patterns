<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 22.8.2018.
 * Time: 20:50
 */

namespace App\DesignPatterns\Structural\Adapter;


interface EBookInterface
{
    public function unlock();

    public function pressNext();

    public function getPage();
}