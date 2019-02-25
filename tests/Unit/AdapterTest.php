<?php

namespace Tests\Unit;

use App\DesignPatterns\Structural\Adapter\Book;
use App\DesignPatterns\Structural\Adapter\EBookAdapter;
use App\DesignPatterns\Structural\Adapter\Kindle;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdapterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();
        $this->assertEquals(2, $book->getPage());
    }

    public function testCanTurnPageOnEbookLikeInNormalBook()
    {
        $kindle = new Kindle();
        $eBookAdapter = new EBookAdapter($kindle);

        $eBookAdapter->open();
        $eBookAdapter->turnPage();

        $this->assertEquals(2,$eBookAdapter->getPage());
    }
}
