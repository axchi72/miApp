<?php

namespace App\Http\Controllers;

use App\Models\Frontend\Documento;
use App\Models\Frontend\Post;
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
        $posts = Post::orderBy('id', 'asc')->paginate(3);
        $titulo = 'JDC';
        return view('inicio.inicio', compact('titulo', 'posts'));
    }

    public function acercaDe()
    {
        return view('inicio.acercaDe');
    }

    public function servicios()
    {
        $datas = Documento::orderBy('id')->get();
        return view('inicio.servicios', compact('datas'));
    }

    public function actualizarDatos()
    {
        return view('inicio.actualizarDatos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar($id)
    {
        $post = Post::findOrFail($id);
        return view('inicio.mostrar', compact('post'));
    }
}
