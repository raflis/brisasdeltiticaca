@extends('web.layout')

@section('content')

<section class="sec14">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="items">
                    <div class="item1" style="background-image:url('{{ $workshop_event->banner1 }}')">
                        <p class="wow fadeIn" data-wow-delay="0.5s">
                            {{ $workshop_event->workshop->name }}
                        </p>
                        <h1 class="wow fadeIn" data-wow-delay="0.6s">
                            {{ $workshop_event->name }}
                        </h1>
                        <h2 class="wow fadeIn" data-wow-delay="0.7s">
                            {{ mb_strtoupper(\Carbon\Carbon::parse($workshop_event->event_date)->formatLocalized('%A, %d DE %B %Y'), 'UTF-8') }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec18">
    <div class="line"></div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="content">
                    <div class="image">
                        <img src="{{ $workshop_event->workshop->image }}" alt="">
                    </div>
                    <div class="content_text">
                        <div class="content_header wow fadeIn" data-wow-delay="0.5s">
                            <h2>
                                {{ $workshop_event->workshop->name }}
                            </h2>
                            <a @if ($workshop_event->workshop->button_link) href="{{ $workshop_event->workshop->button_link }}" target="_blank" @endif>
                                {{ $workshop_event->workshop->button_name }}
                            </a>
                        </div>
                        <div class="text wow fadeIn" data-wow-delay="0.6s">
                            {!! htmlspecialchars_decode($workshop_event->workshop->description) !!}
                        </div>
                        <div class="items_tab wow fadeIn" data-wow-delay="0.7s">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link navlink1 active" id="pillstab1_1_1" data-bs-toggle="pill" data-bs-target="#pills1_1_1" type="button" role="tab" aria-controls="pills1_1_1" aria-selected="true">
                                        {{ $workshop_event->workshop->title1 }}
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pillstab1_2_1" data-bs-toggle="pill" data-bs-target="#pills1_2_1" type="button" role="tab" aria-controls="pills1_2_1" aria-selected="true">
                                        {{ $workshop_event->workshop->title2 }}
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pillstab1_3_1" data-bs-toggle="pill" data-bs-target="#pills1_3_1" type="button" role="tab" aria-controls="pills1_3_1" aria-selected="true">
                                        {{ $workshop_event->workshop->title3 }}
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills1_1_1" role="tabpanel" aria-labelledby="pillstab1_1_1">
                                    {!! htmlspecialchars_decode($workshop_event->workshop->description1) !!}
                                </div>
                                <div class="tab-pane fade" id="pills1_2_1" role="tabpanel" aria-labelledby="pillstab1_2_1">
                                    {!! htmlspecialchars_decode($workshop_event->workshop->description2) !!}
                                </div>
                                <div class="tab-pane fade" id="pills1_3_1" role="tabpanel" aria-labelledby="pillstab1_3_1">
                                    {!! htmlspecialchars_decode($workshop_event->workshop->description3) !!}
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
                            {{ $workshop_event->name }}
                        </h2>
                        <div class="description">
                            {!! htmlspecialchars_decode($workshop_event->description) !!}
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
                            @foreach ($workshop_event->images as $item)
                            <div class="item">
                                <img src="{{ $item['image'] }}" alt="">
                            </div>
                            @endforeach
                        </div>
                        <div class="slider-nav-event-buy">
                            @foreach ($workshop_event->images as $item)
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
                            <a href="" class="btn-add" id_product="{{ $workshop_event->id }}">
                                Agregar al carrito S/{{ number_format($workshop_event->price, 2) }}
                            </a>
                        </div>
                        <div class="linecolor"></div>
                    </div>
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
                    Descubre más eventos disponibles
                </h2>
                <div class="carousel-eventos-page eventspage1 wow fadeIn" data-wow-delay="0.6s">
                    @foreach ($related_products as $item)
                    <div class="item">
                        <img src="{{ $item->image1 }}" alt="">
                        <a href="{{ route('event', [$item->slug, $item->id]) }}" class="comprar comprar1">
                            Compra tu entrada aquí
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