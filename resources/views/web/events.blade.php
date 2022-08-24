@extends('web.layout')

@section('content')

<section class="sec7" style="background-image: url('{{ $pagefield->events_image }}')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="wow fadeIn" data-wow-delay="0.5s">
                    {{ $pagefield->events_title1 }}
                </p>
                <h1 class="wow fadeIn" data-wow-delay="0.6s">
                    {{ $pagefield->events_title2 }}
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="sec13">
    <div class="line line1"></div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="content">
                    <div class="image">
                        <img src="{{ asset('images/evento_categoria.jpg') }}" alt="">
                    </div>
                    <div class="content_text">
                        <div class="content_header wow fadeIn" data-wow-delay="0.6s">
                            <h2>
                                {{ $dinner->name }}
                            </h2>
                            {{-- <a href="{{ route('event') }}">
                                Compra tu entrada aquí
                            </a> --}}
                        </div>
                        <div class="text wow fadeIn" data-wow-delay="0.7s">
                            {!! htmlspecialchars_decode($dinner->description) !!}
                        </div>
                        <div class="items_tab wow fadeIn" data-wow-delay="0.8s">
                            <ul class="nav nav-pills mb-3 navpill1" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link navlink1 active" id="pillstab1_1" data-bs-toggle="pill" data-bs-target="#pills1_1" type="button" role="tab" aria-controls="pills1_1" aria-selected="true">
                                        Recomendaciones
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link navlink1" id="pillstab1_2" data-bs-toggle="pill" data-bs-target="#pills1_2" type="button" role="tab" aria-controls="pills1_2" aria-selected="true">
                                        Zonas
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link navlink1" id="pillstab1_3" data-bs-toggle="pill" data-bs-target="#pills1_3" type="button" role="tab" aria-controls="pills1_3" aria-selected="true">
                                        Promociones
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link navlink1" id="pillstab1_4" data-bs-toggle="pill" data-bs-target="#pills1_4" type="button" role="tab" aria-controls="pills1_4" aria-selected="true">
                                        Derecho de corcho
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link navlink1" id="pillstab1_5" data-bs-toggle="pill" data-bs-target="#pills1_5" type="button" role="tab" aria-controls="pills1_5" aria-selected="true">
                                        Carta
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills1_1" role="tabpanel" aria-labelledby="pillstab1_1">
                                    {!! htmlspecialchars_decode($dinner->detail1) !!}
                                </div>
                                <div class="tab-pane fade" id="pills1_2" role="tabpanel" aria-labelledby="pillstab1_2">
                                    <div class="zonas">
                                    {!! htmlspecialchars_decode($dinner->detail2) !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills1_3" role="tabpanel" aria-labelledby="pillstab1_3">
                                    <div class="promociones">
                                    {!! htmlspecialchars_decode($dinner->detail3) !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills1_4" role="tabpanel" aria-labelledby="pillstab1_4">
                                    {!! htmlspecialchars_decode($dinner->detail4) !!}
                                </div>
                                <div class="tab-pane fade" id="pills1_5" role="tabpanel" aria-labelledby="pillstab1_5">
                                    <div class="carta">
                                        <a href="{{ $dinner->detail5 }}" target="_blank">
                                            VER NUESTRA CARTA
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if($dinner->events->count() >= 1)
            <div class="col-md-10">
                <h2 class="h2events h2events1 wow fadeIn" data-wow-delay="0.5s">
                    Nuestros eventos disponibles
                </h2>
                <div class="carousel-eventos-page eventspage1 wow fadeIn" data-wow-delay="0.6s">
                    @foreach ($dinner->events as $item)
                    <div class="item">
                        <img src="{{ $item->image1 }}" alt="">
                        <a href="{{ route('event', [$item->slug, $item->id]) }}" class="comprar comprar1">
                            Compra tu entrada aquí
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</section>

<section class="sec13">
    <div class="line line2"></div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="content">
                    <div class="content_text">
                        <div class="content_header wow fadeIn" data-wow-delay="0.6s">
                            <h2>
                                {{ $lunch->name }}
                            </h2>
                            {{-- <a href="{{ route('event') }}">
                                Compra tu entrada aquí
                            </a> --}}
                        </div>
                        <div class="text wow fadeIn" data-wow-delay="0.7s">
                            {!! htmlspecialchars_decode($lunch->description) !!}
                        </div>
                        <div class="items_tab wow fadeIn" data-wow-delay="0.8s">
                            <ul class="nav nav-pills mb-3 navpill2" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link navlink2 active" id="pillstab2_1" data-bs-toggle="pill" data-bs-target="#pills2_1" type="button" role="tab" aria-controls="pills2_1" aria-selected="true">
                                        Recomendaciones
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link navlink2" id="pillstab2_2" data-bs-toggle="pill" data-bs-target="#pills2_2" type="button" role="tab" aria-controls="pills2_2" aria-selected="true">
                                        Zonas
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link navlink2" id="pillstab2_3" data-bs-toggle="pill" data-bs-target="#pills2_3" type="button" role="tab" aria-controls="pills2_3" aria-selected="true">
                                        Promociones
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link navlink2" id="pillstab2_4" data-bs-toggle="pill" data-bs-target="#pills2_4" type="button" role="tab" aria-controls="pills2_4" aria-selected="true">
                                        Derecho de corcho
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link navlink2" id="pillstab2_5" data-bs-toggle="pill" data-bs-target="#pills2_5" type="button" role="tab" aria-controls="pills2_5" aria-selected="true">
                                        Carta
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills2_1" role="tabpanel" aria-labelledby="pillstab2_1">
                                    {!! htmlspecialchars_decode($lunch->detail1) !!}
                                </div>
                                <div class="tab-pane fade" id="pills2_2" role="tabpanel" aria-labelledby="pillstab2_2">
                                    <div class="zonas">
                                        {!! htmlspecialchars_decode($lunch->detail2) !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills2_3" role="tabpanel" aria-labelledby="pillstab2_3">
                                    <div class="promociones">
                                        {!! htmlspecialchars_decode($lunch->detail3) !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills2_4" role="tabpanel" aria-labelledby="pillstab2_4">
                                    {!! htmlspecialchars_decode($lunch->detail4) !!}
                                </div>
                                <div class="tab-pane fade" id="pills2_5" role="tabpanel" aria-labelledby="pillstab2_5">
                                    <div class="carta">
                                        <a href="{{ $lunch->detail5 }}" target="_blank">
                                            VER NUESTRA CARTA
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ $lunch->image }}" alt="">
                    </div>
                </div>
            </div>
            @if($lunch->events->count() >= 1)
            <div class="col-md-10">
                <h2 class="h2events h2events2 wow fadeIn" data-wow-delay="0.5s">
                    Nuestros eventos disponibles
                </h2>
                <div class="carousel-eventos-page eventspage2 wow fadeIn" data-wow-delay="0.6s">
                    @foreach ($lunch->events as $item)
                    <div class="item">
                        <img src="{{ $item->image1 }}" alt="">
                        <a href="{{ route('event', [$item->slug, $item->id]) }}" class="comprar comprar1">
                            Compra tu entrada aquí
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</section>

<section class="sec13">
    <div class="line line3"></div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="content">
                    <div class="image">
                        <img src="{{ $special->image }}" alt="">
                    </div>
                    <div class="content_text">
                        <div class="content_header wow fadeIn" data-wow-delay="0.5s">
                            <h2>
                                {{ $special->name }}
                            </h2>
                            {{-- <a href="{{ route('event') }}">
                                Compra tu entrada aquí
                            </a> --}}
                        </div>
                        <div class="text wow fadeIn" data-wow-delay="0.6s">
                            {!! htmlspecialchars_decode($special->description) !!}
                        </div>
                        <div class="text_button wow fadeIn" data-wow-delay="0.7s">
                            <a href="{{ route('contact') }}">
                                Consultas aquí
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="col-md-10">
                <h2 class="h2events h2events3 wow fadeIn" data-wow-delay="0.5s">
                    Nuestros eventos disponibles
                </h2>
                <div class="carousel-eventos-page eventspage3 wow fadeIn" data-wow-delay="0.6s">
                    @for ($i = 0; $i < 6; $i++)
                    <div class="item">
                        <img src="{{ asset('images/cartelera3.jpg') }}" alt="">
                        <a href="" class="comprar comprar3">
                            Compra tu entrada aquí
                        </a>
                    </div>
                    @endfor
                </div>
            </div>-->
        </div>
    </div>
</section>

@endsection