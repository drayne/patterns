<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Behavioral\Template\AoPolisa;
use App\DesignPatterns\Behavioral\Template\ImovinaPolisa;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $polisa = new AoPolisa();
        echo $polisa->izdajPolisu() . '<br>';

        $polisaImovine = new ImovinaPolisa();
        echo $polisaImovine->izdajPolisu();
    }
}
