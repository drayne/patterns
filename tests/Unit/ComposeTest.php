<?php

namespace Tests\Unit;

use App\DesignPatterns\Structural\Composite\Form;
use App\DesignPatterns\Structural\Composite\InputElement;
use App\DesignPatterns\Structural\Composite\TextElement;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ComposeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());

        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());

        $form->addElement($embed);

        $this->assertEquals(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );

    }
}
