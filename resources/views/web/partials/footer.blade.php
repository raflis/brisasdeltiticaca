<div class="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 content">
                <div class="content_">
                    <div class="item1">
                        <img src="{{ asset('images/logo2.png') }}" alt="">
                        <p>
                            Copyright © 2022 Asociación Cultural Brisas del Titicaca
                        </p>
                    </div>
                    <div class="item2">
                        <ul class="ul1">
                            <li>
                                <a href="{{ route('aboutus') }}">
                                    Nosotros
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('aboutus') }}">
                                    Nuestra Instiución
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('aboutus') }}">
                                    Misión
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('aboutus') }}">
                                    Visión
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('aboutus') }}">
                                    Consejo Directivo
                                </a>
                            </li>
                        </ul>
                        <ul class="ul2">
                            <li>
                                <a href="">
                                    Elenco
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Elenco de Danzas
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Elenco de Asociados
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Coro Brisas del Titicaca
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Estudiantina
                                </a>
                            </li>
                        </ul>
                        <div class="subscribe">
                            <p>
                                Regístrate y recibe ofertas especiales
                            </p>
                            <form action="">
                                <input class="form-control" type="email" name="" id="" placeholder="Ingresa tu email">
                                <input type="submit" value="Suscríbete">
                            </form>
                        </div>
                    </div>
                    <div class="item3">
                        <div class="redes">
                            <a href="{{ $pagefield->facebook }}" target="_blank">
                                <img src="{{ asset('images/fb.png') }}" alt="">
                            </a>
                            <a href="{{ $pagefield->instagram }}" target="_blank">
                                <img src="{{ asset('images/ig.png') }}" alt="">
                            </a>
                            <a href="{{ $pagefield->twitter }}" target="_blank">
                                <img src="{{ asset('images/tw.png') }}" alt="">
                            </a>
                            <a href="https://api.whatsapp.com/send/?phone=51{{ $pagefield->whatsapp }}" target="_blank">
                                <img src="{{ asset('images/wp.png') }}" alt="">
                            </a>
                            <a href="{{ $pagefield->youtube }}" target="_blank">
                                <img src="{{ asset('images/yt.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a style="position:fixed;bottom:20px;right:20px;z-index:99;" href="https://api.whatsapp.com/send/?phone=51{{ $pagefield->whatsapp }}" target="_blank">
    <img src="{{ asset('images/whatsapp_flotante.png') }}" style="width: 48px;">
</a>