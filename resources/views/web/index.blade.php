@extends('web.layout')

@section('content')

<section class="sec1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="carousel-slider">
                    @foreach ($sliders as $item)
                    <div class="item" style="background-image: url('{{ $item->image_desktop }}')">
                        <div class="text">
                            @if ($item->title1)
                            <p>
                                {{ $item->title1 }}
                            </p>
                            @endif
                            @if ($item->title2)
                            <p>
                                {{ $item->title2 }}
                            </p>
                            @endif
                            @if ($item->button_name && $item->button_link)
                            <a href="{{ $item->button_link }}">
                                {{ $item->button_name }}
                            </a>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@if($events->count() >= 1)
<section class="sec2">
    <div class="title wow fadeInLeft">
        <h2>
            EVENTOS
        </h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="carousel-eventos wow fadeIn" data-wow-delay="0.4s">
                    @foreach ($events as $item)
                    <div class="item">
                        <div class="image">
                            <img src="{{ $item->image2 }}" alt="">
                        </div>
                        <div class="text">
                            <div class="text_title">
                                <h3>
                                    {{ $item->name }}
                                </h3>
                                <a href="{{ route('event', [$item->slug, $item->id]) }}">
                                    Reservar ahora
                                </a>
                            </div>
                            <div class="text_description">
                                {!! htmlspecialchars_decode($item->description) !!}
                            </div>
                            {{-- <div class="text_buttons">
                                <a href="">
                                    Almuerzo Show
                                </a>
                                <a href="">
                                    Eventos especiales
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="c2c_a">
                    <a href="{{ route('events') }}">
                        Ver eventos
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<section class="sec3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="content">
                    <div class="content_left wow fadeIn" data-wow-delay="0.8s">
                        <div class="image">
                            <img src="{{ $pagefield->home_image }}" alt="">
                        </div>
                        <h2>
                            {{ $pagefield->home_title }}
                        </h2>
                        <p>
                            {{ $pagefield->home_text }}
                        </p>
                    </div>
                    <div class="content_right">
                        <p class="content_p wow fadeIn" data-wow-delay="0.5s">
                            {{ $pagefield->home_description }}
                        </p>
                        <div class="items">
                            @foreach ($pagefield->home_items as $item)
                            <div class="item wow fadeIn" data-wow-delay="0.{{ $loop->index + 5 }}s">
                                <div class="item_">
                                    <div class="item_image">
                                        <img src="{{ $item['image'] }}" alt="">
                                    </div>
                                    <div class="item_text">
                                        <p>
                                            {{ $item['name'] }}
                                        </p>
                                        <p>
                                            {{ $item['detail'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec4">
    <div class="title wow fadeInLeft">
        <h2>
            TESTIMONIOS
        </h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="carousel-testimonios wow fadeIn" data-wow-delay="0.5s">
                    @foreach ($testimonials as $item)
                    <div class="item">
                        <div class="item_user">
                            <div class="image">
                                <img src="{{ $item->image }}" alt="">
                            </div>
                            <div class="text">
                                <h3>{{ $item->name }}</h3>
                                <div class="stars">
                                @for ($i = 1; $i <= $item->stars; $i++)
                                    <i class="fa-solid fa-star"></i>
                                @endfor
                                </div>
                            </div>
                        </div>
                        <div class="item_text">
                            {!! htmlspecialchars_decode($item->comment) !!}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="content">
                    <div class="logo wow fadeIn" data-wow-delay="0.8s">
                        <img src="{{ asset('images/logo_talleres.png') }}" alt="">
                    </div>
                    <div class="content_top">
                        <div class="c2c wow fadeIn" data-wow-delay="0.5s">
                            <h3>
                                FORMACIÓN ARTÍSTICA
                            </h3>
                        </div>
                        <div class="text wow fadeIn" data-wow-delay="0.4s">
                            <h3>
                                Talleres de Danza
                            </h3>
                            <a href="">
                                Más información
                            </a>
                        </div>
                    </div>
                    <div class="content_bottom">
                        <div class="text wow fadeIn" data-wow-delay="0.6s">
                            <h3>
                                Talleres de Música
                            </h3>
                            <a href="">
                                Más información
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h2 class="tit wow fadeIn">
                    VISITA NUESTRO BLOG
                </h2>
                <div class="carousel-blog wow fadeIn" data-wow-delay="0.5s">
                    @foreach ($posts as $item)
                    <div class="item">
                        <div class="item_header">
                            <img src="{{ $item->image_blog }}" alt="">
                        </div>
                        <div class="item_content">
                            <div class="item_content_top">
                                <h2>
                                    {{ $item->name }}
                                </h2>
                                <div class="description">
                                    <p>
                                        {{ Str::limit($item->summary, 160) }}
                                    </p>
                                </div>
                            </div>
                            <div class="item_content_bottom">
                                <a href="{{ route('post', [$item->slug, $item->id]) }}">
                                    Leer más
                                </a>
                                <p>
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection