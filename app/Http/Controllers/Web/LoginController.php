<?php

namespace App\Http\Controllers\Web;

use Auth;
use Hash;
use Validator;
use App\Models\User;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['logout']);
    }

    public function index()
    {
        return view('web.login.index');
    }

    public function login(Request $request)
    {
        $rules=[
            'email' => 'required',
            'password' => 'required',
        ];

        $messages=[
            'email.required' => 'Su email electrónico es requerido',
            //'email.email' => 'El formato de su correo electrónico es invalido',
            'password.required' => 'Por favor escriba una contraseña',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            $user_login = explode('-', $request->email);
            if(count($user_login) >= 2):
                if(strlen($user_login[1]) == 0):
                    return response()->json(['success' => false]);
                endif;
                if(Auth::attempt(['id' => $user_login[1], 'password' => $request->password], true)):
                    if(Auth::user()->role == 0):
                        return response()->json(['success' => true, 'ruta' => 'admin']);
                    endif;
                    return response()->json(['success' => true, 'ruta' => 'myaccount/profile']);
                else:
                    return response()->json(['success' => false]);
                endif;
            endif;
            
            if(count($user_login) <= 1):
                if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true)):
                    if(Auth::user()->role == 0):
                        return response()->json(['success' => true, 'ruta' => 'admin']);
                    endif;
                    return response()->json(['success' => true, 'ruta' => 'myaccount/profile']);
                else:
                    return response()->json(['success' => false]);
                endif;
            endif;
        endif;
    }

    public function create()
    {
        $countries = [
            '' => 'Selecciona tu país',
            'Perú' => 'Perú',
            'Colombia' => 'Colombia',
        ];

        $genders = [
            '' => 'Seleccione su género',
            'Masculino' => 'Masculino',
            'Femenino' => 'Femenino',
        ];

        $type_document = [
            '' => 'Seleccione su tipo de documento',
            'DNI' => 'DNI',
            'Pasaporte' => 'Pasaporte',
            'Carnet de extranjería' => 'Carnet de extranjería',
        ];

        return view('web.login.create', compact('countries', 'genders', 'type_document'));
    }

    public function store(Request $request)
    {
        $rules=[
            'name' => 'required',
            'lastname' => 'required',
            'country' => 'required',
            'type_document' => 'required',
            'document' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ];

        $messages=[
            'name.required' => 'El nombre es obligatorio',
            'lastname.required' => 'El apellido es obligatorio',
            'type_document.required' => 'Seleccione su tipo de documento',
            'document.required' => 'Ingrese su documento',
            'birthday.required' => 'Ingrese su cumpleaños',
            'email.required' => 'Ingrese su email',
            'email.unique' => 'El email ya se encuentra en uso',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            $request->merge(['password' => Hash::make($request->password)]);
            $request->merge(['role' => 1]);
            $request->merge(['avatar' => 'avatar.png']);
            $request->merge(['membership' => 'none']);
            if(!$request->information):
                $request->merge(['information' => 0]);
            endif;
            $recorded = User::create($request->all());
            return redirect()->route('index')->with('message', 'Usuario creado con éxito.')->with('typealert', 'success');
        endif;
    }

    public function edit($id)
    {
        $user = User::find($id);
        $supervisors = User::where('role','1')->get()->pluck('full_name','id')->prepend('Selecciona un supervisor', NULL)->toArray();

        return view('admin.login.edit', compact('user', 'supervisors'));
    }

    public function update(Request $request, $id)
    {
        $rules=[
            'password' => 'required',
            'newpassword' => 'required|min:8',
            'renewpassword' => 'required|min:8|same:newpassword',
        ];

        $messages=[
            'password.required' => 'Por favor escriba su contraseña',
            'newpassword.required' => 'Por favor escriba su nueva contraseña',
            'renewpassword.required' => 'Por favor escriba nuevamente su nueva contraseña',
            'newpassword.min' => 'La nueva contraseña debe tener al menos 8 caracteres',
            'renewpassword.min' => 'La nueva contraseña debe tener al menos 8 caracteres',
            'renewpassword.same' => 'Las contraseñas no coinciden',
        ];

        $validator=Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        else:
            $user=User::find(Auth::user()->id);
            if(Hash::check($request->password, Auth::user()->password)):
                $user->password=Hash::make($request->newpassword);
                $user->save();
                return back()->with('message', 'Contraseña actualizada con éxito')->with('typealert', 'success');
            else:
                return back()->withErrors($validator)->with('message', 'La contraseña ingresada no coincide')->with('typealert', 'danger')->withInput();
            endif;
        endif;
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
