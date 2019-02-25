<?php

namespace Tests\Unit;

use App\DesignPatterns\Structural\Decorator\JsonRenderer;
use App\DesignPatterns\Structural\Decorator\WebService;
use App\DesignPatterns\Structural\Decorator\XmlRenderer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DecoratorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDecorate()
    {
        $service = new WebService('test data');
        $service->renderData();

        $jsonDecoratedService = new JsonRenderer($service);
        $data = $jsonDecoratedService->renderData();

        $this->assertEquals('"test data"', $data);
    }
}
