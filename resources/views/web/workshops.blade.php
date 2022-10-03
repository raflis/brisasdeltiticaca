@extends('web.layout')

@section('content')

<section class="sec7" style="background-image: url('{{ $pagefield->workshops_image }}')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="wow fadeIn" data-wow-delay="0.5s">
                    Por Puno, por la tradición y por el arte
                </p>
                <h1 class="wow fadeIn" data-wow-delay="0.6s">
                    TALLERES EDUCATIVOS
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="sec17">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text_">
                <div class="line wow fadeIn" data-wow-delay="1s"></div>
                <div class="text wow fadeIn" data-wow-delay="0.6s">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor risus, viverra molestie eget feugiat est. Accumsan, porta platea auctor laoreet vestibulum, ultricies nunc velit sapien. Laoreet aenean odio mi pellentesque egestas malesuada accumsan libero. Vel integer proin ultrices ultrices mattis vivamus. Tincidunt mauris, velit sollicitudin amet viverra nisl.
                        <br><br>
                        Pellentesque lorem nulla adipiscing velit egestas ipsum lacus odio. Amet mollis faucibus arcu id arcu etiam dis sapien. Aenean cursus turpis ligula in enim tortor faucibus. Facilisis tincidunt et volutpat pellentesque. Nec urna dui at egestas non risus, nulla risus, morbi. Leo nibh non mauris tempor, fusce sit mi. Arcu et eget curabitur semper. Tristique ipsum, sit viverra varius suspendisse et egestas.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="slider-for-talleres">
                    @foreach ($pagefield->workshops_images as $item)
                    <div class="item" style="background-image: url('{{ $item['image'] }}')">
                    </div> 
                    @endforeach
                </div>
                <div class="slider-nav-talleres">
                    @foreach ($pagefield->workshops_images as $item)
                    <div class="item" style="background-image: url('{{ $item['image'] }}')">
                    </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@foreach ($workshops as $item)
<section class="sec18">
    <div class="line"></div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="content">
                    <div class="image">
                        <img src="{{ $item->image }}" alt="">
                    </div>
                    <div class="content_text">
                        <div class="content_header wow fadeIn" data-wow-delay="0.5s">
                            <h2>
                                {{ $item->name }}
                            </h2>
                            <a @if ($item->button_link) href="{{ $item->button_link }}" target="_blank" @endif>
                                {{ $item->button_name }}
                            </a>
                        </div>
                        <div class="text wow fadeIn" data-wow-delay="0.6s">
                            {!! htmlspecialchars_decode($item->description) !!}
                        </div>
                        <div class="items_tab wow fadeIn" data-wow-delay="0.7s">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link navlink1 active" id="pillstab1_1_{{ $loop->index }}" data-bs-toggle="pill" data-bs-target="#pills1_1_{{ $loop->index }}" type="button" role="tab" aria-controls="pills1_1_{{ $loop->index }}" aria-selected="true">
                                        {{ $item->title1 }}
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pillstab1_2_{{ $loop->index }}" data-bs-toggle="pill" data-bs-target="#pills1_2_{{ $loop->index }}" type="button" role="tab" aria-controls="pills1_2_{{ $loop->index }}" aria-selected="true">
                                        {{ $item->title2 }}
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pillstab1_3_{{ $loop->index }}" data-bs-toggle="pill" data-bs-target="#pills1_3_{{ $loop->index }}" type="button" role="tab" aria-controls="pills1_3_{{ $loop->index }}" aria-selected="true">
                                        {{ $item->title3 }}
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills1_1_{{ $loop->index }}" role="tabpanel" aria-labelledby="pillstab1_1_{{ $loop->index }}">
                                    {!! htmlspecialchars_decode($item->description1) !!}
                                </div>
                                <div class="tab-pane fade" id="pills1_2_{{ $loop->index }}" role="tabpanel" aria-labelledby="pillstab1_2_{{ $loop->index }}">
                                    {!! htmlspecialchars_decode($item->description2) !!}
                                </div>
                                <div class="tab-pane fade" id="pills1_3_{{ $loop->index }}" role="tabpanel" aria-labelledby="pillstab1_3_{{ $loop->index }}">
                                    {!! htmlspecialchars_decode($item->description3) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 px-0">
                <div class="carousel-talleres wow fadeIn" data-wow-delay="0.6s">
                    @foreach ($item->images as $itemm)
                    <div class="item">
                        <img src="{{ $itemm['image'] }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
            @if(count($item->workshop_events) >= 1)
            <div class="col-md-10">
                <h2 class="h2events h2events1 wow fadeIn mt-4" data-wow-delay="0.5s">
                    Nuestros talleres disponibles
                </h2>
                <div class="carousel-eventos-page eventspage2 wow fadeIn" data-wow-delay="0.6s">
                    @foreach ($item->workshop_events as $item_)
                    <div class="item">
                        <img src="{{ $item_->image1 }}" alt="">
                        <a href="{{ route('workshop_event', [$item_->slug, $item_->id]) }}" class="comprar comprar1">
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
@endforeach

@endsection