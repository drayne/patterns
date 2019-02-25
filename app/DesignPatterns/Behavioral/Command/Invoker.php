<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 26.8.2018.
 * Time: 14:02
 */

namespace App\DesignPatterns\Behavioral\Command;


class Invoker
{
    private $command;

    /**
     * @param mixed $command
     */
    public function setCommand(CommandInterface $command): void
    {
        $this->command = $command;
    }

    public function run()
    {
        $this->command->execute();
    }
}