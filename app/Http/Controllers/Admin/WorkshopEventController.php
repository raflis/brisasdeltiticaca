<?php

namespace App\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Workshop;
use App\Models\Admin\WorkshopEvent;
use App\Http\Controllers\Controller;

class WorkshopEventController extends Controller
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
        $workshop_events = WorkshopEvent::orderBy('event_date', 'Asc')->paginate();
        return view('admin.workshop_events.index', compact('workshop_events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Workshop::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.workshop_events.create', compact('category'));
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
            'workshop_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'event_date' => 'required',
            'description' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'banner1' => 'required',
            'banner2' => 'required',
            'price' => 'required',
        ];

        $messages=[
            //
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            if($request->images):
                $request->merge(['images' => array_values(collect($request->images)->sortBy(['order'])->toArray())]);
            endif;

            $recorded = WorkshopEvent::create($request->all());
            return redirect()->route('workshop_events.index')->with('message', 'Creado con éxito.')->with('typealert', 'success');
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
        $workshop_event = WorkshopEvent::find($id);
        $category = Workshop::orderBy('name', 'ASC')->pluck('name', 'id');
        $workshop_event->event_date = \Carbon\Carbon::parse($workshop_event->event_date)->format('Y-m-d');
        return view('admin.workshop_events.edit', compact('workshop_event', 'category'));
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
            'workshop_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'event_date' => 'required',
            'description' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'banner1' => 'required',
            'banner2' => 'required',
            'price' => 'required',
        ];

        $messages=[
            //
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            if($request->images):
                $request->merge(['images' => array_values(collect($request->images)->sortBy(['order'])->toArray())]);
            endif;

            $updated = WorkshopEvent::find($id);
            $updated->fill($request->all())->save();
            return redirect()->route('workshop_events.index')->with('message', 'Actualizado con éxito.')->with('typealert', 'success');
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
        $destroyed = WorkshopEvent::find($id)->delete();
        return back()->with('message', 'Eliminado correctamente')->with('typealert', 'success');
    }
}
