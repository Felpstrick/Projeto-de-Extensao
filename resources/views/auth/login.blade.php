@extends('layouts.app')
@section('titulo', 'Login')

@section('content')
    <section class="min-vh-100 d-flex align-items-center py-4"
        style="background-image: url('{{ asset('storage/identidadeVisual.png') }}');
               background-size: cover;
               background-position: center;
               background-repeat: no-repeat;">

        <div class="container-fluid">
            <div class="row justify-content-center justify-content-lg-end">
                <div class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-4 px-3 px-lg-5">

                    <div class="card shadow">
                        <div class="card-header text-center">
                            <h3 class="mb-0">Login</h3>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        required autofocus
                                        placeholder="Digite seu e-mail">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Senha</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="password"
                                        name="password"
                                        required
                                        placeholder="Digite sua senha">
                                </div>

                                <p class="text-end mb-2" style="font-size: 14px;">
                                    <a href="#" class="fw-bold text-success">
                                        Esqueceu sua senha?
                                    </a>
                                </p>

                                <button type="submit" class="btn btn-success w-100">
                                    Entrar
                                </button>
                            </form>

                            <hr>

                            <p class="text-center mb-0">
                                Ainda não possui cadastro?
                                <a href="{{ route('cadastroUsuario') }}" class="fw-bold text-success">
                                    Clique aqui!
                                </a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection