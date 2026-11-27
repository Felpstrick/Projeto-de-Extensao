
<nav class="navbar navbar-expand-lg navbar-plataforma bg-white border-bottom shadow-sm">

    <div class="container-fluid px-4">

        <!-- BOTÃO DO MENU LATERAL -->
        @auth
            <button class="btn btn-menu-plataforma me-3"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#sidebarPlataforma"
                    aria-controls="sidebarPlataforma"
                    aria-label="Abrir menu lateral">

                <i class="bi bi-list"></i>

            </button>
        @endauth


        <!-- LOGO / NOME DA PLATAFORMA -->
        <a class="navbar-brand fw-bold"
           href="{{ url('/') }}">

            Plataforma de Atividades

        </a>


        <!-- LINKS PRINCIPAIS -->
        <div class="navbar-nav me-auto ms-3">

            <a class="nav-link {{ request()->is('materiais') ? 'active' : '' }}"
               href="{{ url('/materiais') }}">

                <i class="bi bi-book me-1"></i>
                Catálogo

            </a>

        </div>


        <!-- ÁREA DO USUÁRIO -->
        <ul class="navbar-nav align-items-center">

            <!-- USUÁRIO NÃO AUTENTICADO -->
            @guest

                <li class="nav-item">

                    <a class="nav-link"
                       href="{{ route('login') }}">

                        <i class="bi bi-box-arrow-in-right me-1"></i>
                        Entrar

                    </a>

                </li>

            @endguest


            <!-- USUÁRIO AUTENTICADO -->
            @auth

                <!-- NOTIFICAÇÕES -->
                <li class="nav-item dropdown me-3">

                    <button class="btn btn-notificacao"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-label="Notificações">

                        <i class="bi bi-bell"></i>

                        <span class="notificacao-indicador"></span>

                    </button>


                    <ul class="dropdown-menu dropdown-menu-end notificacao-menu">

                        <li>
                            <h6 class="dropdown-header fw-bold">
                                Notificações
                            </h6>
                        </li>

                        <li>

                            <div class="dropdown-item-text py-3 text-muted small">

                                <i class="bi bi-bell-slash me-2"></i>

                                Central de notificações em desenvolvimento.

                            </div>

                        </li>

                    </ul>

                </li>


                <!-- MENU DO PERFIL -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">

                        <i class="bi bi-person-circle me-1"></i>

                        <span class="usuario-nome">
                            {{ auth()->user()->name }}
                        </span>

                    </a>


                    <ul class="dropdown-menu dropdown-menu-end">

                        <li>
                            <span class="dropdown-item-text text-muted small">

                                {{ auth()->user()->perfil }}

                            </span>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>

                            <form method="POST"
                                  action="{{ route('logout') }}">

                                @csrf

                                <button class="dropdown-item"
                                        type="submit">

                                    <i class="bi bi-box-arrow-right me-2"></i>

                                    Sair da plataforma

                                </button>

                            </form>

                        </li>

                    </ul>

                </li>

            @endauth

        </ul>

    </div>

</nav>
