<?php

namespace Tests\Unit;

use App\DesignPatterns\SimpleFactory\SimpleFactory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SimpleFactoryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateFoo()
    {
        $factory = new SimpleFactory();
        $result = $factory->create();

        $this->assertEquals($result->getFoo(), 'baz - bar');
    }
}
