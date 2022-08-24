@extends('web.layout')

@section('content')

<section class="login_create">
    <div class="container-fluid">
        <div class="row">
            <div class="col md-12 px-0">
                <div class="content">
                    <div class="content_left">

                    </div>
                    <div class="content_right">
                        <p class="tit_small">
                            Registro de usuario
                        </p>
                        <p class="tit">
                            Creación de Perfil
                        </p>
                        @include('web.partials.alert')
                        {!! Form::open(['route' => 'login.store', 'class' => 'row needs-validation', 'novalidate']) !!}
                            <div class="form-group col-md-12">
                                <label class="input-label" for="">Nombres</label>
                                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Nombres', 'required']) }}
                            </div>
                            <div class="form-group col-md-12">
                               <label class="input-label" for="">Apellidos</label>
                                {{ Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Apellidos', 'required']) }}
                            </div>
                            <div class="form-group col-md-12">
                                <label class="input-label" for="">Correo Electrónico</label>
                                 {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese correo electrónico', 'required']) }}
                            </div>
                            <div class="form-group col-md-12">
                                <label class="input-label" for="">Selecciona tu país</label>
                                 {{ Form::select('country', $countries, null, ['class' => 'form-select', 'required']) }}
                            </div>
                            <div class="form-group col-md-5">
                                <label class="input-label" for="">Tipo de Documento</label>
                                 {{ Form::select('type_document', $type_document, null, ['class' => 'form-select', 'required']) }}
                            </div>
                            <div class="form-group col-md-7">
                                <label class="input-label" for=""></label>
                                 {{ Form::text('document', null, ['class' => 'form-control', 'placeholder' => 'Ej: 12345678', 'required']) }}
                             </div>
                            <div class="form-group col-md-12">
                                <label class="input-label" for="">Fecha de Nacimiento</label>
                                 {{ Form::date('birthday', null, ['class' => 'form-control', 'required']) }}
                            </div>
                            <div class="form-group col-md-12">
                                <label class="input-label" for="">Sexo</label>
                                 {{ Form::select('gender', $genders, null, ['class' => 'form-select', 'required']) }}
                            </div>
                            <div class="form-group col-md-12">
                                <label class="input-label" for="">Contraseña</label>
                                <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                            </div>
                            <div class="form-check col-md-12 first-check">
                                <input class="form-check-input" type="checkbox" value="1" id="information" name="information">
                                <label class="form-check-label" for="information">
                                    Autorizo que Brisas del Titicaca envíe información sobre eventos y/o promociones que ofrece al correo electrónico
                                </label>
                            </div>
                            <div class="form-check col-md-12">
                                <input class="form-check-input" type="checkbox" value="1" id="legal" name="legal" required>
                                <label class="form-check-label" for="legal">
                                    Declaro que he leído y acepto los <a href="">Términos y Condiciones</a>, <a href="">Política de Compra</a> y <a href="">Política de Privacidad</a> de Brisas del Titicaca.
                                </label>
                            </div>
                            <div class="form-group col-md-12 text-center">
                                <button type="submit" class="btn btn-submit">Regístrar usuario</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection