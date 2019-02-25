<?php

namespace Tests\Unit;

use App\DesignPatterns\FactoryMethod\Bicycle;
use App\DesignPatterns\FactoryMethod\CarFerarri;
use App\DesignPatterns\FactoryMethod\CarMercedes;
use App\DesignPatterns\FactoryMethod\FactoryMethod;
use App\DesignPatterns\FactoryMethod\GermanFactory;
use App\DesignPatterns\FactoryMethod\ItalianFactory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FactoryMethodTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateItalianCheap()
    {
        $factory = new ItalianFactory();
        $vehicle = $factory->create(FactoryMethod::CHEAP);
        $this->assertInstanceOf(Bicycle::class, $vehicle);
    }

    public function testCreateGermanFast()
    {
        $factory = new GermanFactory();
        $vehicle = $factory->create(FactoryMethod::FAST);
        $this->assertInstanceOf(CarMercedes::class, $vehicle);
    }
}
