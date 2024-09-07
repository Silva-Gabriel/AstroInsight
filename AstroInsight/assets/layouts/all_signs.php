<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all-signs.css">
    <title>Astroinsight</title>
</head>
<body>

    <div>   
        <a href="index.php"><img src="../imgs/home.png" width="32px" alt="icone para voltar a página inicial"></a>
        <h1>Todos os Signos</h1>
    </div>
    <?php 
        $xml = simplexml_load_file('signos.xml');
        foreach ($xml -> signo as $signo)
        {
            echo "Signo: " . $signo -> signoNome . "<br>";
            echo "Descrição: " . $signo -> descricao . "<br>";
            echo "Data Início: " . $signo ->dataInicio . "<br>";
            echo "Data Fim: " . $signo ->dataFim . "<br>";
            echo "Elemento: " ; $signo -> elemento . "</br>";
        }
    ?>
</body>
</html>