<?php
$theme = $_COOKIE['theme'] ?? 'light';
if (
    $theme === '
    dark'
) {
    $iconeTema = '<i class="fa-solid fa-sun"></i>';
} else {
    $iconeTema = '<i class="fa-solid fa-moon"></i>';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alexandre Silva">
    <!-- Icone -->
    <link rel="shortcut icon" href="assets/images/logo.svg" type="image/x-icon">
    <title>ArtPalette</title>

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Variables CSS -->
    <!-- CSS -->
    <link id="themeStyle" rel="stylesheet" href="assets/css/light.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/655b1b7428.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

</head>

<body class="<?php echo $theme; ?>">
    <div class="container">
        <div class="row navbar-pai">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand d-flex align-items-center" href="#">
                        <img src="assets/images/logo.svg" alt="Logo ArtPalette" width="50" height="50"
                            class="d-inline-block align-text-top me-3"> ArtPalette
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span style="color: var(--branco)">
                            <i class="fa-solid fa-bars"></i>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Paletas</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Meu Perfil
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Minhas paletas</a></li>
                                    <li><a class="dropdown-item" href="#">Curtidas</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Logout</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <?php
                                echo "<button class='btn btn-link nav-link' id='themeButton'> $iconeTema </button>";
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="row mb-4">
            <div class="col">
                <h1>Bem-vindo, Alexandre 👋</h1>
            </div>
        </div>

        <div class="row">
            <div class="row mt-1 p-3 section-paletas justify-content-md-between justify-content-center">
                <div class="paleta col-auto" id="myCard">
                    <div class="cores">
                        <div class="cor bg-primary" onclick="expandirCor(this)"></div>
                    </div>
                    <div class="paleta-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="custom-cursor">
        <img src="assets/images/brush.svg" id="cursor" alt="Cursor personalizado">
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/script.js"></script>
</body>


</html>