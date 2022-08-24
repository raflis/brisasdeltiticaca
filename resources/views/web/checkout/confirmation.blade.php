@extends('web.layout')

@section('content')

<section class="sec31">
    <div class="container-fluid">
        <div class="row">
            <div class="col md-12 px-0">
                <div class="content">
                    <div class="content_left">
                        <img src="{{ asset('images/slider.jpg') }}" alt="">
                    </div>
                    <div class="content_right">
                        <p class="tit_small">
                            Brisas del Titicaca
                        </p>
                        <p class="tit">
                            ¡Compra exitosa!
                        </p>
                        <p class="tit2">
                            Ingresa a tu correo electrónico y verifica tu compra
                        </p>
                        <div class="text-center">
                            <a href="{{ route('index') }}">Continuar al inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection