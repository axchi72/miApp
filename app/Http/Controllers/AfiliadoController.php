<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionAfiliado;
use App\Models\Afiliado;
use App\Models\Seguridad\Usuario;
use Illuminate\Http\Request;

class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        can('listar-afiliado');
        $datas = Afiliado::orderBy('id')->get();
        return view('afiliado.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        can('crear-afiliado');
        return view('afiliado.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionAfiliado $request)
    {
        //dd($request);
        if($foto = Afiliado::setFoto($request->foto_up))
            $request->request->add(['foto' => $foto]);
        Afiliado::create($request->all());
        return redirect()->route('actualizar')->with('mensaje', 'El formulario se envió correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ver(Afiliado $afiliado)
    {
        //dd($afiliado);
        return view('afiliado.ver', compact('afiliado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        //
    }
}
