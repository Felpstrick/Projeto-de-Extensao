@extends('layouts.app')
@section('titulo', 'Catálogo de Materiais')
@section('content')


<section class="materiais">

    <!-- BANNER ROTATIVO -->
    <div id="bannerMateriais" class="carousel slide"
         data-bs-ride="carousel"
         data-bs-interval="5000">

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{ url('storage/banner1.png') }}"
                     class="d-block w-100"
                     alt="Banner de materiais educacionais">
                <div class="carousel-caption">
                    <h2>O conteúdo perfeito para você, é aqui!</h2>
                    <p>Encontre materiais que facilitam sua aprendizagem.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ url('storage/banner2.png') }}"
                     class="d-block w-100"
                     alt="Materiais para seus estudos">
            </div>

            <div class="carousel-item">
                <img src="{{ url('storage/banner3.png') }}"
                     class="d-block w-100"
                     alt="Aprenda de um jeito diferente">
            </div>

        </div>

        <!-- INDICADORES -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#bannerMateriais"
                    data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#bannerMateriais"
                    data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#bannerMateriais"
                    data-bs-slide-to="2"></button>
        </div>

    </div>


    <!-- VITRINE DE MATERIAIS -->
    <div class="vitrine-materiais">

        <div class="lista-materiais" id="listaMateriais">

            @forelse($materiais as $material)
                <div class="card-material">
                    <div class="imagem-material">
                        @if($material->arquivo_previa)
                            <img
                                src="{{ asset('storage/' . $material->arquivo_previa) }}"
                                alt="Prévia de {{ $material->titulo }}"
                            >
                        @else
                            <span>Prévia indisponível</span>
                        @endif
                    </div>

                    <h6>{{ $material->titulo }}</h6>
                    <p>
                        R$ {{ number_format($material->preco, 2, ',', '.') }}
                    </p>
                </div>

            @empty
                <p>Nenhum material disponível no momento.</p>

            @endforelse
        </div>

        <!-- BOTÃO ANTERIOR -->
        <button class="btn-vitrine anterior"
                type="button"
                aria-label="Materiais anteriores"
                onclick="rolarMateriais(-1)">
            <i class="bi bi-chevron-left"></i>
        </button>
        
        <!-- BOTÃO PRÓXIMO -->
        <button class="btn-vitrine proximo"
                type="button"
                aria-label="Próximos materiais"
                onclick="rolarMateriais(1)">
            <i class="bi bi-chevron-right"></i>
        </button>

    </div>

</section>

<script>
    const lista = document.getElementById('listaMateriais');

    const anterior = document.querySelector('.btn-vitrine.anterior');
    const proximo = document.querySelector('.btn-vitrine.proximo');

    // Controla a visibilidade das setas
    function atualizarSetas() {

        const limite = lista.scrollWidth - lista.clientWidth;

        // Esconde a seta anterior no início
        anterior.style.display = lista.scrollLeft <= 5 ? 'none' : 'flex';

        // Esconde a seta próxima no final
        proximo.style.display = lista.scrollLeft >= limite - 5 ? 'none' : 'flex';

    }
    // Função de movimentação
    window.rolarMateriais = function(direcao) {

        lista.scrollBy({
            left: direcao * 300,
            behavior: 'smooth'
        });

    };
    // Atualiza durante a rolagem
    lista.addEventListener('scroll', atualizarSetas);

    // Atualiza ao redimensionar a tela
    window.addEventListener('resize', atualizarSetas);

    // Verifica a posição inicial
    atualizarSetas();
</script>

@endsection