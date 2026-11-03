<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', 'Plataforma de Atividades')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    @include('partials.navbar')

    <main class="container py-4 flex-grow-1">
        @if (session('sucesso'))
            <div class="alert alert-success">{{ session('sucesso') }}</div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-white border-top py-3 text-center text-muted small">
        Plataforma de Atividades &middot; IFPR Telêmaco Borba
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>