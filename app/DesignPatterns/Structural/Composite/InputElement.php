<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 23.8.2018.
 * Time: 19:49
 */

namespace App\DesignPatterns\Structural\Composite;


class InputElement implements RenderableInterface
{

    public function render()
    {
        return '<input type="text" />';
    }
}