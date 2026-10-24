<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body >

    <section class="vh-100 d-flex align-items-center row g-0"
        style="background-image: url('storage/identidadeVisual.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;">

        <div class="col-8"></div>

        <div class="col-4 px-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ">

                            <div class="d-flex justify-content-center align-items-center" >
                                <h3>Login</h3>
                            </div>
                            <hr>
                            <div class="card-body">

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input 
                                            type="email" 
                                            class="form-control" 
                                            id="email" 
                                            name="email" required autofocus
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
                                    <p class="text-end mt-0 mb-2 " style="font-size: 14px;" >
                                        <a href="#" class="fw-bold text-success">
                                            Esqueçeu sua Senha?
                                        </a>
                                    </p>

                                    <button
                                        type="submit"
                                        class="btn btn-success w-100 mb-3">
                                        Entrar
                                    </button>
                                </form>
                                
                                <hr>

                                <p class="text-center mb-0">
                                    Ainda não possui cadastro?
                                    <a href="#" class="fw-bold text-success">
                                        Clique aqui!
                                    </a>
                                </p>
                                

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
