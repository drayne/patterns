<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 25.8.2018.
 * Time: 14:19
 */

namespace App\DesignPatterns\Structural\Proxy;

/**
 * Class SmartProxy
 * @package App\DesignPatterns\Structural\Proxy
 * slican decoratoru jer dodaje novu funkcionalnost
 * medjutim, decorator nove funkcionalnosti dodaje u vidu metoda (u runtime-u)
 * dok smartproxy dodaje funkcionalnost nevidljivu za client-a
 * npr metoda moze okinuti neki event ili upisati nesto u log i slicno
 * SmartProxy u sustini radi ovverride
 */
class SmartProxy extends Polisa
{
    public function __construct(int $id, string $owner)
    {
        parent::__construct($id, $owner);
        \Log::info('Nova polisa je kreirana ' . $owner);
    }
}