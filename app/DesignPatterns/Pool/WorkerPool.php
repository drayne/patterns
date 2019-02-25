<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 19.8.2018.
 * Time: 20:06
 */

namespace App\DesignPatterns\Pool;


class WorkerPool
{
    private $occupiedWorkers = [];

    private $freeWorkers = [];

    public function get()
    {
        if (count($this->freeWorkers) == 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if(isset($this->occupiedWorkers[$key])){
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count()
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}