<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Analista de Sistemas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Mi Portafolio</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/proyectos">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        {{-- Aquí se inyecta el contenido de cada página --}}
        @yield('content')
    </main>

    <footer class="text-center mt-5 mb-3 text-muted">
        © {{ date('Y') }} — Portafolio de Analista de Sistemas
    </footer>
</body>
</html>
