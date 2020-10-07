<?php

namespace App\Http\Controllers;

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
