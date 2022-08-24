<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Models\Admin\PageField;
use App\Http\Controllers\Controller;

class PageFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.home', compact('pagefield'));
    }

    public function aboutus()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.aboutus', compact('pagefield'));
    }

    public function events()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.events', compact('pagefield'));
    }

    public function workshops()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.workshops', compact('pagefield'));
    }

    public function blog()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.blog', compact('pagefield'));
    }

    public function contact()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.contact', compact('pagefield'));
    }

    public function configuration()
    {
        $pagefield = PageField::find(1);
        return view('admin.pagefields.configuration', compact('pagefield'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules=[
            /*'title' => 'required',*/
        ];

        $messages=[
            'title.required'=> 'Ingrese un título',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if($request->home_items):
                $request->merge(['home_items'=>array_values(collect($request->home_items)->sortBy(['order'])->toArray())]);
            endif;

            if($request->aboutus_images):
                $request->merge(['aboutus_images'=>array_values(collect($request->aboutus_images)->sortBy(['order'])->toArray())]);
            endif;

            if($request->workshops_images):
                $request->merge(['workshops_images'=>array_values(collect($request->workshops_images)->sortBy(['order'])->toArray())]);
            endif;
            
            $pagefield = PageField::find(1);
            $pagefield->fill($request->all())->save();
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
        //
    }
}
