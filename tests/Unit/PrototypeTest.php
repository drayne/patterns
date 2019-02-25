<?php

namespace Tests\Unit;

use App\DesignPatterns\Prototype\BarBookPrototype;
use App\DesignPatterns\Prototype\FooBookPrototype;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PrototypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public  function testCanCreateFooBook()
    {
        $fooBookPrototype = new FooBookPrototype();
        $barBookPrototype = new BarBookPrototype();

        for ($i=1; $i<10; $i++) {
            $book = clone $fooBookPrototype;

            $book->setTitle('Foo book No ' . $i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i=1; $i<10; $i++) {
            $book = clone $barBookPrototype;
            $book->setTitle('Bar book No ' . $i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }

    }
}
