<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{ 
    public function inicio() {
        return view('inicio');
    }

    public function proyectos() {
        return view('proyectos');
    }

    public function contacto() {
        return view('contacto');
    }
}
