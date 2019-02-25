<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 19.8.2018.
 * Time: 11:10
 */

namespace App\DesignPatterns\Builder;


class Director
{
    public function build(BuilderInterface $builder)
    {
        $builder->createVehicle();
        $builder->addDoors();
        return $builder->getVehicle();

    }
}