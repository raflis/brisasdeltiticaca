<section id="header" class="{{ (in_array(Route::currentRouteName(), array('event', 'event_buy', 'post', 'workshop_event', 'login.create', 'profile.index', 'profile.workshops', 'profile.membership', 'checkout.cart', 'checkout.payment', 'checkout.confirmation')))?'oscuro':'' }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-5 col-md-4 left-menu">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid img-logo">
                </a>
            </div>
            <div class="col-7 col-md-8 right-menu">
                <ul>
                    @guest
                    <li>
                        <a href="" class="btn-socio" data-bs-toggle="modal" data-bs-target="#loginModal">Login Socio</a>
                    </li>
                    @endguest
                    <li>
                        <div class="cant" id="cant_header">
                        @if(session('cart'))
                            {{ count(session('cart')) }}
                        @else
                            0
                        @endif
                        </div>
                        <a href="" class="cart_a" id="{{ (preg_match("/checkout/", Route::currentRouteName()))?'':'cart_user' }}">
                            <img class="cart" src="{{ asset('images/cart.png') }}" alt="">
                        </a>
                    </li>
                    <li>
                        @guest
                        <a href="" class="user_a" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <div class="user">
                                <img src="{{ asset('images/user.png') }}" alt="">
                            </div>
                        </a>
                        @else
                        <a href="{{ route('profile.index') }}" class="user_a">
                            <div class="user">
                                <img src="{{ asset('images/user.png') }}" alt="">
                            </div>
                            <p>
                                @php
                                $name_user = explode(" ", Auth::user()->name);
                                $name_user = trim($name_user[0]);
                                @endphp
                                {{ ucwords($name_user) }}
                            </p>
                        </a>
                        @endguest
                    </li>
                    
                </ul>
                <div class="burger0 burgergg">
                    <div class="linea1"></div>
                    <div class="linea2"></div>
                    <div class="linea3"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="fondo"></div>
    <div class="nav-mobile">
        <div class="burger burgergg">
            <div class="linea1"></div>
            <div class="linea2"></div>
            <div class="linea3"></div>
        </div>
        <div class="lists">
            <ul>
                <li>
                    <a class="lnk-head-mobile {{ (Route::currentRouteName() == 'index')?'active':'' }}" href="{{ route('index') }}">Inicio</a>
                </li>
                <li>
                    <a class="lnk-head-mobile {{ (Route::currentRouteName() == 'aboutus')?'active':'' }}" href="{{ route('aboutus') }}">Nosotros</a>
                </li>
                <li>
                    <a class="lnk-head-mobile {{ (Route::currentRouteName() == 'events' || Route::currentRouteName() == 'event')?'active':'' }}" href="{{ route('events') }}">Conciertos</a>
                </li>
                <li>
                    <a class="lnk-head-mobile {{ (Route::currentRouteName() == 'workshops' || Route::currentRouteName() == 'workshop_event')?'active':'' }}" href="{{ route('workshops') }}">Talleres de danza</a>
                </li>
                <li>
                    <a class="lnk-head-mobile @if(preg_match("/blog|post/", Route::currentRouteName())) active @endif" href="{{ route('blog') }}">Blog y noticias</a>
                </li>
                <li>
                    <a class="lnk-head-mobile {{ (Route::currentRouteName() == 'contact')?'active':'' }}" href="{{ route('contact') }}">Contacto</a>
                </li>
            </ul>
            <div class="bottom_">
                @guest
                <a href="" class="btn1" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar Sesión</a>
                <a href="{{ route('login.create') }}" class="btn2">Registrarse</a>
                @else
                @if (Auth::user()->role == 0)
                <a href="{{ route('admin') }}" class="btn2">Administrador</a>
                @endif
                <a href="{{ route('profile.index') }}" class="btn2">Ver Perfil</a>
                <a href="{{ route('logout') }}" class="btn4">Cerrar Sesión</a>
                @endguest
                <a href="" class="btn3">Escríbenos al Whatsapp</a>
                <img src="{{ asset('images/logo2.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body" id="modal_login">
                <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
                <img src="{{ asset('images/logo_color.png') }}" alt="">
                <h3>
                    BIENVENID@
                </h3>
                <div class="alert alert-danger alert-dismissible fade show d-none" id="alert_login" role="alert">
                    Email o contraseña invalidos
                </div>
                <div class="alert alert-success alert-dismissible fade show d-none" id="alert_login_success" role="alert">
                    Logueado correctamente
                </div>
                <form action="{{ route('login.login') }}" method="POST" id="form_login">
                    @csrf
                    <input name="email" type="text" class="form-control" placeholder="Usuario / Email / Id Socio" required>
                    <input name="password" type="password" class="form-control" placeholder="Contraseña" required>
                    <a href="" class="a_forgot">
                        ¿Olvidó su contraseña?
                    </a>
                    <button type="submit">
                        INGRESAR
                    </button>
                    <p>¿No tienes cuenta? <a href="{{ route('login.create') }}">Regístrate</a></p>
                </form>
                <p>
                    © {{ date('Y') }} - Brisas del Titicaca
                </p>
            </div>
            <div class="modal-body" id="modal_forgot">
                <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
                <img src="{{ asset('images/logo_color.png') }}" alt="">
                <h3>
                    Recupera tu contraseña
                </h3>
                <p class="tit">
                    Ingresa tu correo electrónico y revisa el mensaje que se enviará para restablecer tu contraseña
                </p>
                <form action="">
                    <input type="email" class="form-control" placeholder="Correo electrónico" required>
                    <button type="submit">
                        RECUPERA TU CONTRASEÑA
                    </button>
                </form>
                <a href="" class="a_back_login">
                    Olvídelo, ya la recordé
                </a>
                <p class="copyright">
                    © 2022 - Brisas del Titicaca
                </p>
            </div>
        </div>
    </div>
</div>

<div class="fondo-cart"></div>
<div class="cartlist">
    <div class="cartlist_header">
        <h4>Carrito</h4>
        <div class="cartlist_close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="items" id="cartlist_items">
        {{-- <div class="item" id="product_3">
            <div class="image">
                <img src="{{ asset('images/cartelera1.jpg') }}" alt="">
            </div>
            <div class="item_detail">
                <div class="detail">
                    <a class="h5_name" href="">
                        Nombre del evento texto más largo probando lorem ipsum
                    </a>
                    <p>
                        <strong>Zona: </strong><span id="bought_name">Nombre zona</span>
                    </p>
                    <p>
                        <strong>N° Mesa: </strong><span id="bought_table">15</span>
                    </p>
                    <p>
                        <strong>N° Asiento: </strong><span id="bought_seat">6</span>
                    </p>
                    <p>
                        <strong>Precio: S/ <span id="bought_price">75</span></strong>
                    </p>
                </div>
                <div delete_product_id="3" class="delete_product">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
        </div> --}}
        @php $total = 0 @endphp
        @if (count((array)session('cart')) < 1)
        <div class="empty_cart">
            <i class="fa-solid fa-cart-shopping"></i>
            <br>
            Carrito vacío
        </div>
        @else
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] @endphp
                <div class="item" id="product_{{ $id }}">
                    <div class="image">
                        <img src="{{ $details['image'] }}" alt="">
                    </div>
                    <div class="item_detail">
                        <div class="detail">
                            <a class="h5_name" href="{{ $details['url'] }}">
                                {{ $details['name'] }}
                            </a>
                            <p>
                                <strong>Categoria: </strong><span id="category">{{ $details['category'] }}</span>
                            </p>
                            <p>
                                <strong>Precio: S/ <span id="bought_price">{{ $details['price'] }}</span></strong>
                            </p>
                        </div>
                        <div delete_product_id="{{ $id }}" class="delete_product">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        @endif
    </div>
    <div class="subtotal {{ (count((array)session('cart')) < 1)?'d-none':'d-flex' }}">
        <p>
            TOTAL
        </p>
        <p>
            S/ <span class="total">{{ $total }}</span>
        </p>
        <a @guest id="gotocart" @endguest href="{{ route('checkout.cart') }}">Procesar Compra</a>
    </div>
</div>

<div class="modal fade" id="cartGracias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h4>Tu taller se agregó al carrito</h4>
                <div class="content_gracias">
                    <div class="image">
                        <img class="image_product" src="" alt="">
                    </div>
                    <div class="description">
                        <h3 class="name_product">
                            Nombre del taller
                        </h3>
                        <p class="p1">
                            Categoría: <span class="product_category">Categoria</span>
                        </p>
                        <p class="p0">
                            Precio
                        </p>
                        <p class="price_now_product">
                            S/ 2000
                        </p>
                    </div>
                    <a @guest id="gotocart0" @endguest href="{{ route('checkout.cart') }}" class="gocart">
                        Ir a pagar
                    </a>
                    <a href="" class="goback" data-bs-dismiss="modal">
                        Seguir comprando
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="beforesend">
    <span class="beforesend_loader"></span>
</div>