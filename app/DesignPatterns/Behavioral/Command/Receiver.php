<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 26.8.2018.
 * Time: 13:50
 */

namespace App\DesignPatterns\Behavioral\Command;


class Receiver
{
    private $enableDate = false;
    private $output = [];

    public function write(string $str)
    {
        if ($this->enableDate){
            $str .= ' [' . date('Y-m-d') . '] ';
        }
        $this->output[] = $str;
    }

    public function getOutput()
    {
        return join("\n", $this->output);
    }

    public function enableDate()
    {
        $this->enableDate = true;
    }

    public function disableDate()
    {
        $this->enableDate = false;
    }
}