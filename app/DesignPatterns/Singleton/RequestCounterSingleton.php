<?php
/**
 * Created by PhpStorm.
 * User: vedran
 * Date: 19.8.2018.
 * Time: 14:31
 */

namespace App\DesignPatterns\Singleton;


class RequestCounterSingleton extends RequestCounter
{
    use SingletonTrait;
}