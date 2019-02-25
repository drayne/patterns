<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 26.8.2018.
 * Time: 12:25
 */

namespace App\DesignPatterns\Behavioral\Mediator;


use App\DesignPatterns\Behavioral\Mediator\Subsystem\Client;
use App\DesignPatterns\Behavioral\Mediator\Subsystem\Database;
use App\DesignPatterns\Behavioral\Mediator\Subsystem\Server;

class Mediator implements MediatorInterface
{

    private $server;
    private $database;
    private $client;

    public function __construct(Client $client, Server $server, Database $database)
    {
        $this->client = $client;
        $this->database = $database;
        $this->server = $server;

        $this->database->setMediator($this);
        $this->server->setMediator($this);
        $this->client->setMediator($this);

    }

    public function sendResponse($content)
    {
        $this->client->output($content);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDb()
    {
        return $this->database->getData();
    }
}