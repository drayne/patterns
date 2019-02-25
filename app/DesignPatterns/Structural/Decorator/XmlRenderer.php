<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 23.8.2018.
 * Time: 20:34
 */

namespace App\DesignPatterns\Structural\Decorator;


class XmlRenderer extends RendererDecorator
{

    public function renderData()
    {
        $doc = new \DOMDocument();
        $data = $this->wrapped->renderData();

        $doc->appendChild($doc->createElement('content', $data));
        return $doc->saveXML();
    }
}