<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AstroInsight</title>
    <link type="image/png" sizes="32x32" rel="icon" href="../imgs/ico-cancer.png">
</head>
<body>
    
    <form id="signo-form" method="POST" action="show_zodiac_sign.php">

        <label for="data_nascimento">Digite sua data de nascimento:</label>
        <input type="text" id="data_nascimento" name="data_nascimento" placeholder="dd/mm/aaaa">
        <label for="signo">Escolha um signo:</label>
        <?php include('header.php'); 
            $xml = simplexml_load_file('signos.xml');

            if ($xml === false) {
                echo "Erro ao carregar o arquivo XML.";
                exit;
            }
        ?>

        <select id="signo" name="signo">
            <?php foreach ($xml->signo as $signo): ?>
                <option value="<?php echo htmlspecialchars($signo->signoNome); ?>">
                    <?php echo htmlspecialchars($signo->signoNome); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Consultar Signo</button>

    </form>
</body>
</html>