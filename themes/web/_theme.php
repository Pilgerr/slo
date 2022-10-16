<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=CONF_SITE_NAME?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?=url("area-logada");?>">SLO adm</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?=url("area-logada");?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="<?=url("cadastro-usuario");?>">Cadastro Acessos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=url("area-paciente");?>">Pacientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=url("area-dentista");?>">Dentistas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=url("area-consultas");?>">Agendamentos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <?=$this->section("content");?>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">&copy; 2022 Company, Inc</p>

        <a href="<?=url("sobre");?>"
            class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <p>Sistemas para Logística Odontológica</p>
        </a>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="<?=url("area-logada");?>" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="<?=url("contato");?>" class="nav-link px-2 text-muted">Contato</a></li>
            <li class="nav-item"><a href="<?=url("sobre");?>" class="nav-link px-2 text-muted">Sobre</a></li>
        </ul>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>