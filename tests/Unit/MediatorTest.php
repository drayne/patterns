<?php

namespace Tests\Unit;

use App\DesignPatterns\Behavioral\Mediator\Mediator;
use App\DesignPatterns\Behavioral\Mediator\Subsystem\Client;
use App\DesignPatterns\Behavioral\Mediator\Subsystem\Database;
use App\DesignPatterns\Behavioral\Mediator\Subsystem\Server;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MediatorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testOutputHelloWorld()
    {
        $client = new Client();
        $database = new Database();
        $server = new Server();

        new Mediator($client, $server, $database);
        $this->expectOutputString('Hello world');
        $client->request();
    }
}
