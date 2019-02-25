<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 6.1.2019.
 * Time: 21:03
 */

namespace App\DesignPatterns\Behavioral\State;


class OdbijenaState implements StateInterface
{
    protected $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function plati()
    {
        echo "Ne moze se platiti odbijena steta";
    }

    public function odobri()
    {
        echo "Ne moze se odobriti odbijena steta";
    }

    public function odbij()
    {
        echo "Steta je vec odbijena";
    }

    public function obradi()
    {
        echo "Ne moze se obraditi odbijena steta";
    }

    public function rezervisi()
    {
        echo "Ne moze se rezervisati odbijena steta";
    }
    //eventualno bi mogla neki novi status koji nemam ovde
}