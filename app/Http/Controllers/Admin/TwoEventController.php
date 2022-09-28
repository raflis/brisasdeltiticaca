<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Admin\Event;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;

class TwoEventController extends Controller
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
        $events = Event::where('category_id', 2)->orderBy('event_date','Asc')->paginate();
        return view('admin.two_events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::find(2);
        return view('admin.two_events.create', compact('category'));
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
            'category_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'event_date' => 'required',
            'description' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'banner1' => 'required',
            'banner2' => 'required',
            'map' => 'required',
            'link' => 'required',
            'featured' => 'required',
        ];

        $messages=[
            //
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if($request->images):
                $request->merge(['images' => array_values(collect($request->images)->sortBy(['order'])->toArray())]);
            endif;

            $recorded = Event::create($request->all());
            return redirect()->route('two_events.index')->with('message', 'Creado con éxito.')->with('typealert', 'success');
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
        $event = Event::find($id);
        $category = Category::find(2);
        $event->event_date = \Carbon\Carbon::parse($event->event_date)->format('Y-m-d');
        return view('admin.two_events.edit', compact('event', 'category'));
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
            'category_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'event_date' => 'required',
            'description' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'banner1' => 'required',
            'banner2' => 'required',
            'map' => 'required',
            'link' => 'required',
            'featured' => 'required',
        ];

        $messages=[
            //
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if($request->images):
                $request->merge(['images' => array_values(collect($request->images)->sortBy(['order'])->toArray())]);
            endif;

            $updated = Event::find($id);
            $updated->fill($request->all())->save();
            return redirect()->route('two_events.index')->with('message', 'Actualizado con éxito.')->with('typealert', 'success');
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
        $destroyed = Event::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert', 'success');
    }
}
