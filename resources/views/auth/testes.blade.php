<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Testes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    
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

</body>
</html>