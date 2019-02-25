<?php

namespace Tests\Unit;

use App\DesignPatterns\Builder\Director;
use App\DesignPatterns\Builder\Truck;
use App\DesignPatterns\Builder\TruckBuilder;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BuilderTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBuilder()
    {
        $truckBuilder = new TruckBuilder();
        $director = new Director();

        $newVehicle = $director->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }
}
