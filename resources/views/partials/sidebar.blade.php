
<div class="offcanvas offcanvas-start sidebar-plataforma"
     tabindex="-1"
     id="sidebarPlataforma"
     aria-labelledby="sidebarPlataformaLabel">

    <!-- CABEÇALHO -->
    <div class="offcanvas-header sidebar-header">

        <div>
            <h4 class="fw-bold mb-1" id="sidebarPlataformaLabel">
                Plataforma de Atividades
            </h4>

            <small>Conhecimento que transforma, aprendizado que aproxima.</small>
        </div>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="offcanvas"
                aria-label="Fechar">
        </button>

    </div>

    <div class="offcanvas-body d-flex flex-column">

        <!-- USUÁRIO -->
        <div class="sidebar-usuario mb-4">

            <i class="bi bi-person-circle"></i>

            <div>
                <strong>{{ auth()->user()->name }}</strong>

                <small>{{ auth()->user()->perfil }}</small>
            </div>

        </div>

        <span class="sidebar-titulo">MENU PRINCIPAL</span>

        <nav class="nav flex-column sidebar-links">

            <!-- DASHBOARD -->
            <a href="{{ route('dashboard') }}"
               class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">

                <i class="bi bi-grid"></i>
                Dashboard

            </a>

            @if (auth()->user()->isAdministrador())

                <!-- MENU DO PROFESSOR -->

                <span class="sidebar-titulo mt-4">
                    ÁREA DO PROFESSOR
                </span>

                <!-- CADASTRAR MATERIAL -->
                <a href="{{ route('cadastroMaterial') }}"
                   class="sidebar-link {{ request()->routeIs('cadastroMaterial', 'previewCadastroMaterial') ? 'active' : '' }}">

                    <i class="bi bi-plus-circle"></i>
                    Cadastrar material

                </a>

                <!-- GERENCIAR MATERIAIS -->
                <a href="{{ route('TelaMateriais') }}"
                   class="sidebar-link {{ request()->routeIs('TelaMateriais') ? 'active' : '' }}">

                    <i class="bi bi-journal-text"></i>
                    Gerenciar materiais

                </a>

                <a href="#"
                   class="sidebar-link">

                    <i class="bi bi-cart-check"></i>
                    Minhas vendas

                </a>

                <a href="#"
                   class="sidebar-link">

                    <i class="bi bi-graph-up"></i>
                    Relatórios

                </a>

            @else

                <!-- MENU DO ALUNO -->

                <span class="sidebar-titulo mt-4">
                    ÁREA DO ALUNO
                </span>

                <!-- EXPLORAR MATERIAIS -->
                <a href="{{ route('TelaMateriais') }}"
                   class="sidebar-link {{ request()->routeIs('TelaMateriais') ? 'active' : '' }}">

                    <i class="bi bi-book"></i>
                    Explorar materiais

                </a>

                <a href="#"
                   class="sidebar-link">

                    <i class="bi bi-folder2-open"></i>
                    Minha biblioteca

                </a>

                <a href="#"
                   class="sidebar-link">

                    <i class="bi bi-heart"></i>
                    Favoritos

                </a>

            @endif

            <!-- MINHA CONTA -->

            <span class="sidebar-titulo mt-4">
                MINHA CONTA
            </span>

            <a href="#"
               class="sidebar-link">

                <i class="bi bi-person"></i>
                Meu perfil

            </a>

            <a href="#"
               class="sidebar-link">

                <i class="bi bi-bell"></i>
                Notificações

            </a>

            <a href="#"
               class="sidebar-link">

                <i class="bi bi-headset"></i>
                Ajuda e suporte

            </a>

        </nav>

        <!-- RODAPÉ -->
        <div class="sidebar-footer mt-auto">

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit"
                        class="sidebar-link sidebar-sair w-100">

                    <i class="bi bi-box-arrow-left"></i>
                    Sair da plataforma

                </button>
            </form>

            <small>
                Educação que inspira novos caminhos.
            </small>

        </div>

    </div>

</div>
