<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionPost;
use App\Models\Frontend\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Post::with('user:id,usuario')->orderBy('id')->get();
        return view('frontend.post.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('frontend.post.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionPost $request)
    {
        if($foto = Post::setFoto($request->foto_up))
            $request->request->add(['foto' => $foto]);
            $request->request->add(['usuario_id' => auth()->user()->id]);
        Post::create($request->all());
        return redirect()->route('post')->with('mensaje', 'La publicación se creo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ver(Request $request, Post $post)
    {
        if ($request->ajax()) {
            return view('frontend.post.ver', compact('post'));
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $data = Post::findOrFail($id);
        return view('frontend.post.editar', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidacionPost $request, $id)
    {

        $post = Post::findOrFail($id);
        if($foto = Post::setFoto($request->foto_up, $post->foto))
            $request->request->add(['foto' => $foto]);
            $request->request->add(['usuario_id' => auth()->user()->id]);
        $post->update($request->all());
        return redirect('frontend/post')->with('mensaje', 'La publicación se actualizó correctamente');
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
            $post = Post::findOrFail($id);
            if (Post::destroy($id)) {
                Storage::disk('public')->delete("img/posts/$post->foto");
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }

        } else {
            abort(404);
        }

    }
}
