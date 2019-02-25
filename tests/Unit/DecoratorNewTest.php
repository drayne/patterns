<?php

namespace Tests\Unit;

use App\DesignPatterns\Structural\DecoratorNew\DodajPrezime;
use App\DesignPatterns\Structural\DecoratorNew\SamoIme;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DecoratorNewTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDecorate()
    {
        $ime = new SamoIme();
        $saPrezimenom = new DodajPrezime($ime);

        $assertIme = $ime->formatText('Vedran');
        $assertPrezime = $saPrezimenom->formatText('Vedran');

        $this->assertTrue($assertIme == 'Vedran');
        $this->assertTrue($assertPrezime == 'Vedran Bojicic');

    }
}
