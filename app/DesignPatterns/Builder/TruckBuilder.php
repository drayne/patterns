<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 19.8.2018.
 * Time: 10:58
 */

namespace App\DesignPatterns\Builder;


class TruckBuilder implements BuilderInterface
{

    protected $truck;

    public function createVehicle()
    {
        $this->truck = new Truck;
    }

    public function addDoors()
    {
        $this->truck->setPart('vrata');
    }

    public function getVehicle()
    {
        return $this->truck;
    }
}