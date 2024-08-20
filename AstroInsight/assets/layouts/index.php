<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AstroInsight</title>
    <link type="image/png" sizes="54x54" rel="icon" href="../imgs/cancer-icon.png">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <nav class="navbar nav-underline navbar-expand-lg" style="background-color: transparent;">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php $_SERVER['PHP_SELF']?>"><img class="home-icon" src="../imgs/cancer.png" alt="Logo" width="45" height="30" class="d-inline-block align-text-center">AstroInsight</a>
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
    <section class="home">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-2">
                    <a href="<?php $_SERVER['PHP_SELF']?>"><img src="../imgs/capricornio-icon.png" alt="logo capricórnio"></a>
                    <h2>Capricórnio</h2>
                </div>
                <div class="col-2">
                    <a href="<?php $_SERVER['PHP_SELF']?>"><img src="../imgs/aries-icon.png" alt="logo áries"></a>
                    <h2>Áries</h2>
                </div>
                <div class="col-2">
                    <a href="<?php $_SERVER['PHP_SELF']?>"><img src="../imgs/cancer-icon.png" alt="logo câncer"></a>
                    <h2>Câncer</h2>
                </div>
                <div class="col-2">
                    <a href="<?php $_SERVER['PHP_SELF']?>"><img src="../imgs/escorpiao-icon.png" alt="logo escorpião"></a>
                    <h2>Escorpião</h2>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-2">
                <a href="<?php $_SERVER['PHP_SELF']?>"><img src="../imgs/gemeos-icon.png" alt="logo aquário"></a>
                <h2>Aquário</h2>
                </div>
                <div class="col-2">
                    <a href="<?php $_SERVER['PHP_SELF']?>"><img src="../imgs/leao-icon.png" alt="logo leão"></a>
                    <h2>Leão</h2>
                </div>
                <div class="col-2">
                    <a href="<?php $_SERVER['PHP_SELF']?>"><img src="../imgs/peixes-icon.png" alt="logo peixes"></a>
                    <h2>Peixes</h2>
                </div>
                <div class="col-2">
                    <a href="<?php $_SERVER['PHP_SELF']?>"><img src="../imgs/sagitario-icon.png" alt="logo sagitário"></a>
                    <h2>Sagitário</h2>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-2">
                    <a href="<?php $_SERVER['PHP_SELF']?>"><img src="../imgs/touro-icon.png" alt="logo touro"></a>
                    <h2>Touro</h2>
                </div>
                <div class="col-2">
                    <a href="<?php $_SERVER['PHP_SELF']?>"><img src="../imgs/virgem-icon.png" alt="logo virgem"></a>
                    <h2>Virgem</h2>
                </div>
                <div class="col-2">
                    <a href="<?php $_SERVER['PHP_SELF']?>"><img src="#" alt="logo capricórnio"></a>
                    <h2>...</h2>
                </div>
                <div class="col-2">
                    <a href="<?php $_SERVER['PHP_SELF']?>"><img src="#" alt="logo capricórnio"></a>
                    <h2>...</h2>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-2">
                    <a href="<?php $_SERVER['PHP_SELF']?>"><img src="#" alt="logo capricórnio"></a>
                    <h2>...</h2>
                </div>
                <div class="col-2">
                    <a href="<?php $_SERVER['PHP_SELF']?>"><img src="#" alt="logo capricórnio"></a>
                    <h2>...</h2>
                </div>
                <div class="col-2">
                   <a href="<?php $_SERVER['PHP_SELF']?>"><img src="#" alt="logo capricórnio"></a>
                    <h2>...</h2>
                </div>
                <div class="col-2">
                    <a href="<?php $_SERVER['PHP_SELF']?>"><img src="#" alt="logo capricórnio"></a>
                    <h2>...</h2>
                </div>
            </div>
        </div>
    </section>
</body>

</html>