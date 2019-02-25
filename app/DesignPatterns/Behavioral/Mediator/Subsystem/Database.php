<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 26.8.2018.
 * Time: 12:39
 */

namespace App\DesignPatterns\Behavioral\Mediator\Subsystem;


use App\DesignPatterns\Behavioral\Mediator\Colleague;

class Database extends Colleague
{
    public function getData()
    {
        return 'world';
    }
}