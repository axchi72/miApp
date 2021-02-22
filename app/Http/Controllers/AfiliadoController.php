<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionAfiliado;
use App\Models\Afiliado;
use App\Models\Parametrizacion\Banco;
use App\Models\Parametrizacion\Cotiza;
use App\Models\Parametrizacion\Deduccion;
use App\Models\Parametrizacion\Departamento;
use App\Models\Parametrizacion\Municipio;
use App\Models\Parametrizacion\Slaboral;
use App\Models\Seguridad\Usuario;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        can('listar-afiliado');
        $identidad  = $request->get('identidad');
        $id = $request->get('id');
        $nombre       = $request->get('nombre');
        $apellido       = $request->get('apellido');

        $datas = Afiliado::orderBy('id', 'DESC')
            ->identidad($identidad)
            ->id($id)
            ->nombre($nombre)
            ->apellido($apellido)
            ->paginate(10);
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
        $slaborals = Slaboral::orderBy('id')->pluck('nombre','id')->toArray();
        $cotizas = Cotiza::orderBy('id')->pluck('nombre','id')->toArray();
        $departamentos = Departamento::orderBy('id')->pluck('nombre','id')->toArray();
        $bancos = Banco::orderBy('id')->pluck('nombre','id')->toArray();
        return view('afiliado.crear', compact('slaborals','cotizas','departamentos','bancos'));
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
        return redirect()->route('afiliado')->with('mensaje', 'El formulario se envió correctamente');
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
    public function mostrar($id)
    {

        $data = Afiliado::with('deduccions')->findOrFail($id);
        return view('afiliado.mostrar',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $data = Afiliado::findOrFail($id);
        $slaborals = Slaboral::orderBy('id')->pluck('nombre','id')->toArray();
        $cotizas = Cotiza::orderBy('id')->pluck('nombre','id')->toArray();
        $departamentos = Departamento::orderBy('id')->pluck('nombre','id')->toArray();
        $bancos = Banco::orderBy('id')->pluck('nombre','id')->toArray();
        return view('afiliado.editar',compact('data','slaborals','cotizas','departamentos','bancos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidacionAfiliado $request, $id)
    {
        //dd($request);
        $afiliado = Afiliado::findOrFail($id);
        if ($foto = Afiliado::setFoto($request->foto_up, $afiliado->foto))
            $request->request->add(['foto' => $foto]);
        $afiliado->update(array_filter($request->all()));
        return redirect()->route('afiliado')->with('mensaje', 'afiliado actualizado con exito');
    }

    public function exportPdf($id)
    {
        $data = Afiliado::with('deduccions')->findOrFail($id);
        $pdf = PDF::loadView('afiliado.pdf', compact('data'));
        return $pdf->download('afiliados-deducciones.pdf');
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

    public function getMunicipios(Request $request)
    {
        if($request->ajax()) {
            $municipios = Municipio::where('departamento_id', $request->departamento)->get();
            foreach ($municipios as $municipio) {
                $muniArrays[$municipio->id] = $municipio->nombre;
            }
            return response()->json($muniArrays);
        }
    }
}
