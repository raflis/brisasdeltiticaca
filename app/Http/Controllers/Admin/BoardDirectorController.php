<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Admin\BoardDirector;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoardDirectorController extends Controller
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
        $board_directors = BoardDirector::orderBy('order','Asc')->paginate();
        return view('admin.board_directors.index', compact('board_directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.board_directors.create');
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
            'image' => 'required',
            'image_mini' => 'required',
            'position' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese nombre',
            'image.required' => 'Seleccione imagen',
            'image_mini.required' => 'Seleccione imagen miniatura',
            'position.required' => 'Ingrese el cargo',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $recorded = BoardDirector::create($request->all());
            return redirect()->route('board_directors.index')->with('message','Creado con éxito.')->with('typealert','success');
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
        $board_director = BoardDirector::find($id);
        return view('admin.board_directors.edit', compact('board_director'));
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
            'image' => 'required',
            'image_mini' => 'required',
            'position' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese nombre',
            'image.required' => 'Seleccione imagen',
            'image_mini.required' => 'Seleccione imagen miniatura',
            'position.required' => 'Ingrese el cargo',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $updated = BoardDirector::find($id);
            $updated->fill($request->all())->save();
            return redirect()->route('board_directors.index')->with('message','Actualizado con éxito.')->with('typealert','success');
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
        $destroyed = BoardDirector::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert','success');
    }
}
