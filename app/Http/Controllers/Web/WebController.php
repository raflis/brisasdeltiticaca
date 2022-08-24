<?php

namespace App\Http\Controllers\Web;

use Auth;
use Validator;
use App\Models\Admin\Post;
use App\Models\Admin\Zone;
use App\Models\Admin\Event;
use Jenssegers\Agent\Agent;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Workshop;
use App\Models\Admin\PageField;
use App\Models\Admin\Testimonial;
use App\Models\Admin\BoardDirector;
use App\Models\Admin\WorkshopEvent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class WebController extends Controller
{
    public function index()
    {
        $agent = new Agent();
        $pagefield = PageField::find(1);
        $sliders = Slider::orderBy('order', 'Asc')->get();
        $testimonials = Testimonial::orderBy('order', 'Asc')->get();
        $posts = Post::orderBy('order', 'Asc')->take(6)->get();
        $events = Event::where('featured', 1)->orderBy('event_date', 'Asc')->take(8)->get();
        return view('web.index', compact('agent', 'sliders', 'testimonials', 'posts', 'pagefield', 'events'));
    }

    public function aboutus()
    {
        $agent = new Agent();
        $pagefield = PageField::find(1);
        $board_directors = BoardDirector::orderBy('order', 'asc')->get();
        return view('web.aboutus', compact('agent', 'board_directors', 'pagefield'));
    }

    public function events()
    {
        $agent = new Agent();
        $pagefield = PageField::find(1);
        $dinner = Category::find(1);
        $lunch = Category::find(2);
        $special = Category::find(3);
        return view('web.events', compact('agent', 'pagefield', 'dinner', 'lunch', 'special'));
    }

    public function event($slug, $id)
    {
        $agent = new Agent();
        $event = Event::where('slug', $slug)->where('id', $id)->first();
        $related_products = Event::where('category_id', $event->category_id)->where('id', '<>', $event->id)->get();
        return view('web.event', compact('agent', 'event', 'related_products'));
    }

    public function event_buy($slug, $id)
    {
        $agent = new Agent();
        $zone1 = Zone::find(1);
        $zone2 = Zone::find(2);
        $zone3 = Zone::find(3);
        $event = Event::where('slug', $slug)->where('id', $id)->first();
        $related_products = Event::where('category_id', $event->category_id)->where('id', '<>', $event->id)->get();
        $pagefield = PageField::find(1);
        session()->forget('cart');
        return view('web.event_buy', compact('agent', 'zone1', 'zone2', 'zone3', 'event', 'pagefield', 'related_products'));
    }

    public function workshops()
    {
        $agent = new Agent();
        $pagefield = PageField::find(1);
        $workshops = Workshop::orderBy('order', 'asc')->get();
        return view('web.workshops', compact('agent', 'pagefield', 'workshops'));
    }

    public function workshop_event($slug, $id)
    {
        $agent = new Agent();
        $pagefield = PageField::find(1);
        $workshop_event = WorkshopEvent::where('slug', $slug)->where('id', $id)->first();
        $related_products = WorkshopEvent::where('workshop_id', $workshop_event->workshop_id)->where('id', '<>', $workshop_event->id)->get();
        return view('web.workshop_event', compact('agent', 'workshop_event', 'pagefield', 'related_products'));
    }

    public function contact()
    {
        $agent = new Agent();
        $pagefield = PageField::find(1);
        return view('web.contact', compact('agent', 'pagefield'));
    }

    public function postContacto(Request $request)
    {
        $rules=[
            'name' => 'required',
            'lastname' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'project' => 'required',
            'project_type' => 'required',
        ];

        $messages=[
            'name.required' => 'Ingrese su nombre',
            'lastname.required' => 'Ingrese su apellido',
            'telephone.required' => 'Ingrese su teléfono',
            'email.required' => 'Ingrese su correo',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with('typealert','danger')->withInput();
        else:
            $record = Record::create($request->all());
            return redirect()->route('gracias')->with('message','Creado con éxito.')->with('typealert','success');
        endif;
    }

    public function blog()
    {
        $agent = new Agent();
        $posts = Post::orderBy('order', 'asc')->get();
        $pagefield = PageField::find(1);
        return view('web.blog', compact('agent', 'posts', 'pagefield'));
    }

    public function post($slug, $id)
    {
        $agent = new Agent();
        $post = Post::where('id', $id)->where('slug', $slug)->first();
        $posts = Post::where('id', '<>', $id)->get();
        return view('web.post', compact('agent', 'post', 'posts'));
    }
}
