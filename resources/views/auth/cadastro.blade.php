<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    <section class="vh-100 d-flex align-items-center row g-0">

        <div class="col-4"></div>

        <div class="col-4 px-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ">

                            <div class="d-flex justify-content-center align-items-center" >
                                <h3>Cadastrar</h3>
                            </div>
                            <hr>
                            <div class="card-body">
                                <form method="POST" action="{{ route('cadastroUsuario') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nome</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="name" 
                                            name="name" required autofocus
                                            placeholder="Digite seu nome">
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input 
                                            type="email" 
                                            class="form-control" 
                                            id="email" 
                                            name="email" required
                                            placeholder="Digite seu e-mail">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Senha</label>
                                        <input 
                                            type="password" 
                                            class="form-control" 
                                            id="password" 
                                            name="password" required
                                            placeholder="Digite sua senha">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                                        <input 
                                            type="password" 
                                            class="form-control" 
                                            id="password_confirmation" 
                                            name="password_confirmation" required
                                            placeholder="Confirme sua senha">
                                    </div>

                                    <button
                                        type="submit"
                                        class="btn btn-success w-100 mb-3">
                                        Entrar
                                    </button>
                                </form>
                                <hr>
                                <p class="text-center mb-0">
                                    Já possui cadastro?
                                    <a href="{{ route('login') }}" class="fw-bold text-success">
                                        Clique aqui!
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-***" crossorigin="anonymous"></script>

</body>
</html>