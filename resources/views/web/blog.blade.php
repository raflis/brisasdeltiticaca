@extends('web.layout')

@section('content')

<section class="sec7" style="background-image: url('{{ $pagefield->blog_image }}')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="wow fadeIn" data-wow-delay="0.5s">
                    {{ $pagefield->blog_title1 }}
                </p>
                <h1 class="wow fadeIn" data-wow-delay="0.6s">
                    {{ $pagefield->blog_title2 }}
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="sec22">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text_">
                <div class="line wow fadeIn" data-wow-delay="1s"></div>
                <div class="text wow fadeIn" data-wow-delay="0.6s">
                    {!! htmlspecialchars_decode($pagefield->blog_text) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="items">
                    @foreach ($posts as $item)
                    <div class="item">
                        <div class="item_left">
                            <img src="{{ $item->image_blog }}" alt="">
                        </div>
                        <div class="item_right">
                            <div class="item_header">
                                <h3>
                                    {{ $item->name }}
                                </h3>
                                <div class="detail">
                                    <p>
                                        {{ Str::limit($item->summary, 190) }}
                                    </p>
                                </div>
                            </div>
                            <div class="item_footer">
                                <p>
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}
                                </p>
                                <a href="{{ route('post', [$item->slug, $item->id]) }}">
                                    Leer más
                                </a>
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