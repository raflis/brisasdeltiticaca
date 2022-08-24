<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Admin\Workshop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkshopController extends Controller
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
        $workshops = Workshop::orderBy('order','Asc')->paginate();
        return view('admin.workshops.index', compact('workshops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.workshops.create');
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
            'description' => 'required',
            'title1' => 'required',
            'description1' => 'required',
            'title2' => 'required',
            'description2' => 'required',
            'title3' => 'required',
            'description3' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese nombre',
            'image.required' => 'Seleccione imagen',
            'description.required' => 'Ingrese descripción',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if($request->images):
                $request->merge(['images' => array_values(collect($request->images)->sortBy(['order'])->toArray())]);
            else:
                $request->merge(['images' => []]);
            endif;
            $recorded = Workshop::create($request->all());
            return redirect()->route('workshops.index')->with('message','Creado con éxito.')->with('typealert','success');
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
        $workshop = Workshop::find($id);
        return view('admin.workshops.edit', compact('workshop'));
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
            'description' => 'required',
            'title1' => 'required',
            'description1' => 'required',
            'title2' => 'required',
            'description2' => 'required',
            'title3' => 'required',
            'description3' => 'required',
            'order' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese nombre',
            'image.required' => 'Seleccione imagen',
            'description.required' => 'Ingrese descripción',
            'order.required' => 'Ingrese orden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if($request->images):
                $request->merge(['images' => array_values(collect($request->images)->sortBy(['order'])->toArray())]);
            else:
                $request->merge(['images' => []]);
            endif;
            $updated = Workshop::find($id);
            $updated->fill($request->all())->save();
            return redirect()->route('workshops.index')->with('message','Actualizado con éxito.')->with('typealert','success');
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
        $destroyed = Workshop::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert','success');
    }
}
