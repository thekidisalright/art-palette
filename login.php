<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icone -->
    <link rel="shortcut icon" href="assets/images/logo.svg" type="image/x-icon">
    <title>Login - ArtPalette</title>

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Variables CSS -->
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/655b1b7428.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <div class="row rounded-5 p-3 bg-white my-5 my-md-0 mx-2 mx-md-0" style="border: 2px solid var(--preto);">

            <div
                class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box me-md-4 mb-md-0 mb-4">
                <div class="imagem-especial d-flex justify-content-center">
                    <img src="./images/image-login.svg" class="img-fluid w-50">
                </div>
                <p class="fw-bold fs-2 mt-2">Verifique-se</p>
                <small class="text-wrap text-center mb-5">Leia, explore e descubra na Teenage Dream.</small>
            </div>

            <div class="col-md right-box d-flex align-items-center">

                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h1 class="fw-semibold">Bem-vindo &#x1F44B;</h1>
                        <p>Estamos felizes que você voltou.</p>
                    </div>
                    <form action="" method="POST">
                        <input type="hidden" value="login" name="acao">
                        <div class="input-group mb-3 d-flex align-items-center">
                            <label for="email" class="fs-6 fw-regular me-3">E-mail</label>
                            <input type="email" name="email" class="form-control form-control-lg fs-6 rounded-3"
                                placeholder="Insira um e-mail">
                        </div>
                        <div class="input-group mb-4">
                            <label for="senha" class="fs-6 fw-regular me-3">Senha</label>
                            <input type="password" name="senha" class="form-control form-control-lg fs-6 rounded-3"
                                placeholder="Insira uma senha" minlength="8">
                        </div>
                        <div class="input-group mb-4">
                            <button type="submit" class="btn btn-lg w-100 fs-6 botaoLogin fw-semibold">Login</button>
                        </div>
                    </form>
                    <div class="row">
                        <p>Não tem uma conta? <a href="./cadastro.php" class="link-cadastro">Cadastre-se</a></p>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="custom-cursor">
        <img src="assets/images/brush.svg" id="cursor" alt="Cursor personalizado">
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>