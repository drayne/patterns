<?php

namespace Tests\Unit;

use App\DesignPatterns\Structural\Bridge\HelloWorldService;
use App\DesignPatterns\Structural\Bridge\HtmlFormatter;
use App\DesignPatterns\Structural\Bridge\PlainTextFormatter;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BridgeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHelloWorldPlainText()
    {
        $service = new HelloWorldService(new PlainTextFormatter());
        $this->assertEquals('Hello world', $service->get());

        $service->setImplementation(new HtmlFormatter());
        $this->assertEquals('<p>Hello world</p>>', $service->get());
    }
}
