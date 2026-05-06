<header>
    <div class="logo">
        <img src="{{ asset('assets/Icon2.png') }}" alt="Logo de CursoNauta" class="logo-img">
        <h1>CursoNauta</h1>
    </div>

    <div class="search-bar">
        <form action="{{ url('/cursos') }}" method="GET">
            <input type="text" name="search" placeholder="Buscar cursos...">
            <button type="submit" class="search-button">
               <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
    </div>

    <nav class="navegation">
        <ul>
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-btn">Categorías</a>
                <ul class="dropdown-content">
                    {{-- Por ahora manual, luego lo conectamos a la DB --}}
                    <li><a href="#">Diseño</a></li>
                    <li><a href="#">Programación</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/cursos') }}">Cursos</a></li>
        </ul>
    </nav>

    <div class="user-profile">
        @guest
            {{-- Si no hay sesión --}}
            <a href="{{ url('/login') }}" class="btn-login">Iniciar Sesión</a>
        @endguest

        @auth
            <div class="profile-trigger profile-toggle">
                <img src="{{ auth()->user()->profile_photo_path ?? asset('img/default-user.png') }}" alt="Usuario" class="user-img">
                <div class="user-info">
                    <p class="user-name">{{ auth()->user()->name }}</p>
                    <p class="user-role">{{ ucfirst(auth()->user()->role) }}</p>
                </div>
            </div>

            <ul class="dropdown-menu">
                <li><a href="{{ url('/perfil') }}">Mi perfil</a></li>
                @if(auth()->user()->role == 'estudiante')
                    <li><a href="{{ url('/mensajes') }}">Mensajes</a></li>
                @endif
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">Cerrar Sesión</a>
                    </form>
                </li>
            </ul>
        @endauth
    </div>
</header>