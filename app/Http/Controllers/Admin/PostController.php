<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Admin\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('order','Asc')->paginate();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'name' => 'required',
            'slug' => 'required',
            'image_blog' => 'required',
            'image_post' => 'required',
            'summary' => 'required',
            'body' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese nombre',
            'slug.required' => 'La URL amigable es obligatoria',
            'image_blog.required' => 'Seleccione imagen',
            'image_post.required' => 'Seleccione imagen',
            'summary.required' => 'El resumen es obligatorio',
            'body.required' => 'El contenido de la entrada es obligatorio',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $recorded = Post::create($request->all());
            return redirect()->route('posts.index')->with('message','Creado con ??xito.')->with('typealert','success');
        endif;
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
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illum   inate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules=[
            'name' => 'required',
            'slug' => 'required',
            'image_blog' => 'required',
            'image_post' => 'required',
            'summary' => 'required',
            'body' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese nombre',
            'slug.required' => 'La URL amigable es obligatoria',
            'image_blog.required' => 'Seleccione imagen',
            'image_post.required' => 'Seleccione imagen',
            'summary.required' => 'El resumen es obligatorio',
            'body.required' => 'El contenido de la entrada es obligatorio',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $updated = Post::find($id);
            $updated->fill($request->all())->save();
            return redirect()->route('posts.index')->with('message','Actualizado con ??xito.')->with('typealert','success');
        endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroyed = Post::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert','success');
    }
}
