<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 26.8.2018.
 * Time: 12:24
 */

namespace App\DesignPatterns\Behavioral\Mediator;


interface MediatorInterface
{
    public function sendResponse($content);

    public function makeRequest();

    public function queryDb();
}