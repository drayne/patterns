<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 2.12.2018.
 * Time: 19:01
 */

namespace App\DesignPatterns\AbstractFactory2;


interface IngredientFactory
{
    /*
     * implementacije ovih metoda ce u praksi vracati objekte
     * tijesto() ce u sebi imati return new NekaKlasa
     * na taj nacin ce factory da obezbjeduje objekte
     */
    public function tijesto();

    public function kora();

    public function parizer();
}