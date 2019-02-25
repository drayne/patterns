<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 23.8.2018.
 * Time: 20:36
 */

namespace App\DesignPatterns\Structural\Decorator;


class JsonRenderer extends RendererDecorator
{

    public function renderData()
    {
        $data = $this->wrapped->renderData();
        return json_encode($data);
    }
}