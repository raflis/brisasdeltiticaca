@extends('web.layout')

@section('content')

<section class="sec14">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="items">
                    <div class="item1" style="background-image:url('{{ $event->banner1 }}')">
                        <p class="wow fadeIn" data-wow-delay="0.5s">
                            Eventos
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
            <div class="col-md-10">
                <div class="map">
                    <h2>
                        Escoja su(s) asiento(s)
                    </h2>
                    <p>
                        Este plano es referencial para que pueda identificar los precios y las ubicaciones. Para poder hacer la compra, seleccione qué asientos desea reservar.
                    </p>
                </div>
                @php $pending = [] @endphp
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        @php array_push($pending, $id) @endphp
                    @endforeach
                @endif
                <div class="stages">
                    <div class="zone">
                        <div class="zone_row">
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone1->color }} ,.4);">
                                <span>Mesa 16</span>
                                @php $seat_16_1 = [7, 8, 5, 6, 3, 4, 1, 2] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_16_1 = $event->id.'.16.'.$seat_16_1[$i].'.'.$zone1->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 16<br><b>Asiento: </b> {{ $seat_16_1[$i] }}"><div class="circle @if (in_array($code_16_1, $pending) == 1) pending @endif" zone="{{ $zone1->name }}" price="{{ $zone1->price }}" code="{{ $code_16_1 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc5" id="" table-number=16 style="background: rgba({{ $zone1->color }} ,.4);">
                                <span>Mesa 10</span>
                                @php $seat_10_1 = [9, 10, 7, 8, 5, 6, 3, 4, 1, 2] @endphp
                                @for ($i = 0; $i < 10; $i++)
                                @php $code_10_1 = $event->id.'.10.'.$seat_10_1[$i].'.'.$zone1->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 10<br><b>Asiento: </b> {{ $seat_10_1[$i] }}"><div class="circle @if (in_array($code_10_1, $pending) == 1) pending @endif" zone="{{ $zone1->name }}" price="{{ $zone1->price }}" code="{{ $code_10_1 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone1->color }} ,.4);">
                                <span>Mesa 5</span>
                                @php $seat_5_1 = [7, 8, 5, 6, 3, 4, 1, 2] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_5_1 = $event->id.'.5.'.$seat_5_1[$i].'.'.$zone1->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 5<br><b>Asiento: </b> {{ $seat_5_1[$i] }}"><div class="circle @if (in_array($code_5_1, $pending) == 1) pending @endif" zone="{{ $zone1->name }}" price="{{ $zone1->price }}" code="{{ $code_5_1 }}"></div></li>
                                @endfor
                            </ul>
                        </div>
                        <div class="zone_row">
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone1->color }} ,.4);">
                                <span>Mesa 15</span>
                                @php $seat_15_1 = [7, 8, 5, 6, 3, 4, 1, 2] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_15_1 = $event->id.'.15.'.$seat_15_1[$i].'.'.$zone1->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 15<br><b>Asiento: </b> {{ $seat_15_1[$i] }}"><div class="circle @if (in_array($code_15_1, $pending) == 1) pending @endif" zone="{{ $zone1->name }}" price="{{ $zone1->price }}" code="{{ $code_15_1 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc5" id="" table-number=16 style="background: rgba({{ $zone1->color }} ,.4);">
                                <span>Mesa 9</span>
                                @php $seat_9_1 = [9, 10, 7, 8, 5, 6, 3, 4, 1, 2] @endphp
                                @for ($i = 0; $i < 10; $i++)
                                @php $code_9_1 = $event->id.'.9.'.$seat_9_1[$i].'.'.$zone1->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 9<br><b>Asiento: </b> {{ $seat_9_1[$i] }}"><div class="circle @if (in_array($code_9_1, $pending) == 1) pending @endif" zone="{{ $zone1->name }}" price="{{ $zone1->price }}" code="{{ $code_9_1 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone1->color }} ,.4);">
                                <span>Mesa 4</span>
                                @php $seat_4_1 = [7, 8, 5, 6, 3, 4, 1, 2] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_4_1 = $event->id.'.4.'.$seat_4_1[$i].'.'.$zone1->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 4<br><b>Asiento: </b> {{ $seat_4_1[$i] }}"><div class="circle @if (in_array($code_4_1, $pending) == 1) pending @endif" zone="{{ $zone1->name }}" price="{{ $zone1->price }}" code="{{ $code_4_1 }}"></div></li>
                                @endfor
                            </ul>
                        </div>
                        <div class="zone_row">
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone1->color }} ,.4);">
                                <span>Mesa 14</span>
                                @php $seat_14_1 = [7, 8, 5, 6, 3, 4, 1, 2] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_14_1 = $event->id.'.14.'.$seat_14_1[$i].'.'.$zone1->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 14<br><b>Asiento: </b> {{ $seat_14_1[$i] }}"><div class="circle @if (in_array($code_14_1, $pending) == 1) pending @endif" zone="{{ $zone1->name }}" price="{{ $zone1->price }}" code="{{ $code_14_1 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc5" id="" table-number=16 style="background: rgba({{ $zone1->color }} ,.4);">
                                <span>Mesa 8</span>
                                @php $seat_8_1 = [9, 10, 7, 8, 5, 6, 3, 4, 1, 2] @endphp
                                @for ($i = 0; $i < 10; $i++)
                                @php $code_8_1 = $event->id.'.8.'.$seat_8_1[$i].'.'.$zone1->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 8<br><b>Asiento: </b> {{ $seat_8_1[$i] }}"><div class="circle @if (in_array($code_8_1, $pending) == 1) pending @endif" zone="{{ $zone1->name }}" price="{{ $zone1->price }}" code="{{ $code_8_1 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone1->color }} ,.4);">
                                <span>Mesa 3</span>
                                @php $seat_3_1 = [7, 8, 5, 6, 3, 4, 1, 2] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_3_1 = $event->id.'.3.'.$seat_3_1[$i].'.'.$zone1->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 3<br><b>Asiento: </b> {{ $seat_3_1[$i] }}"><div class="circle @if (in_array($code_3_1, $pending) == 1) pending @endif" zone="{{ $zone1->name }}" price="{{ $zone1->price }}" code="{{ $code_3_1 }}"></div></li>
                                @endfor
                            </ul>
                        </div>
                        <div class="zone_row">
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone1->color }} ,.4);">
                                <span>Mesa 13</span>
                                @php $seat_13_1 = [7, 8, 5, 6, 3, 4, 1, 2] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_13_1 = $event->id.'.13.'.$seat_13_1[$i].'.'.$zone1->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 13<br><b>Asiento: </b> {{ $seat_13_1[$i] }}"><div class="circle @if (in_array($code_13_1, $pending) == 1) pending @endif" zone="{{ $zone1->name }}" price="{{ $zone1->price }}" code="{{ $code_13_1 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc5" id="" table-number=16 style="background: rgba({{ $zone1->color }} ,.4);">
                                <span>Mesa 7</span>
                                @php $seat_7_1 = [9, 10, 7, 8, 5, 6, 3, 4, 1, 2] @endphp
                                @for ($i = 0; $i < 10; $i++)
                                @php $code_7_1 = $event->id.'.7.'.$seat_7_1[$i].'.'.$zone1->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 7<br><b>Asiento: </b> {{ $seat_7_1[$i] }}"><div class="circle @if (in_array($code_7_1, $pending) == 1) pending @endif" zone="{{ $zone1->name }}" price="{{ $zone1->price }}" code="{{ $code_7_1 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone1->color }} ,.4);">
                                <span>Mesa 2</span>
                                @php $seat_2_1 = [7, 8, 5, 6, 3, 4, 1, 2] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_2_1 = $event->id.'.2.'.$seat_2_1[$i].'.'.$zone1->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 2<br><b>Asiento: </b> {{ $seat_2_1[$i] }}"><div class="circle @if (in_array($code_2_1, $pending) == 1) pending @endif" zone="{{ $zone1->name }}" price="{{ $zone1->price }}" code="{{ $code_2_1 }}"></div></li>
                                @endfor
                            </ul>
                        </div>
                        <div class="zone_row">
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone1->color }} ,.4);">
                                <span>Mesa 12</span>
                                @php $seat_12_1 = [7, 8, 5, 6, 3, 4, 1, 2] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_12_1 = $event->id.'.12.'.$seat_12_1[$i].'.'.$zone1->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 12<br><b>Asiento: </b> {{ $seat_12_1[$i] }}"><div class="circle @if (in_array($code_12_1, $pending) == 1) pending @endif" zone="{{ $zone1->name }}" price="{{ $zone1->price }}" code="{{ $code_12_1 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc5" id="" table-number=16 style="background: rgba({{ $zone1->color }} ,.4);">
                                <span>Mesa 6</span>
                                @php $seat_6_1 = [9, 10, 7, 8, 5, 6, 3, 4, 1, 2] @endphp
                                @for ($i = 0; $i < 10; $i++)
                                @php $code_6_1 = $event->id.'.6.'.$seat_6_1[$i].'.'.$zone1->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 6<br><b>Asiento: </b> {{ $seat_6_1[$i] }}"><div class="circle @if (in_array($code_6_1, $pending) == 1) pending @endif" zone="{{ $zone1->name }}" price="{{ $zone1->price }}" code="{{ $code_6_1 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone1->color }} ,.4);">
                                <span>Mesa 1</span>
                                @php $seat_1_1 = [7, 8, 5, 6, 3, 4, 1, 2] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_1_1 = $event->id.'.1.'.$seat_1_1[$i].'.'.$zone1->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 1<br><b>Asiento: </b> {{ $seat_1_1[$i] }}"><div class="circle @if (in_array($code_1_1, $pending) == 1) pending @endif" zone="{{ $zone1->name }}" price="{{ $zone1->price }}" code="{{ $code_1_1 }}"></div></li>
                                @endfor
                            </ul>
                        </div>
                        <div class="zone_row flex-wrap flex-column">
                            <div class="zone_detail">
                                <h4>
                                    Leyenda
                                </h4>
                            </div>
                            <div class="zone_detail" style="background-color: rgba({{ $zone1->color }}, .9)">
                                <p>
                                    Zona {{ $zone1->name }}
                                </p>
                                <p>
                                    S/ {{ $zone1->price }}
                                </p>
                            </div>
                            <div class="zone_detail" style="background-color: rgba({{ $zone2->color }}, .9)">
                                <p>
                                    Zona {{ $zone2->name }}
                                </p>
                                <p>
                                    S/ {{ $zone2->price }}
                                </p>
                            </div>
                            <div class="zone_detail" style="background-color: rgba({{ $zone3->color }}, .9)">
                                <p>
                                    Zona {{ $zone3->name }}
                                </p>
                                <p>
                                    S/ {{ $zone3->price }}
                                </p>
                            </div>
                            <div class="zone_detail" style="background-color: rgba(255, 193, 7, .3)">
                                <p>
                                    Compra pendiente
                                </p>
                                <div class="circle_pending" style="background-color: rgba(255, 193, 7, 1)"></div>
                            </div>
                            <div class="zone_detail" style="background-color: rgba(244, 67, 54, .3)">
                                <p>
                                    Asiento no disponible
                                </p>
                                <div class="circle_pending" style="background-color: rgba(244, 67, 54, 1)"></div>
                            </div>
                        </div>
                    </div>
                    <div class="main">
                        <div class="stage"><p>Escenario</p></div>
                        <div class="dance_stage"><p>Pista de Baile</p></div>
                        <div class="zone flex-row">
                            <div class="zone_row">
                                <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                    <span>Mesa 1</span>
                                    @php $seat_1_3 = [1, 3, 5, 7, 2, 4, 6, 8] @endphp
                                    @for ($i = 0; $i < 8; $i++)
                                    @php $code_1_3 = $event->id.'.1.'.$seat_1_3[$i].'.'.$zone3->id @endphp
                                    <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 1<br><b>Asiento: </b> {{ $seat_1_3[$i] }}"><div class="circle @if (in_array($code_1_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_1_3 }}"></div></li>
                                    @endfor
                                </ul>
                                <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                    <span>Mesa 2</span>
                                    @php $seat_2_3 = [1, 3, 5, 7, 2, 4, 6, 8] @endphp
                                    @for ($i = 0; $i < 8; $i++)
                                    @php $code_2_3 = $event->id.'.2.'.$seat_2_3[$i].'.'.$zone3->id @endphp
                                    <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 2<br><b>Asiento: </b> {{ $seat_2_3[$i] }}"><div class="circle @if (in_array($code_2_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_2_3 }}"></div></li>
                                    @endfor
                                </ul>
                                <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                    <span>Mesa 3</span>
                                    @php $seat_3_3 = [1, 3, 5, 7, 2, 4, 6, 8] @endphp
                                    @for ($i = 0; $i < 8; $i++)
                                    @php $code_3_3 = $event->id.'.3.'.$seat_3_3[$i].'.'.$zone3->id @endphp
                                    <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 3<br><b>Asiento: </b> {{ $seat_3_3[$i] }}"><div class="circle @if (in_array($code_3_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_3_3 }}"></div></li>
                                    @endfor
                                </ul>
                                <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                    <span>Mesa 4</span>
                                    @php $seat_4_3 = [1, 3, 5, 7, 2, 4, 6, 8] @endphp
                                    @for ($i = 0; $i < 8; $i++)
                                    @php $code_4_3 = $event->id.'.4.'.$seat_4_3[$i].'.'.$zone3->id @endphp
                                    <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 4<br><b>Asiento: </b> {{ $seat_4_3[$i] }}"><div class="circle @if (in_array($code_4_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_4_3 }}"></div></li>
                                    @endfor
                                </ul>
                                <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                    <span>Mesa 5</span>
                                    @php $seat_5_3 = [1, 3, 5, 7, 2, 4, 6, 8] @endphp
                                    @for ($i = 0; $i < 8; $i++)
                                    @php $code_5_3 = $event->id.'.5.'.$seat_5_3[$i].'.'.$zone3->id @endphp
                                    <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 5<br><b>Asiento: </b> {{ $seat_5_3[$i] }}"><div class="circle @if (in_array($code_5_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_5_3 }}"></div></li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="zone_row align-items-start" style="margin-top:44px">
                                <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                    <span>Mesa 9</span>
                                    @php $seat_9_3 = [1, 3, 5, 7, 9, 2, 4, 6, 8, 10] @endphp
                                    @for ($i = 0; $i < 10; $i++)
                                    @php $code_9_3 = $event->id.'.9.'.$seat_9_3[$i].'.'.$zone3->id @endphp
                                    <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 9<br><b>Asiento: </b> {{ $seat_9_3[$i] }}"><div class="circle @if (in_array($code_9_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_9_3 }}"></div></li>
                                    @endfor
                                </ul>
                                <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                    <span>Mesa 10</span>
                                    @php $seat_10_3 = [1, 3, 5, 7, 9, 2, 4, 6, 8, 10] @endphp
                                    @for ($i = 0; $i < 10; $i++)
                                    @php $code_10_3 = $event->id.'.10.'.$seat_10_3[$i].'.'.$zone3->id @endphp
                                    <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 10<br><b>Asiento: </b> {{ $seat_10_3[$i] }}"><div class="circle @if (in_array($code_10_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_10_3 }}"></div></li>
                                    @endfor
                                </ul>
                                <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                    <span>Mesa 11</span>
                                    @php $seat_11_3 = [1, 3, 5, 7, 9, 2, 4, 6, 8, 10] @endphp
                                    @for ($i = 0; $i < 9; $i++)
                                    @php $code_11_3 = $event->id.'.11.'.$seat_11_3[$i].'.'.$zone3->id @endphp
                                    <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 11<br><b>Asiento: </b> {{ $seat_11_3[$i] }}"><div class="circle @if (in_array($code_11_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_11_3 }}"></div></li>
                                    @endfor
                                    <li class="seat"><div class="circle d-none"></div></li>
                                </ul>
                                <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                    <span>Mesa 12</span>
                                    @php $seat_12_3 = [1, 3, 5, 7, 9, 2, 4, 6, 8, 10] @endphp
                                    @for ($i = 0; $i < 10; $i++)
                                    @php $code_12_3 = $event->id.'.12.'.$seat_12_3[$i].'.'.$zone3->id @endphp
                                    <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 12<br><b>Asiento: </b> {{ $seat_12_3[$i] }}"><div class="circle @if (in_array($code_12_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_12_3 }}"></div></li>
                                    @endfor
                                </ul>
                                <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                    <span>Mesa 13</span>
                                    @php $seat_13_3 = [1, 3, 5, 7, 2, 4, 6, 8] @endphp
                                    @for ($i = 0; $i < 8; $i++)
                                    @php $code_13_3 = $event->id.'.13.'.$seat_13_3[$i].'.'.$zone3->id @endphp
                                    <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 13<br><b>Asiento: </b> {{ $seat_13_3[$i] }}"><div class="circle @if (in_array($code_13_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_13_3 }}"></div></li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="zone_row justify-content-between align-items-start" style="width: 100%">
                                <div class="d-flex">
                                    <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                        <span>Mesa 17</span>
                                        @php $seat_17_3 = [1, 3, 5, 7, 2, 4, 6, 8] @endphp
                                        @for ($i = 0; $i < 8; $i++)
                                        @php $code_17_3 = $event->id.'.17.'.$seat_17_3[$i].'.'.$zone3->id @endphp
                                        <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 17<br><b>Asiento: </b> {{ $seat_17_3[$i] }}"><div class="circle @if (in_array($code_17_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_17_3 }}"></div></li>
                                        @endfor
                                    </ul>
                                    <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                        <span>Mesa 18</span>
                                        @php $seat_18_3 = [1, 3, 5, 7, 2, 4, 6, 8] @endphp
                                        @for ($i = 0; $i < 8; $i++)
                                        @php $code_18_3 = $event->id.'.18.'.$seat_18_3[$i].'.'.$zone3->id @endphp
                                        <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 18<br><b>Asiento: </b> {{ $seat_18_3[$i] }}"><div class="circle @if (in_array($code_18_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_18_3 }}"></div></li>
                                        @endfor
                                    </ul>
                                    <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                        <span>Mesa 19</span>
                                        @php $seat_19_3 = [1, 3, 5, 7, 2, 4, 6, 8] @endphp
                                        @for ($i = 0; $i < 8; $i++)
                                        @php $code_19_3 = $event->id.'.19.'.$seat_19_3[$i].'.'.$zone3->id @endphp
                                        <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 19<br><b>Asiento: </b> {{ $seat_19_3[$i] }}"><div class="circle @if (in_array($code_19_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_19_3 }}"></div></li>
                                        @endfor
                                    </ul>
                                </div>
                                <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                    <span>Mesa 20</span>
                                    @php $seat_20_3 = [1, 3, 5, 7, 2, 4, 6, 8] @endphp
                                    @for ($i = 0; $i < 8; $i++)
                                    @php $code_20_3 = $event->id.'.20.'.$seat_20_3[$i].'.'.$zone3->id @endphp
                                    <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 20<br><b>Asiento: </b> {{ $seat_20_3[$i] }}"><div class="circle @if (in_array($code_20_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_20_3 }}"></div></li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="zone">
                        <div class="zone_row">
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 5</span>
                                @php $seat_5_2 = [1, 2, 3, 4, 5, 6, 7, 8] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_5_2 = $event->id.'.5.'.$seat_5_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 5<br><b>Asiento: </b> {{ $seat_5_2[$i] }}"><div class="circle @if (in_array($code_5_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_5_2 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc5" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 10</span>
                                @php $seat_10_2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10] @endphp
                                @for ($i = 0; $i < 10; $i++)
                                @php $code_10_2 = $event->id.'.10.'.$seat_10_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 10<br><b>Asiento: </b> {{ $seat_10_2[$i] }}"><div class="circle @if (in_array($code_10_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_10_2 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 18</span>
                                @php $seat_18_2 = [1, 2, 3, 4, 5, 6, 7, 8] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_18_2 = $event->id.'.18.'.$seat_18_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 18<br><b>Asiento: </b> {{ $seat_18_2[$i] }}"><div class="circle @if (in_array($code_18_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_18_2 }}"></div></li>
                                @endfor
                            </ul>
                        </div>
                        <div class="zone_row">
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 4</span>
                                @php $seat_4_2 = [1, 2, 3, 4, 5, 6, 7, 8] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_4_2 = $event->id.'.4.'.$seat_4_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 4<br><b>Asiento: </b> {{ $seat_4_2[$i] }}"><div class="circle @if (in_array($code_4_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_4_2 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc5" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 9</span>
                                @php $seat_9_2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10] @endphp
                                @for ($i = 0; $i < 10; $i++)
                                @php $code_9_2 = $event->id.'.9.'.$seat_9_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 9<br><b>Asiento: </b> {{ $seat_9_2[$i] }}"><div class="circle @if (in_array($code_9_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_9_2 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 17</span>
                                @php $seat_17_2 = [1, 2, 3, 4, 5, 6, 7, 8] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_17_2 = $event->id.'.17.'.$seat_17_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 17<br><b>Asiento: </b> {{ $seat_17_2[$i] }}"><div class="circle @if (in_array($code_17_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_17_2 }}"></div></li>
                                @endfor
                            </ul>
                        </div>
                        <div class="zone_row">
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 3</span>
                                @php $seat_3_2 = [1, 2, 3, 4, 5, 6, 7, 8] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_3_2 = $event->id.'.3.'.$seat_3_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 3<br><b>Asiento: </b> {{ $seat_3_2[$i] }}"><div class="circle @if (in_array($code_3_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_3_2 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc5" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 8</span>
                                @php $seat_8_2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10] @endphp
                                @for ($i = 0; $i < 10; $i++)
                                @php $code_8_2 = $event->id.'.8.'.$seat_8_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 8<br><b>Asiento: </b> {{ $seat_8_2[$i] }}"><div class="circle @if (in_array($code_8_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_8_2 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 16</span>
                                @php $seat_16_2 = [1, 2, 3, 4, 5, 6, 7, 8] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_16_2 = $event->id.'.16.'.$seat_16_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 16<br><b>Asiento: </b> {{ $seat_16_2[$i] }}"><div class="circle @if (in_array($code_16_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_16_2 }}"></div></li>
                                @endfor
                            </ul>
                        </div>
                        <div class="zone_row">
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 2</span>
                                @php $seat_2_2 = [1, 2, 3, 4, 5, 6, 7, 8] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_2_2 = $event->id.'.2.'.$seat_2_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 2<br><b>Asiento: </b> {{ $seat_2_2[$i] }}"><div class="circle @if (in_array($code_2_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_2_2 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc5" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 7</span>
                                @php $seat_7_2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10] @endphp
                                @for ($i = 0; $i < 10; $i++)
                                @php $code_7_2 = $event->id.'.7.'.$seat_7_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 7<br><b>Asiento: </b> {{ $seat_7_2[$i] }}"><div class="circle @if (in_array($code_7_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_7_2 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 15</span>
                                @php $seat_15_2 = [1, 2, 3, 4, 5, 6, 7, 8] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_15_2 = $event->id.'.15.'.$seat_15_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 15<br><b>Asiento: </b> {{ $seat_15_2[$i] }}"><div class="circle @if (in_array($code_15_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_15_2 }}"></div></li>
                                @endfor
                            </ul>
                        </div>
                        <div class="zone_row">
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 1</span>
                                @php $seat_1_2 = [1, 2, 3, 4, 5, 6, 7, 8] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_1_2 = $event->id.'.1.'.$seat_1_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 1<br><b>Asiento: </b> {{ $seat_1_2[$i] }}"><div class="circle @if (in_array($code_1_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_1_2 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc5" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 6</span>
                                @php $seat_6_2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10] @endphp
                                @for ($i = 0; $i < 10; $i++)
                                @php $code_6_2 = $event->id.'.6.'.$seat_6_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 6<br><b>Asiento: </b> {{ $seat_6_2[$i] }}"><div class="circle @if (in_array($code_6_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_6_2 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc4" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 14</span>
                                @php $seat_14_2 = [1, 2, 3, 4, 5, 6, 7, 8] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_14_2 = $event->id.'.14.'.$seat_14_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 14<br><b>Asiento: </b> {{ $seat_14_2[$i] }}"><div class="circle @if (in_array($code_14_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_14_2 }}"></div></li>
                                @endfor
                            </ul>
                        </div>
                        <div class="zone_row justify-content-between align-items-end" style="margin-left:10px">
                            <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                <span>Mesa 6</span>
                                @php $seat_6_3 = [1, 3, 5, 7, 2, 4, 6, 8] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_6_3 = $event->id.'.6.'.$seat_6_3[$i].'.'.$zone3->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 6<br><b>Asiento: </b> {{ $seat_6_3[$i] }}"><div class="circle @if (in_array($code_6_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_6_3 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc3" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 13</span>
                                @php $seat_13_2 = [1, 2, 3, 4, 5, 6] @endphp
                                @for ($i = 0; $i < 6; $i++)
                                @php $code_13_2 = $event->id.'.13.'.$seat_13_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 13<br><b>Asiento: </b> {{ $seat_13_2[$i] }}"><div class="circle @if (in_array($code_13_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_13_2 }}"></div></li>
                                @endfor
                            </ul>
                        </div>
                        <div class="zone_row justify-content-end m-0">
                            <ul class="table_zone cc3" id="" table-number=16 style="background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 12</span>
                                @php $seat_12_2 = [1, 2, 3, 4, 5, 6] @endphp
                                @for ($i = 0; $i < 6; $i++)
                                @php $code_12_2 = $event->id.'.12.'.$seat_12_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 12<br><b>Asiento: </b> {{ $seat_12_2[$i] }}"><div class="circle @if (in_array($code_12_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_12_2 }}"></div></li>
                                @endfor
                            </ul>
                        </div>
                        <div class="zone_row justify-content-between align-items-start" style="margin-left:10px">
                            <div class="d-flex">
                                <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                    <span>Mesa 14</span>
                                    @php $seat_14_3 = [1, 3, 5, 7, 9, 2, 4, 6, 8, 10] @endphp
                                    @for ($i = 0; $i < 10; $i++)
                                    @php $code_14_3 = $event->id.'.14.'.$seat_14_3[$i].'.'.$zone3->id @endphp
                                    <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 14<br><b>Asiento: </b> {{ $seat_14_3[$i] }}"><div class="circle @if (in_array($code_14_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_14_3 }}"></div></li>
                                    @endfor
                                </ul>
                                <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                    <span>Mesa 15</span>
                                    @php $seat_15_3_1 = [1, 3, 5, 7] @endphp
                                    @for ($i = 0; $i < 4; $i++)
                                    @php $code_15_3_1 = $event->id.'.15.'.$seat_15_3_1[$i].'.'.$zone3->id @endphp
                                    <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 15<br><b>Asiento: </b> {{ $seat_15_3_1[$i] }}"><div class="circle @if (in_array($code_15_3_1, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_15_3_1 }}"></div></li>
                                    @endfor
                                    <li class="seat"><div class="circle d-none"></div></li>
                                    @php $seat_15_3_2 = [2, 4, 6, 8, 9] @endphp
                                    @for ($i = 0; $i < 5; $i++)
                                    @php $code_15_3_2 = $event->id.'.15.'.$seat_15_3_2[$i].'.'.$zone3->id @endphp
                                    <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 15<br><b>Asiento: </b> {{ $seat_15_3_2[$i] }}"><div class="circle @if (in_array($code_15_3_2, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_15_3_2 }}"></div></li>
                                    @endfor
                                </ul>
                                <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                    <span>Mesa 16</span>
                                    @php $seat_16_3 = [1, 3, 5, 7, 9, 2, 4, 6, 8, 10] @endphp
                                    @for ($i = 0; $i < 10; $i++)
                                    @php $code_16_3 = $event->id.'.16.'.$seat_16_3[$i].'.'.$zone3->id @endphp
                                    <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 16<br><b>Asiento: </b> {{ $seat_16_3[$i] }}"><div class="circle @if (in_array($code_16_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_16_3 }}"></div></li>
                                    @endfor
                                </ul>
                            </div>
                            <ul class="table_zone cc3" id="" table-number=16 style="margin-top:20px; background: rgba({{ $zone2->color }} ,.4);">
                                <span>Mesa 11</span>
                                @php $seat_11_2 = [1, 2, 3, 4, 5, 6] @endphp
                                @for ($i = 0; $i < 6; $i++)
                                @php $code_11_2 = $event->id.'.11.'.$seat_11_2[$i].'.'.$zone2->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 11<br><b>Asiento: </b> {{ $seat_11_2[$i] }}"><div class="circle @if (in_array($code_11_2, $pending) == 1) pending @endif" zone="{{ $zone2->name }}" price="{{ $zone2->price }}" code="{{ $code_11_2 }}"></div></li>
                                @endfor
                            </ul>
                        </div>
                        <div class="zone_row" style="margin-left:10px">
                            <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                <span>Mesa 21</span>
                                @php $seat_21_3 = [1, 3, 5, 7, 2, 4, 6, 8] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_21_3 = $event->id.'.21.'.$seat_21_3[$i].'.'.$zone3->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 21<br><b>Asiento: </b> {{ $seat_21_3[$i] }}"><div class="circle @if (in_array($code_21_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_21_3 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                <span>Mesa 22</span>
                                @php $seat_22_3 = [1, 3, 5, 7, 2, 4, 6, 8] @endphp
                                @for ($i = 0; $i < 8; $i++)
                                @php $code_22_3 = $event->id.'.22.'.$seat_22_3[$i].'.'.$zone3->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 22<br><b>Asiento: </b> {{ $seat_22_3[$i] }}"><div class="circle @if (in_array($code_22_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_22_3 }}"></div></li>
                                @endfor
                            </ul>
                            <ul class="table_zone cc2" id="" table-number=16 style="background: rgba({{ $zone3->color }} ,.4);">
                                <span>Mesa 23</span>
                                @php $seat_23_3 = [1, 3, 5, 6, 2, 4] @endphp
                                @for ($i = 0; $i < 6; $i++)
                                @php $code_23_3 = $event->id.'.23.'.$seat_23_3[$i].'.'.$zone3->id @endphp
                                <li class="seat" data-bs-toggle="tooltip" data-bs-html="true" title="<b>Mesa: </b> 23<br><b>Asiento: </b> {{ $seat_23_3[$i] }}"><div class="circle @if (in_array($code_23_3, $pending) == 1) pending @endif" zone="{{ $zone3->name }}" price="{{ $zone3->price }}" code="{{ $code_23_3 }}"></div></li>
                                @endfor
                                <li class="seat"><div class="circle d-none"></div></li>
                                <li class="seat"><div class="circle d-none"></div></li>
                            </ul>
                        </div>
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

<div class="modal fade show" id="buyTicket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="close_button">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="content">
                    <div class="content_header">
                        <div class="title">
                            <h2>Zona</h2>
                            <p id="zone">Nombre</p>
                        </div>
                        <div class="title">
                            <h2>Mesa N°</h2>
                            <p id="table">3</p>
                        </div>
                        <div class="title">
                            <h2>Asiento #</h2>
                            <p id="seat">8</p>
                        </div>
                    </div>
                    <div class="content_body">
                        <button class="btn-buy" code="dennis">
                            Comprar S/ <span id="price">45.00</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection