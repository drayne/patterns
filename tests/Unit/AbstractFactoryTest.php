<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 17.8.2018.
 * Time: 17:31
 */

namespace App\DesignPatterns\AbstractFactory;


use Tests\TestCase;

class AbstractFactoryTest extends TestCase
{

    public function testCreateHtmlText()
    {
        $factory = new HtmlFactory();
        $text = $factory->createText('foo text');

        $this->assertInstanceOf(HtmlText::class, $text);

    }

    public function testCreateJsonText()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('foo text');

        $this->assertInstanceOf(JsonText::class, $text);
    }
}
