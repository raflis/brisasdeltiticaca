@extends('web.layout')

@section('content')

<section class="sec7" style="background-image: url('{{ $pagefield->aboutus_background }}')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="wow fadeIn" data-wow-delay="0.5s">
                    {{ $pagefield->aboutus_title1 }}
                </p>
                <h1 class="wow fadeIn" data-wow-delay="0.6s">
                    {{ $pagefield->aboutus_title2 }}
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="sec8">
    <div class="title wow fadeInLeft" data-wow-delay="0.6s">
        <h2>
            {{ $pagefield->aboutus_title3 }}
        </h2>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text wow fadeIn" data-wow-delay="0.7s">
                    {!! htmlspecialchars_decode($pagefield->aboutus_text) !!}
                </div>
            </div>
            <div class="col-md-12 px-0">
                <div class="carousel-nosotros wow fadeIn" data-wow-delay="0.8s">
                    @foreach ($pagefield->aboutus_images as $item)
                    <div class="item">
                        <img src="{{ $item['image'] }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec9">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="wow fadeIn" data-wow-delay="0.5s">
                    {{ $pagefield->history_title }}
                </h2>
                <div class="text wow fadeIn" data-wow-delay="0.6s">
                    {!! htmlspecialchars_decode($pagefield->history_text) !!}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec10">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="items">
                    <div class="item wow fadeIn" data-wow-delay="0.6s">
                        <h4>
                            Misión
                        </h4>
                        {!! htmlspecialchars_decode($pagefield->aboutus_mission) !!}
                    </div>
                    <div class="item wow fadeIn" data-wow-delay="0.7s">
                        <h4>
                            Visión
                        </h4>
                        {!! htmlspecialchars_decode($pagefield->aboutus_vision) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec11">
    <div class="title wow fadeInLeft">
        <h2>
            CONSEJO DIRECTIVO
        </h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="carousel-consejo-directivo wow fadeIn" data-wow-delay="0.6s">
                    @foreach ($board_directors as $item)
                    <div class="item">
                        <div class="item_card">
                            <div class="image">
                                <img src="{{ $item->image_mini }}" alt="">
                            </div>
                            <div class="text">
                                <h4>
                                    {{ $item->name }}
                                </h4>
                                <p>
                                    {{ $item->position }}
                                </p>
                            </div>
                        </div>
                        <div class="item_person">
                            <img src="{{ $item->image }}" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection