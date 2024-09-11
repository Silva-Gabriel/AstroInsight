<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/allSigns.css">
    <title>Astroinsight</title>
</head>

<body>
    <nav class="navbar nav-underline navbar-expand-sm fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php $_SERVER['PHP_SELF'] ?>"><img class="home-icon" src="../imgs/cancer.png" alt="Logo" width="55" height="40" class="d-inline-block align-text-center">AstroInsight</a>
            <div class="collapse navbar-collapse" style="height: 30px;" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <ul class="nav nav-underline">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="horoscope.php">Horóscopo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="all_signs.php">Ver Todos</a>
                        </li>
                    </ul>
                </ul>
                <form id="signo-form" method="POST" action="show_zodiac_sign.php" class="d-flex" role="search">
                    <input class="form-control form-control-sm me-2" id="data_nascimento" name="data_nascimento" type="search" placeholder="dd/mm/yyyy" maxlength="10" aria-label="Search">
                    <button class="btn btn-dark btn-sm" id="search-button" type="submit"><img class="search-img" src="../imgs/search-icon.png" width="30px"></button>
                </form>
            </div>
        </div>
    </nav>
    <h1>Todos os Signos</h1>
        <?php
        $xml = simplexml_load_file('signos.xml');
        $count = 1;
        $total = count($xml->signo);
        foreach ($xml->signo as $signo) {

            if ($count < $total)
            {
                echo "<div class='content'>";
            }
            else
            {
                echo "<div class='ot-content'>";
            }
            echo "<p>";
            echo "<strong>Signo: </strong>" . $signo->signoNome . "<br>";
            echo "<strong>Descrição: </strong>"  . $signo->descricao . "<br>";
            echo "<strong>Data Início: </strong>" . $signo->dataInicio . "<br>";
            echo "<strong>Data Fim: </strong>" . $signo->dataFim . "<br>";
            echo "<strong>Elemento: </strong>" . $signo->elemento . "</br>";
            echo "<strong>Símbolo: </strong>" . $signo->simbol;
            echo "</p>";
            echo "</div>";
            $count++;
        }
        ?>
</body>

</html>