<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 26.8.2018.
 * Time: 12:37
 */

namespace App\DesignPatterns\Behavioral\Mediator\Subsystem;


use App\DesignPatterns\Behavioral\Mediator\Colleague;

class Client extends Colleague
{
    public function request()
    {
        $this->mediator->makeRequest();
    }

    public function output(string $content)
    {
        echo $content;
    }

}