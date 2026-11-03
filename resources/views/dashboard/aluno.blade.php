@extends('layouts.app')
@section('titulo', 'Início')

@section('content')
<h1 class="h3 mb-4">Olá, {{ auth()->user()->name }}</h1>

<h2 class="h5 mb-3">Meus materiais recentes</h2>
<div class="row g-3">
    @forelse ($acessos as $acesso)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="h6">{{ $acesso->material->titulo }}</h3>
                    <p class="text-muted small mb-3">
                        {{ $acesso->material->serie }} &middot; {{ $acesso->material->disciplina }}
                    </p>
                    <a href="#" class="btn btn-primary btn-sm">
                        <i class="bi bi-download"></i> Baixar
                    </a>
                </div>
            </div>
        </div>
    @empty
        <p class="text-muted">Você ainda não tem materiais. Veja o catálogo e faça sua primeira compra.</p>
    @endforelse
</div>
@endsection