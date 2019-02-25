<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 19.8.2018.
 * Time: 20:31
 */

namespace App\DesignPatterns\Prototype;


abstract class BookPrototype
{
    protected $title;
    protected $category;

    abstract public function __clone();

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

}