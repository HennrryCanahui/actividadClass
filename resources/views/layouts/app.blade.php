<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark box-shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase" href="/dashboard">
                Transporte del Norte
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-start" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-outline-secondary fw-semibold px-3 py-2 ms-1" href="/camiones">Camiones</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-secondary fw-semibold px-3 py-2 ms-2" href="/marca">Marcas</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-secondary fw-semibold px-3 py-2 ms-2" href="/transporte">Trasportes</a>
                    </li>
                </ul>
            </div>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white fw-semibold" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-semibold" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-semibold" href="#">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted disabled" aria-disabled="true">Inhabilitado</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    

    <div class="container mt-5 pt-4">
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
  

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
