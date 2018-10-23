<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function index()
    {
        // Ceci va s'afficher si et seulement si l'environnement est en mode production
        return view('index');
    }
}
