<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/png" sizes="54x54" rel="icon" href="../imgs/cancer-icon.png">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script defer src="../js/script.js"></script>
</head>

<body>
    <!-- Barra de navegação -->
    <nav class="navbar nav-underline navbar-expand-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php $_SERVER['PHP_SELF'] ?>"><img class="home-icon" src="../imgs/cancer.png" alt="Logo" width="55" height="40" class="d-inline-block align-text-center">AstroInsight</a>
            <div class="collapse navbar-collapse" style="height: 30px;" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <ul class="nav nav-underline">
                        <li class="nav-item">
                            <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" aria-current="page" href="index.php">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'horoscope.php' ? 'active' : ''; ?>" aria-current="page" href="horoscope.php">Horóscopo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'all_signs.php' ? 'active' : ''; ?>" aria-current="page" href="all_signs.php">Ver Todos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'show_zodiac_sign.php' ? 'active' : 'disabled'; ?>" aria-current="page" href="all_signs.php">Resultado</a>
                        </li>
                    </ul>
                </ul>
                <form id="signo-form" method="POST" action="show_zodiac_sign.php" class="d-flex" role="search">
                    <input class="form-control form-control-sm me-2" id="data_nascimento" name="data_nascimento" type="search" placeholder="dd/mm/yyyy" maxlength="10" aria-label="Search">
                    <button class="btn btn-dark btn-sm" id="search-button" type="submit"><img class="search-img" src="../imgs/search-icon.png" width="30px"></button>
                </form>
                <!-- Modal -->
                <div class="modal fade" id="alertModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="../imgs/attention-icon.png" width="30px">
                                <h4 class="modal-title" id="alertModalLabel">AÇÃO NECESSÁRIA!</h4>
                                <button type="button" class="close btn btn-md" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Por favor, insira uma data de nascimento válida.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success btn-md" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>