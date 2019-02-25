<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 22.8.2018.
 * Time: 20:51
 */

namespace App\DesignPatterns\Structural\Adapter;


class Kindle implements EBookInterface
{

    private $page=1;

    private $totalPages=100;

    public function unlock()
    {
        // TODO: Implement unlock() method.
    }

    public function pressNext()
    {
        $this->page++;
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}