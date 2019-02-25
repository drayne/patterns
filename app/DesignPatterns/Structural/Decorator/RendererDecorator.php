<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 23.8.2018.
 * Time: 20:33
 */

namespace App\DesignPatterns\Structural\Decorator;


abstract class RendererDecorator implements RenderableInterface
{
    protected $wrapped;

    public function __construct(RenderableInterface $renderable)
    {
        $this->wrapped = $renderable;
    }
}