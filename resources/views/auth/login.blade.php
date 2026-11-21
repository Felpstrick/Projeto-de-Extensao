@extends('layouts.app')
@section('titulo', 'Login')

@section('content')
    <section class="min-vh-100 d-flex align-items-center py-4"
        style="background-image: url('{{ asset('img/identidadeVisual.png') }}');
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
                            <form method="POST" action="{{ route('login') }}" novalidate>
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input
                                        type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required autofocus
                                        placeholder="Digite seu e-mail">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Senha</label>
                                    <input
                                        type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        id="password"
                                        name="password"
                                        required
                                        placeholder="Digite sua senha">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="lembrar" name="lembrar" value="1">
                                        <label class="form-check-label" for="lembrar">Lembrar de mim</label>
                                    </div>
                                    <a href="#" class="fw-bold text-success" style="font-size: 14px;">
                                        Esqueceu sua senha?
                                    </a>
                                </div>

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