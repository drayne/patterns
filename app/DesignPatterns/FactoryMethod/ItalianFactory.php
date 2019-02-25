<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 17.8.2018.
 * Time: 18:22
 */

namespace App\DesignPatterns\FactoryMethod;


class ItalianFactory extends FactoryMethod
{

    protected function createVehicle(string $type):VehicleInterface
    {
        switch ($type) {
            case FactoryMethod::CHEAP:
                return new Bicycle();
            case FactoryMethod::FAST:
                return new CarFerarri();
            default: throw new \InvalidArgumentException();
        }
    }
}