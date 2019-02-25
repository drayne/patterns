<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 18.8.2018.
 * Time: 20:51
 */

namespace App\DesignPatterns\SimpleFactory;


/**
 * Class SimpleFactory
 * @package App\DesignPatterns\SimpleFactory
 * za razliku od Static Factory (kad je static uvijek se radi sa istom instancom) ovde moze postojati vise istovremenih implementacija factory-ja, sa razlicitim parametrima i slicno
 */
class SimpleFactory
{
    public function create(Bar $bar=null, Baz $baz=null)
    {
        $bar = $bar ? : new Bar('test', 123);
        $baz = $baz ? : new Baz();

        return new Foo($bar, $baz);
    }
}