<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'JDC';
        return view('inicio.inicio', compact('titulo'));
    }

    public function acercaDe()
    {
        return view('inicio.acercaDe');
    }
}
