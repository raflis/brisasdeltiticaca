@extends('web.layout')

@section('content')

<section class="sec23">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="items">
                    <div class="item1">
                        <p class="wow fadeIn" data-wow-delay="0.5s">
                            Noticias
                        </p>
                        <h1 class="wow fadeIn" data-wow-delay="0.6s">
                            BLOG
                        </h1>
                    </div>
                    <div class="item2">
                        <h2 class="wow fadeIn" data-wow-delay="0.7s">
                            {{ $post->name }}
                        </h2>
                    </div>
                    <div class="item3 wow fadeIn" style="background-image: url('{{ $post->image_post }}')";>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec24">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="description">
                    {!! htmlspecialchars_decode($post->body) !!}
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
                    VISITA MÁS PUBLICACIONES
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