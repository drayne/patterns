<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 17.8.2018.
 * Time: 18:22
 */

namespace App\DesignPatterns\FactoryMethod;


class GermanFactory extends FactoryMethod
{

    protected function createVehicle(string $type):VehicleInterface
    {
        switch ($type) {
            case FactoryMethod::CHEAP:
                return new Bicycle();
            case FactoryMethod::FAST:
                return new CarMercedes();
            default: throw new \InvalidArgumentException();
        }
    }
}