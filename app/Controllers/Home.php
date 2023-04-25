<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        return view('inicio');
    }

    public function quienessomos()
    {
        return view('quienes-somos');
    }

    public function NuestroTeam()
    {
        return view('nuestro-team');
    }

    public function portafolio_mediquiz()
    {
        return view('portafolio_mediquiz');

    }

    public function portafolio_fullreactiva()
    {
        return view('portafolio_fullreactiva');
    }

    public function contactanos()
    {
        return view('contactanos');
    }

}