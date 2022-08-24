@extends('web.layout')

@section('content')

<section class="sec25">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">
                    <p>
                        Perfil
                    </p>
                    <h2>
                        {{ (Auth::user()->gender == 'Masculino')?'Bienvenido':'Bienvenida' }}, {{ ucwords(Auth::user()->name) }} {{ ucwords(Auth::user()->lastname) }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec26">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="content">
                    <div class="content_left">
                        <ul>
                            <li class="active">
                                <a href="{{ route('profile.index') }}">
                                    <i class="fa-solid fa-address-card"></i> Mis datos
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('profile.workshops') }}">
                                    <i class="fa-solid fa-briefcase"></i> Mis talleres
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('profile.membership') }}">
                                    <i class="fa-solid fa-credit-card"></i> Mi facturación
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content_right">
                        <div class="tit_profile">
                            <h3>Datos</h3>
                        </div>
                        @include('web.partials.alert')
                        <div class="formu">
                            {!! Form::model(Auth::user(), ['route' => ['profile.update', Auth::user()->id], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate', 'files' => true]) !!}
                            <div class="items">
                                <div class="item item1">
                                    <div class="form-group">
                                        <label class="input-label">Nombres</label>
                                        {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
                                    </div>
                                    <div class="form-group">
                                        <label class="input-label">Apellidos</label>
                                        {{ Form::text('lastname', null, ['class' => 'form-control', 'required']) }}
                                    </div>
                                    <div class="form-group">
                                        <label class="input-label">País</label>
                                        {{ Form::select('country', $countries, null, ['class' => 'form-select', 'required']) }}
                                    </div>
                                    <div class="form-group">
                                        <label class="input-label">Tipo de Documento</label>
                                        <div class="d-flex">
                                            {{ Form::select('type_document', $type_document, null, ['class' => 'form-select', 'required']) }}
                                            {{ Form::text('document', null, ['class' => 'form-control', 'placeholder' => 'Ej: 12345678', 'required']) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="input-label">Fecha de Nacimiento</label>
                                         {{ Form::date('birthday', \Carbon\Carbon::parse(Auth::user()->birthday)->format('Y-m-d'), ['class' => 'form-control', 'required']) }}
                                    </div>
                                </div>
                                <div class="item item2">
                                    <div class="form-group">
                                        <label class="input-label">Email</label>
                                        {{ Form::text('hidden_input', Auth::user()->email, ['class' => 'form-control', 'required', 'readonly']) }}
                                    </div>
                                    <div class="form-group">
                                        <label class="input-label" for="">Contraseña</label>
                                        {{ Form::password('newpassword', ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group">
                                        <label class="input-label" for="">Repetir Contraseña</label>
                                        {{ Form::password('renewpassword', ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="item item3">
                                    <label for="choose-file" class="custom-file-upload" id="choose-file-label">
                                        Sube tu foto de perfil
                                     </label>
                                     <input name="avatar_front" type="file" id="choose-file" accept=".jpg,.jpeg,.png" style="display: none;" />
                                     <div class="avatar_photo">
                                        @if (Auth::user()->avatar == 'avatar.png')
                                        <img src="{{ asset('images/usuario.png') }}" alt="">
                                        @else
                                        <img src="{{ asset('images/profiles/'.Auth::user()->avatar) }}" alt="">
                                        @endif
                                     </div>
                                </div>
                                <div class="item item4 text-center">
                                    <button type="submit" class="btn btn-submit">Actualizar</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection