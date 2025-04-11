<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Transporte del Norte</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            padding-top: 70px;
            background-color: #f8f9fa;
        }
        .navbar-brand {
            letter-spacing: 1px;
        }
        .navbar .btn {
            transition: all 0.2s ease-in-out;
        }
        .navbar .btn:hover {
            background-color: #6c757d;
            color: white;
        }
        footer {
            background-color: #212529;
            color: #aaa;
            padding: 20px 0;
        }
        footer a {
            color: #aaa;
            text-decoration: none;
        }
        footer a:hover {
            color: white;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
        @yield('navbar-extra')
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase" href="/">Transporte del Norte</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white fw-semibold" href="/proximamente">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-semibold" href="/proximamente">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-semibold" href="/proximamente">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-semibold" href="/proximamente">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-5">
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </main>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
