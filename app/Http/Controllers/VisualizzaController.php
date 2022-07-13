<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;

class VisualizzaController extends BaseController
{
public function visualizza()
{
    return view('pagina_iniziale');
}
public function visualizza_pagina()
{
    return view('home');
}
public function visualizza_bbc()
{
    return view('bbc');
}
public function visualizza_sport()
{
    return view('sport');
}
public function visualizza_general()
{
    return view('general');
}
public function visualizza_business()
{
    return view('business');

}
public function visualizza_entertainment()
{
    return view('entertainment');
}
public function visualizza_health()
{
    return view('health');
}
public function visualizza_scienza()
{
    return view('scienza');
}
public function visualizza_tecnologia()
{
    return view('tecnology');

}
public function visualizza_preferiti()
{
    return view('preferiti');
}
}
