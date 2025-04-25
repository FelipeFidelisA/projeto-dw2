<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand bg-body-tertiary rounded" href="#">
            <img src="/img/icon-alvora.png" alt="Logo" class="img-fluid" width="30" height="24">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Início</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('receitas.index')}}"> Minhas Receitas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Despesas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('profile.edit')}}">Minha Conta</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="bg-body-secondary">
        @yield("content")
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</html>