@extends('layouts.app')
@section('titulo', 'Cadastro')
@section('content')

    <h3>TELA DE LOGIN---
        <a href="{{ route('login') }}">
            Clique aqui!
        </a>
    </h3>
    
    <h3>TELA DE CADASTRO---
        <a href="{{ route('cadastroUsuario') }}">
            Clique aqui!
        </a>
    </h3>
    
    <h3>TELA DOS MATERIAIS---
        <a href="{{ route('TelaMateriais') }}">
            Clique aqui!
        </a>
    </h3>

@endsection

