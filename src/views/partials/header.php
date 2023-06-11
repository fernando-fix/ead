<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css import start -->
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/responsive.css">
    <!-- css import end -->
    <!-- import font start -->
    <link rel="preconnect" href="<?= $base; ?>/https://fonts.googleapis.com">
    <link rel="preconnect" href="<?= $base; ?>/https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- import font end -->
    <!-- js import start -->
    <script src="<?= $base; ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base; ?>/assets/js/script.js"></script>
    <!-- js import end -->
    <link rel="shortcut icon" href="assets/img/svg/logo-sm.svg" type="image/x-icon">
    <title>Community Coders - EAD</title>
</head>

<body style="background-image: url('<?= $base; ?>/assets/img/svg/background.svg');">
    <header>
        <nav class="navbar " style="background-color: #000000;">
            <div class="container">
                <a class="navbar-brand pt-0" href="<?= $base; ?>/">
                    <img style="object-fit: cover;" src="<?= $base; ?>/assets/img/png/community_coders.png" alt="logo" width="" height="40px">
                </a>
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="<?= $base; ?>/">
                            <img class="mx-2" src="<?= $base; ?>/assets/img/svg/house.svg">
                            Página inicial
                        </a>
                        <a class="dropdown-item" href="<?= $base; ?>/cursos">
                            <img class="mx-2" src="<?= $base; ?>/assets/img/svg/play-btn.svg">
                            Todos os Cursos
                        </a>
                        <a class="dropdown-item" href="<?= $base; ?>/">
                            <img class="mx-2" src="<?= $base; ?>/assets/img/svg/person.svg">
                            Meu perfil
                        </a>
                        <a class="dropdown-item" href="<?= $base; ?>/">
                            <img class="mx-2" src="<?= $base; ?>/assets/img/svg/speedometer2.svg">
                            Dashboard
                        </a>
                        <a class="dropdown-item bg-info" href="<?= $base; ?>/cursos/adm">
                            <img class="mx-2" src="<?= $base; ?>/assets/img/svg/layers.svg">
                            Administrar cursos
                        </a>
                        <a class="dropdown-item" href="<?= $base; ?>/sair">
                            <img class="mx-2" src="<?= $base; ?>/assets/img/svg/box-arrow-left.svg">
                            Sair
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>