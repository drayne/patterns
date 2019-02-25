<?php

namespace Tests\Unit;

use App\DesignPatterns\Behavioral\Command\HelloCommand;
use App\DesignPatterns\Behavioral\Command\Invoker;
use App\DesignPatterns\Behavioral\Command\Receiver;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommandTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testOutput()
    {
        $invoker  = new Invoker();
        $receiver = new Receiver();
        $command = new HelloCommand($receiver);

        $invoker->setCommand($command);
        $invoker->run();

        $this->assertEquals('Hello World', $receiver->getOutput());
    }
}
