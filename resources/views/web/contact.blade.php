@extends('web.layout')

@section('content')

<section class="sec7" style="background-image: url('{{ $pagefield->contact_image }}')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="wow fadeIn" data-wow-delay="0.5s">
                    {{ $pagefield->contact_title1 }}
                </p>
                <h1 class="wow fadeIn" data-wow-delay="0.6s">
                    {{ $pagefield->contact_title2 }}
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="sec20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="content">
                    <div class="map wow fadeIn" data-wow-delay="0.6s">
                        {!! $pagefield->contact_map !!}
                    </div>
                    <div class="detail">
                        <div class="contact_left wow fadeIn" data-wow-delay="0.6s">
                            <h3>
                                Información de Contacto
                            </h3>
                            <div class="items">
                                <div class="item">
                                    <img src="{{ asset('images/phone.png') }}" alt="">
                                    <p>
                                        {{ $pagefield->contact_telephone }}
                                    </p>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('images/mail.png') }}" alt="">
                                    <p>
                                        {{ $pagefield->contact_email }}
                                    </p>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('images/location.png') }}" alt="">
                                    <p>
                                        {{ $pagefield->contact_address }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="contact_right wow fadeIn" data-wow-delay="0.7s">
                            <h3>
                                Horario de Atención
                            </h3>
                            <div class="items">
                                <p>
                                    <strong>
                                        {{ $pagefield->contact_schedule1 }}
                                    </strong>
                                    <br>
                                    {{ $pagefield->contact_schedule1_time }}
                                </p>
                                <p>
                                    <strong>
                                        {{ $pagefield->contact_schedule2 }}
                                    </strong>
                                    <br>
                                    {{ $pagefield->contact_schedule2_time }}
                                </p>
                            </div>
                        </div>
                        <div class="formu wow fadeIn" data-wow-delay="0.4s">
                            <p>
                                Solicita más información, ¡Escríbenos!
                            </p>
                            <form action="" class="needs-validation" novalidate method="POST">
                                @csrf
                                <div class="form_left">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Ingrese nombres" required>
                                        <label for="floatingInput">Ingrese nombres</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Ingrese apellidos" required>
                                        <label for="floatingInput">Ingrese apellidos</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="Ingrese email" required>
                                        <label for="floatingInput">Ingrese email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Ingrese celular" required>
                                        <label for="floatingInput">Ingrese celular</label>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-select" required>
                                          <option value="">Interesad@ en:</option>
                                          <option value="1">One</option>
                                          <option value="2">Two</option>
                                          <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form_right">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="floatingTextarea" placeholder="Ingrese mensaje"></textarea>
                                        <label for="floatingTextarea">Ingrese mensaje</label>
                                    </div>
                                </div>
                                <div class="form_button">
                                    <button type="submit">
                                        Enviar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection