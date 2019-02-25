<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 17.8.2018.
 * Time: 18:18
 */

namespace App\DesignPatterns\FactoryMethod;


abstract class FactoryMethod
{
    const CHEAP = 'cheap';
    const FAST = 'fast';

    abstract protected function createVehicle(string $type):VehicleInterface;

    public function create(string $type)
    {
        $vehicle = $this->createVehicle($type);
//        $vehicle->setColor('black');
        return $vehicle;
    }

}