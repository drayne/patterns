<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 25.8.2018.
 * Time: 14:04
 */

namespace App\DesignPatterns\Structural\Proxy;


class ProtectionProxy
{
    private $polisa;

    public function __construct(Polisa $polisa)
    {
        $this->polisa = $polisa;
    }

    //kontrola da se ne unosi pod istim id
    public function novaPolisa(int $id, string $owner)
    {
        if (array_key_exists($id,$this->polisa->getAll()) ){
            throw new \InvalidArgumentException('Id taken');
        } else{
            $this->polisa->addPolisa($id, $owner);
        }
    }
}