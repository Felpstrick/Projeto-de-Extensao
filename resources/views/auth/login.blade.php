<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body >

    <section class="vh-100 d-flex align-items-center justify-content-center row" style="background-color: #f8f9fa;" >
        <div class="text-center mb-4 col-8">
            <img src="storage/imagemParaTelaDeLoginTEST.jpeg" alt="imagem não encontrada" style="max-width: 100%; height: auto;">

        </div>
        <div class="container mt-5 col-4">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">


                            <h3>Login</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Senha</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Entrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>





    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-***" crossorigin="anonymous"></script>

</body>
</html>
