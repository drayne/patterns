<?php

namespace Tests\Unit;


use App\DesignPatterns\Structural\Fascade;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FascadeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
//    public function testComputerOn()
//    {
//        $os = $this->createMock('App\DesignPatterns\Structural\Fascade\OsInterface');
//
//        $os->method('getName')->will($this->returnValue('Linux'));
//
//        $bios = $this->getMockBuilder('App\DesignPatterns\Structural\Fascade\BiosInterface')
//                        ->setMethods(['launch', 'execute', 'waitForKeyPress'])
//                        ->disableAutoload()
//                        ->getMock();
//        $bios->expects($this->once())
//                        ->method('launch')
//                        ->with($os);
//
//        $fascade = new Fascade($bios, $os);
//        $fascade->turnOn();
//
//        $this->assertEquals('Linux', $os->getName());
//
//    }
}
