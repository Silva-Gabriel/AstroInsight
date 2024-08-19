<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AstroInsight</title>
    <link type="image/png" sizes="32x32" rel="icon" href="../imgs/ico-cancer.png">
    <link rel="stylesheet" href="../css/style.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="../imgs/ico-cancer.png" class="rounded me-2" alt="warn logo">
            <strong class="me-auto">Bootstrap</strong>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Preencha os dados de nascimento
        </div>
    </div>

    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="../imgs/ico-cancer.png" alt="Logo" width="45" height="30" class="d-inline-block align-text-top">AstroInsight</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
            </ul>
            <form id="signo-form" method="POST" action="show_zodiac_sign.php" class="d-flex" role="search">
                <input class="form-control me-2" id="data_nascimento" name="data_nascimento" type="search" placeholder="dd/mm/yyyy" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <!-- Background image -->
    <div class="background-image">
        <img src="../imgs/zodiac-signs.png" alt="cancer logo">
    </div>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>