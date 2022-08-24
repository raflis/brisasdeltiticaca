@extends('web.layout')

@section('content')

<section class="sec29">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="items">
                    <div class="item1"></div>
                    <div class="item2">
                        <p>
                            RESUMEN DEL PEDIDO
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec65">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-5 cart-right">
                <div class="content">
                    <div class="details">
                        <p class="p1">Datos de facturación</p>
                        <p>
                            Nombre completo: <span>{{ $data->name }} {{ $data->lastname }}</span>
                        </p>
                        <p>
                            Documento: <span>{{ $data->document }}</span>
                        </p>
                        <p>
                            Dirección: <span>{{ $data->address }}</span>
                        </p>
                        <p>
                            Teléfono: <span>{{ $data->telephone }}</span>
                        </p>
                        <p>
                            Email: <span>{{ $data->email }}</span>
                        </p>
                    </div>
                    <div class="items">
                        @if (count($cart) >= 1)
                            @if(session('cart'))
                                @foreach($cart as $id => $details)
                                <div class="item">
                                    <div class="detail-left">
                                        <div class="image">
                                            <img src="{{ $details['image'] }}" alt="">
                                        </div>
                                        <div class="name">
                                            <h3>
                                                {{ $details['name'] }}
                                            </h3>
                                            <p>
                                                Categoría: {{ $details['category'] }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="detail-right">
                                        <div class="price">
                                            <div class="price-now">
                                                S/ {{ $details['price'] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        @endif
                    </div>
                    <div class="total">
                        <div class="price">
                            <div class="price-left">
                                <p class="p_total">Total</p>
                            </div>
                            <div class="price-right">
                                S/ {{ $total_price }}
                            </div>
                        </div>
                        @if(session('cart'))
                        <div class="text-center mt-4">
                            <!-- payment form -->
                            <div class="kr-embedded"  kr-popin kr-form-token="{{ $token }}">
                                <!-- payment form fields -->
                                {{ csrf_field() }}
                                <div class="kr-pan"></div>
                                <div class="kr-expiry"></div>
                                <div class="kr-security-code"></div>
                                <!-- payment form submit button -->
                                <button class="kr-payment-button"></button>
                                <!-- error zone -->
                                <div class="kr-form-error"></div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="back text-center">
                <a href="{{ route('checkout.cart') }}">
                    <i class="fa-solid fa-chevron-left"></i> Regresar
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('css')

<script 
   src="{{ $credentials['endpoint'] }}/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js" 
   kr-public-key="{{ $credentials['publicKey'] }}" 
   kr-post-url-success="{{ route('checkout.confirmation') }}">
</script>
<link rel="stylesheet" href="{{ $credentials['endpoint'] }}/static/js/krypton-client/V4.0/ext/classic-reset.css">
<script src="{{ $credentials['endpoint'] }}/static/js/krypton-client/V4.0/ext/classic.js"></script>

@endsection