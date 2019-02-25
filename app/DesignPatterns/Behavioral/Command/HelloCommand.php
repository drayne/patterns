<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 26.8.2018.
 * Time: 13:48
 */

namespace App\DesignPatterns\Behavioral\Command;


class HelloCommand implements CommandInterface
{
    private $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->write('Hello World');
        /* ovde moze biti jos komandi */
    }
}