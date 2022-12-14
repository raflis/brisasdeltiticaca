@extends('web.layout')

@section('content')

<section class="sec14">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="items">
                    <div class="item1" style="background-image:url('{{ $event->banner1 }}')">
                        <p class="wow fadeIn" data-wow-delay="0.5s">
                            Conciertos
                        </p>
                        <h1 class="wow fadeIn" data-wow-delay="0.6s">
                            Noches de Folklore
                        </h1>
                        <h2 class="wow fadeIn" data-wow-delay="0.7s">
                            {{ mb_strtoupper(\Carbon\Carbon::parse($event->event_date)->formatLocalized('%A, %d DE %B %Y'), 'UTF-8') }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec15">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="content">
                    <div class="content_text">
                        <div class="items_tab wow fadeIn" data-wow-delay="0.6s">
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
                                    {!! htmlspecialchars_decode($event->category->detail1) !!}
                                </div>
                                <div class="tab-pane fade" id="pills1_2" role="tabpanel" aria-labelledby="pillstab1_2">
                                    <div class="zonas">
                                    {!! htmlspecialchars_decode($event->category->detail2) !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills1_3" role="tabpanel" aria-labelledby="pillstab1_3">
                                    <div class="promociones">
                                    {!! htmlspecialchars_decode($event->category->detail3) !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills1_4" role="tabpanel" aria-labelledby="pillstab1_4">
                                    {!! htmlspecialchars_decode($event->category->detail4) !!}
                                </div>
                                <div class="tab-pane fade" id="pills1_5" role="tabpanel" aria-labelledby="pillstab1_5">
                                    <div class="carta">
                                        <a href="{{ $event->category->detail5 }}" target="_blank">
                                            VER NUESTRA CARTA
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec28">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="content">
                    <div class="content_left">
                        <h2>
                            {{ $event->name }}
                        </h2>
                        <div class="description">
                            {!! htmlspecialchars_decode($event->description) !!}
                        </div>
                        <div class="button_contact">
                            <p>
                                Si tienes alguna duda
                            </p>
                            <a href="https://api.whatsapp.com/send/?phone=51{{ $pagefield->whatsapp }}" target="_blank">
                                Consulte a nuestro WhatsApp
                            </a>
                        </div>
                    </div>
                    <div class="content_right">
                        <div class="slider-for-event-buy">
                            @foreach ($event->images as $item)
                            <div class="item">
                                <img src="{{ $item['image'] }}" alt="">
                            </div>
                            @endforeach
                        </div>
                        <div class="slider-nav-event-buy">
                            @foreach ($event->images as $item)
                            <div class="item">
                                <img src="{{ $item['image'] }}" alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec15">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="content">
                    <div class="item_a wow fadeIn" data-wow-delay="0.65s">
                        <div class="linecolor"></div>
                        <div class="line_a">
                            <a href="{{ $event->link }}" target="_blank">
                                Compra tu entrada aqu??
                            </a>
                        </div>
                        <div class="linecolor"></div>
                    </div>
                </div>
                <div class="image_map">
                    <img src="{{ $event->map }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec15 mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if ($related_products->count() >= 1)
                <h2 class="h2events h2events1 wow fadeIn" data-wow-delay="0.6s">
                    Descubre m??s eventos disponibles
                </h2>
                <div class="carousel-eventos-page eventspage1 wow fadeIn" data-wow-delay="0.6s">
                    @foreach ($related_products as $item)
                    <div class="item">
                        <img src="{{ $item->image1 }}" alt="">
                        <a href="{{ route('event', [$item->slug, $item->id]) }}" class="comprar comprar1">
                            Compra tu entrada aqu??
                        </a>
                    </div>
                    @endforeach
                </div>
                @endif
                <div class="back wow fadeIn" data-wow-delay="0.6s">
                    <a href="{{ route('events') }}" class="">
                        <img src="{{ asset('images/arrow_back.png') }}" alt="">
                        Regresar a Eventos
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection