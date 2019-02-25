<?php

namespace Tests\Unit;

use App\DesignPatterns\Pool\WorkerPool;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PoolTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testNewInstance()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        $this->assertSame(2, $pool->count());
        $this->assertNotSame($worker1, $worker2);
    }

    public function testSameInstance()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);

        $worker2 = $pool->get();
        $this->assertSame(1, $pool->count());
        $this->assertSame($worker2, $worker1);

    }
}
