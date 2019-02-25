<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 22.8.2018.
 * Time: 20:54
 */

namespace App\DesignPatterns\Structural\Adapter;

/*
 * implementira interfejs prema kome zelimo da se prilagodimo
 * ono sto prilagodjavamo prosledjujemo u construct
 */
class EBookAdapter implements BookInterface
{

    private $eBook;

    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    public function open()
    {
        $this->eBook->unlock();
    }

    public function getPage()
    {
        return $this->eBook->getPage()[0];
    }
}