@extends('web.layout')

@section('content')

<section class="sec2" id="sliderBlog">
    <div class="container-fluid">
        <div class="row justify-content-center mx-0">
            <div class="col-md-12 px-0">
                <div id="carousel-header" class="owl-carousel">
                    <div class="item text-center">
                        <div class="slider">
                            <img src="{{ asset('images/slider-blog.png') }}" alt="" class="img-slider img-desktop">
                            <img src="{{ asset('images/slider-blog-mobile.png') }}" alt="" class="img-slider img-mobile">
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="slider">
                            <img src="{{ asset('images/slider-home-desktop.png') }}" alt="" class="img-slider img-desktop">
                            <img src="{{ asset('images/slider-home-mobile.png') }}" alt="" class="img-slider img-mobile">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec26" id="contenidoDelPost">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contenido">
                    <div class="imagen">
                        <img src="{{ $post->image }}" alt="">
                    </div>
                    <h1>{{ $post->name }}</h1>
                    <div class="detail">
                        {!! htmlspecialchars_decode($post->body) !!}
                    </div>
                    <hr>
                    <div class="autor">
                        <div class="nombre">
                            <span>{{ $post->author }}</span>
                        </div>
                        <div class="detalle">
                            <span>
                                {!! htmlspecialchars_decode($post->author_description) !!}
                                {!! htmlspecialchars_decode($post->author_description) !!}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec21" id="formularioProyecto">
    <div class="container-fluid content">
        <div class="row">
            <div class="col-md-12 imagen-mobile">
                <img src="{{ asset('images/proyecto-formulario-mobile.png') }}" alt="">
            </div>
            <div class="col-md-5 px-0 imagenForm">
            </div>
            <div class="col-md-7 formularioProyecto">
                <div class="formTot">
                    <h4>Déjanos tus datos y nos pondremos en contacto contigo</h4>
                    <div class="formulario row">
                        <form action="{{ route('contacto') }}" method="POST">
                        @csrf
                        <div class="form-group col-md-12">
                            <select name="project" id="" class="form-control" required>
                                <option value="">Selecciona un proyecto</option>
                                @foreach ($projects as $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="name" id="" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="lastname" id="" class="form-control" placeholder="Apellidos" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="telephone" id="" class="form-control" placeholder="Teléfono" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" id="" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-12">
                            <select name="project_type" id="" class="form-control" required>
                                <option value="">Estoy interesado en</option>
                                @foreach ($typeprojects as $item => $i)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="observation" id="" rows="3" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="form-group col-md-12 enviar">
                            <input type="submit" class="btn btn-enviar shadow" value="Enviar">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
