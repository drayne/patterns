<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 19.8.2018.
 * Time: 10:57
 */

namespace App\DesignPatterns\Builder;


interface BuilderInterface
{
    public function createVehicle();

    public function addDoors();

    public function getVehicle();
}