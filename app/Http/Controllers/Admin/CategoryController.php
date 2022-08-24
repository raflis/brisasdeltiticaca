<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
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

    public function dinner()
    {
        $category = Category::find(1);
        return view('admin.categories.dinner', compact('category'));
    }

    public function lunch()
    {
        $category = Category::find(2);
        return view('admin.categories.lunch', compact('category'));
    }

    public function special()
    {
        $category = Category::find(3);
        return view('admin.categories.special', compact('category'));
    }

    public function index()
    {
        $categories = Category::orderBy('order','Asc')->paginate();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
        ];

        $messages=[
            'name.required' => 'Ingrese el nombre',
            'image.required' => 'Ingrese la imagen',
            'description.required' => 'Ingrese la descripción',
            'detail1.required' => 'Ingrese las recomendaciones',
            'detail2.required' => 'Ingrese las zonas',
            'detail3required' => 'Ingrese las promociones',
            'detail4.required' => 'Ingrese el derecho a corcho',
            'detail5.required' => 'Ingrese la carta',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $recorded = Category::create($request->all());
            return redirect()->route('categories.index')->with('message','Creado con éxito.')->with('typealert','success');
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
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
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
        ];

        $messages=[
            'name.required' => 'Ingrese el nombre',
            'image.required' => 'Ingrese la imagen',
            'description.required' => 'Ingrese la descripción',
            'detail1.required' => 'Ingrese las recomendaciones',
            'detail2.required' => 'Ingrese las zonas',
            'detail3required' => 'Ingrese las promociones',
            'detail4.required' => 'Ingrese el derecho a corcho',
            'detail5.required' => 'Ingrese la carta',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $updated = Category::find($id);
            $updated->fill($request->all())->save();
            //return redirect()->route('categories.index')->with('message','Actualizado con éxito.')->with('typealert','success');
            return redirect()->back()->with('message','Actualizado con éxito.')->with('typealert','success');
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
        $destroyed = Category::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert','success');
    }
}
