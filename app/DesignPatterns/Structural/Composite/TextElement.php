<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 23.8.2018.
 * Time: 19:51
 */

namespace App\DesignPatterns\Structural\Composite;


class TextElement implements RenderableInterface
{

    private $text;

    public function __construct(string $text)
    {
        $this->text=$text;
    }

    public function render()
    {
        return $this->text;
    }
}