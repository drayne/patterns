<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 25.8.2018.
 * Time: 09:55
 */

namespace App\DesignPatterns\Structural\Fascade;


interface BiosInterface
{
    public function execute();

    public function waitForKeyPress();

    public function launch(OsInterface $os);

    public function poweDown();
}