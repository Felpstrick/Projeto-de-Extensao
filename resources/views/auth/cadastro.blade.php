@extends('layouts.app')
@section('titulo', 'Cadastro')
@section('content')

    <section class="min-vh-100 d-flex align-items-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">

                    <div class="card shadow-sm">
                        <div class="card-header text-center">
                            <h3 class="mb-0">Cadastrar</h3>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('cadastroUsuario') }}" novalidate>
                                @csrf

                                <div class="mb-3">
                                    <label for="name" class="form-label">Nome</label>
                                    <input
                                        type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required autofocus
                                        placeholder="Digite seu nome">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input
                                        type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
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

                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="password_confirmation"
                                        name="password_confirmation"
                                        required
                                        placeholder="Confirme sua senha">
                                </div>

                                <button type="submit" class="btn btn-success w-100">
                                    Cadastrar
                                </button>
                            </form>

                            <hr>

                            <p class="text-center mb-0">
                                Já possui cadastro?
                                <a href="{{ route('login') }}" class="fw-bold text-success">
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