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
    <?php include('header.php'); ?>
    <h1>Todos os Signos</h1>
    <?php
    $xml = simplexml_load_file('signos.xml');
    $count = 1;
    $total = count($xml->signo);
    foreach ($xml->signo as $signo) {

        if ($count < $total) {
            echo "<div class='content'>";
        } else {
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>