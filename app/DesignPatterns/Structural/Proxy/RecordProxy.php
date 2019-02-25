<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 25.8.2018.
 * Time: 10:35
 */

namespace App\DesignPatterns\Structural\Proxy;


class RecordProxy extends Record
{
    /**
     * @var bool
     */
    private $isDirty = false;

    /**
     * @var bool
     */
    private $isInitialized = false;

    public function __construct(array $data = [])
    {
        parent::__construct($data);

        //kada Record ima data, oznaci kao initalized
        //posto Record sadrzi nasu business logiku, ne zelimo implementiramo behavior (logiku) tamo, nego u novoj proxy klasi koja EXTEND record klasu

        if (count($data)>0) {
            $this->isDirty = true;
            $this->isInitialized = true;
        }
    }

    public function __set(string $name, string $value)
    {
        $this->isDirty = true;
        parent::__set($name, $value);
    }

    public function isDirty()
    {
        return $this->isDirty;
    }
}