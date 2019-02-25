<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 19.8.2018.
 * Time: 14:30
 */

namespace App\DesignPatterns\Singleton;


class RequestCounter
{
    private $counter;

    public function incCounter()
    {
        $this->counter +=1;
    }

    public function getCounter()
    {
        return $this->counter;
    }
}