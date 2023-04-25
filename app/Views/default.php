<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <?= $this->renderSection('css') ?>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= site_url("/inicio") ?>">Ignite IT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url("/inicio") ?>">Inicio <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url("/quienes-somos") ?>">¿Quiénes somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url("/nuestro-team") ?>">Nuestro Team</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        Portafolio
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= site_url("/portafolio/mediquiz") ?>">MediQuiz</a>
                        <a class="dropdown-item" href="<?= site_url("/portafolio/fullractiva") ?>">Full Reactívate</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= site_url("/portafolio/desarrollo-software") ?>">Desarrollo de
                            Software</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url("/contactanos") ?>">Contáctanos</a>
                </li>
            </ul>
        </div>
    </nav>

    <?= $this->renderSection('content') ?>

    <footer class="p-3">

        <div class="text-muted text-center">
            <span>Hecho con ❤ por Ignite IT Services &copy;
                <?= Date("Y"); ?> . Todos los derechos reservados.
            </span><br>
            <span>www.igniteitservices.com</span>
        </div>
    </footer>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <?= $this->renderSection('js') ?>


</body>

</html>