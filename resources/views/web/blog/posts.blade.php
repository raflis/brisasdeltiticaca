@extends('web.layout')

@section('content')

<section class="sec2" id="sliderBlog">
    <div class="container-fluid">
        <div class="row justify-content-center mx-0">
            <div class="col-md-12 px-0">
                <div id="carousel-header" class="owl-carousel">
                    @foreach ($home->blog_sliders as $item)
                    <div class="item text-center">
                        <div class="slider">
                            <a href="{{ $item['link'] }}" class="escritorio">
                                <img src="{{ $item['desktop'] }}" alt="" class="img-slider img-desktop">
                            </a>
                            <a href="{{ $item['link'] }}" class="mobiles">
                                <img src="{{ $item['mobile'] }}" alt="" class="img-slider img-mobile">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec23" id="posts">
    <div class="container">
        <div class="row">
            @foreach ($posts as $item)
            <div class="col-md-6">
                <div class="item text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="item_">
                        <img class="img-carousel" src="{{ $item->image }}" alt="">
                    </div>
                    <div class="info">
                        <div class="detalles shadow">
                            <p class="detalles1">
                                {{ $item->name }}
                            </p>
                            <p class="detalles2">
                                {!! outP(htmlspecialchars_decode($item->excerpt)) !!}
                            </p>
                            <div class="boton">
                                <a href="{{ route('post', $item->slug) }}" class="btn btn-leermas shadow">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="sec13" id="contactanosWhatsapp">
    <div class="container-fluid">
        <div class="row"> 
            <div class="contacto col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            Mándanos un mensaje y nos pondremos en contacto contigo
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="https://api.whatsapp.com/send?phone=51{{ $home->whatsapp1 }}&text={{ $home->whatsapp_text }}" class="btn btn-contacto">
                            Contáctanos <img src="{{ asset('images/wp-white.png') }}" alt="" data-aos="zoom-out">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection