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
                            DETALLE DE FACTURACIÓN - CHECKOUT
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="cart">
                    <h1>
                        DATOS DE DESTINATARIO
                    </h1>
                    @include('web.partials.alert')
                    {!! Form::open(['route' => ['checkout.payment'], 'method' => 'POST', 'class' => 'needs-validation', 'novalidate']) !!}
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label for="" class="form-label">Nombres</label>
                            {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="" class="form-label">Apellidos</label>
                            {{ Form::text('lastname', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="" class="form-label">Documento</label>
                            {{ Form::text('document', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="" class="form-label">Celular</label>
                            {{ Form::text('telephone', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="" class="form-label">Email</label>
                            {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="" class="form-label">Dirección</label>
                            {{ Form::text('address', null, ['class' => 'form-control', 'required']) }}
                        </div>
                    </div>
                </div>
                <div class="cart">
                    <h1>
                        RESUMEN DE COMPRA
                    </h1>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table cart_table">
                                <thead>
                                    <tr>
                                        <th class="product">Taller</th>
                                        <th class="type">Categoria</th>
                                        <th class="date">Fecha del taller</th>
                                        <th class="price">Precio</th>
                                        <th class="actions"></th>
                                    </tr>
                                </thead>
                                @php $total = 0 @endphp
                                @if (count((array)session('cart')) >= 1)
                                <tbody>
                                    @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                        @php $total += $details['price'] @endphp
                                        <tr>
                                            <td>
                                                <div class="item_product">
                                                    <a href="{{ $details['url'] }}">
                                                        {{ $details['name'] }} 
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <p>
                                                    {{ $details['category'] }}
                                                </p>
                                            </td>
                                            <td>
                                                <p>{{ ucfirst(mb_strtolower(\Carbon\Carbon::parse($details['event_date'])->formatLocalized('%A, %d DE %B %Y'), 'UTF-8')) }}</p>
                                            </td>
                                            <td class="text-center">
                                                S/ {{ $details['price'] }}
                                            </td>
                                            <td>
                                                <a href="" class="delete" id="delete_product_cart" id_product="{{ $id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3">
                                            <p class="text-end m-0">
                                                Total a pagar :
                                            </p>
                                        </td>
                                        <td class="text-center">S/ {{ $total }}</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                                @endif
                            </table>
                        </div>
                        @if (count((array)session('cart')) >= 1)
                        <div class="mb-3">
                            <button type="submit" class="btn btn-submit">Finalizar compra</button>
                        </div>
                        @endif
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection