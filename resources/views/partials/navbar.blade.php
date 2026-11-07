<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">Plataforma de Atividades</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal" aria-controls="menuPrincipal"
                aria-expanded="false" aria-label="Abrir menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuPrincipal">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Catálogo</a>
                </li>

                @auth
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                           href="{{ route('dashboard') }}">Início</a>
                    </li>

                    @if (auth()->user()->isAdministrador())
                        <li class="nav-item"><a class="nav-link" href="#">Materiais</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Vendas</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="#">Meus materiais</a></li>
                    @endif
                @endauth
            </ul>

            <ul class="navbar-nav">
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Entrar</a></li>
                @endguest

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i> {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Sair</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>