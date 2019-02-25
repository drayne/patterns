<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 22.8.2018.
 * Time: 20:49
 */

namespace App\DesignPatterns\Structural\Adapter;


class Book implements BookInterface
{

    private $page;

    public function turnPage()
    {
        $this->page++;
    }

    public function open()
    {
        $this->page=1;
    }

    public function getPage()
    {
        return $this->page;
    }
}