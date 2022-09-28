<div class="layoutNav shadow" id="#navDesktop">
    <div class="nav-items">
        <div class="sidenav-menu-heading mt-3">Dashboard</div>
        <a class="nav-link @if(Route::currentRouteName()=="admin") active @endif" 
        href="{{ route('admin') }}">
            <i class="fas fa-tachometer-alt text-gray pr-1"></i> Dashboard
        </a>
        <a class="nav-link" target="_blank" 
        href="{{ route('index') }}">
            <i class="fas fa-globe text-gray pr-1"></i> Ver Web
        </a>

        <div class="sidenav-menu-heading">Usuarios</div>
        <a class="nav-link @if(preg_match("/users/", Route::currentRouteName())) active @endif" 
        href="{{ route('users.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Socios
        </a>

        <div class="sidenav-menu-heading">Páginas</div>
        <a class="nav-link @if(preg_match("/pagefields.home/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.home') }}">
            <i class="fas fa-home text-gray pr-1"></i> Inicio
        </a>
        <a class="nav-link @if(preg_match("/pagefields.aboutus/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.aboutus') }}">
            <i class="fas fa-home text-gray pr-1"></i> Nosotros
        </a>
        <a class="nav-link @if(preg_match("/pagefields.events/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.events') }}">
            <i class="fas fa-home text-gray pr-1"></i> Eventos
        </a>
        <a class="nav-link @if(preg_match("/pagefields.workshops/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.workshops') }}">
            <i class="fas fa-home text-gray pr-1"></i> Talleres
        </a>
        <a class="nav-link @if(preg_match("/pagefields.blog/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.blog') }}">
            <i class="fas fa-home text-gray pr-1"></i> Blog
        </a>
        <a class="nav-link @if(preg_match("/pagefields.contact/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.contact') }}">
            <i class="fas fa-home text-gray pr-1"></i> Contacto
        </a>
        <a class="nav-link @if(preg_match("/pagefields.configuration/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.configuration') }}">
            <i class="fas fa-home text-gray pr-1"></i> Configuración
        </a>

        <div class="sidenav-menu-heading">Secciones</div>
        <a class="nav-link @if(preg_match("/sliders/", Route::currentRouteName())) active @endif" 
        href="{{ route('sliders.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Sliders
        </a>
        <a class="nav-link @if(preg_match("/testimonials/", Route::currentRouteName())) active @endif" 
        href="{{ route('testimonials.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Testimonios
        </a>
        <a class="nav-link @if(preg_match("/board_directors/", Route::currentRouteName())) active @endif" 
        href="{{ route('board_directors.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Consejo Directivo
        </a>

        <div class="sidenav-menu-heading">Eventos</div>
        <a class="nav-link @if(preg_match("/categories.dinner/", Route::currentRouteName())) active @endif" 
        href="{{ route('categories.dinner') }}">
            <i class="fas fa-home text-gray pr-1"></i> Noches de Folklore
        </a>
        <a class="nav-link @if(preg_match("/one_events/", Route::currentRouteName())) active @endif" 
        href="{{ route('one_events.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Eventos
        </a>
        <hr style="margin: 0 5%">
        <a class="nav-link @if(preg_match("/categories.lunch/", Route::currentRouteName())) active @endif" 
        href="{{ route('categories.lunch') }}">
            <i class="fas fa-home text-gray pr-1"></i> Almuerzo Show
        </a>
        <a class="nav-link @if(preg_match("/two_events/", Route::currentRouteName())) active @endif" 
        href="{{ route('two_events.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Eventos
        </a>
        <hr style="margin: 0 5%">
        <a class="nav-link @if(preg_match("/categories.special/", Route::currentRouteName())) active @endif" 
        href="{{ route('categories.special') }}">
            <i class="fas fa-home text-gray pr-1"></i> Eventos Especiales
        </a>

        <div class="sidenav-menu-heading">Talleres Educativos</div>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('workshops.index', 'workshops.edit', 'workshops.create'))) active @endif" 
        href="{{ route('workshops.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Talleres (Categorías)
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('workshop_events.index', 'workshop_events.edit', 'workshop_events.create'))) active @endif" 
        href="{{ route('workshop_events.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Crear Taller
        </a>

        <div class="sidenav-menu-heading">Blog</div>
        <a class="nav-link @if(preg_match("/posts/", Route::currentRouteName())) active @endif" 
        href="{{ route('posts.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Entradas
        </a>

        <div class="sidenav-menu-heading">Ventas</div>
        <a class="nav-link @if(preg_match("/sales/", Route::currentRouteName())) active @endif" 
        href="{{ route('sales.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Ventas
        </a>

        {{-- <a class="nav-link @if(in_array(Route::currentRouteName(), array('pagefields.choose'))) active @endif" 
        href="{{ route('pagefields.choose') }}">
            <i class="fas fa-home text-gray pr-1"></i> ¿Porqué elegirnos?
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('pagefields.achievement'))) active @endif" 
        href="{{ route('pagefields.achievement') }}">
            <i class="fas fa-home text-gray pr-1"></i> Nuestros logros
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('partners.index', 'partners.edit', 'partners.create'))) active @endif" 
        href="{{ route('partners.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Partners
        </a>

        <div class="sidenav-menu-heading">Cursos & Insignias</div>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('course_subareas.index', 'course_subareas.edit', 'course_subareas.create'))) active @endif" 
        href="{{ route('course_subareas.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Sub Áreas
        </a>
        <a class="nav-link @if(preg_match("/course_areas|course_categories|courses|topics|badge/", Route::currentRouteName())) active @endif" 
        href="{{ route('course_areas.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Áreas de capacitación
        </a>

        <div class="sidenav-menu-heading">Equipo</div>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('worker_managers.index', 'worker_managers.edit', 'worker_managers.create'))) active @endif" 
        href="{{ route('worker_managers.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Dirección
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('worker_teachers.index', 'worker_teachers.edit', 'worker_teachers.create'))) active @endif" 
        href="{{ route('worker_teachers.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Docentes
        </a>
        <a class="nav-link @if(in_array(Route::currentRouteName(), array('worker_administrators.index', 'worker_administrators.edit', 'worker_administrators.create'))) active @endif" 
        href="{{ route('worker_administrators.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Administración
        </a>

        <div class="sidenav-menu-heading">Páginas</div>
        <a class="nav-link @if(preg_match("/pagefields.cover_page/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.cover_page') }}">
            <i class="fas fa-home text-gray pr-1"></i> Portadas & títulos
        </a>
        <a class="nav-link @if(preg_match("/pagefields.support/", Route::currentRouteName())) active @endif" 
        href="{{ route('pagefields.support') }}">
            <i class="fas fa-home text-gray pr-1"></i> Soporte
        </a>

        <div class="sidenav-menu-heading">Blog</div>
        <a class="nav-link @if(preg_match("/blog_tags/", Route::currentRouteName())) active @endif" 
        href="{{ route('blog_tags.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Tags
        </a>
        <a class="nav-link @if(preg_match("/blog_categories/", Route::currentRouteName())) active @endif" 
        href="{{ route('blog_categories.index') }}">
            <i class="fas fa-home text-gray pr-1"></i> Categorías y Entradas
        </a> --}}

    </div>
    <div class="nav-footer">
        <p>Logueado como:</p>
        <p>{{ ucwords(Auth::user()->name) }} {{ ucwords(Auth::user()->lastname) }}</p>
        <p>{{ getRole(Auth::user()->role) }}</p>
    </div>
</div>