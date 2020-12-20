<?php

namespace App\Http\Controllers\Parametrizacion;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionMunicipio;
use App\Models\Parametrizacion\Departamento;
use App\Models\Parametrizacion\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Municipio::orderBy('id')->get();
        return view('parametrizacion.municipio.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $departamentos = Departamento::orderBy('id')->pluck('nombre','id')->toArray();
        return view('parametrizacion.municipio.crear', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionMunicipio $request)
    {
        $municipio = Municipio::create($request->all());
        return redirect('parametrizacion/municipio')->with('mensaje', 'Municipio creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $departamentos = Departamento::orderBy('id')->pluck('nombre','id')->toArray();
        $data = Municipio::findOrFail($id);
        return view('parametrizacion.municipio.editar', compact('data','departamentos'));
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
        Municipio::findOrFail($id)->update($request->all());
        return redirect('parametrizacion/municipio')->with('mensaje', 'Municipio actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request, $id)
    {
        if ($request->ajax()) {
            if (Municipio::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
