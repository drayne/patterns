<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 25.8.2018.
 * Time: 09:56
 */

namespace App\DesignPatterns\Structural\Fascade;


class Fascade
{
    private $bios;
    private $os;

    public function __construct(BiosInterface $bios, OsInterface $os)
    {
        $this->bios = $bios;
        $this->os = $os;
    }

    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($$this->os);
    }

    public function turnOff()
    {
        $this->os->halt();
        $this->bios->poweDown();
    }
}