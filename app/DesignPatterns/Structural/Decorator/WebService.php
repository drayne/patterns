<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 23.8.2018.
 * Time: 20:32
 */

namespace App\DesignPatterns\Structural\Decorator;


class WebService implements RenderableInterface
{

    private $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function renderData()
    {
        return $this->data;
    }
}