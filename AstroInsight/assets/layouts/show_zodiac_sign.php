<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Zodíaco</title>
    <link type="image/png" sizes="54x54" rel="icon" href="../imgs/cancer-icon.png">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <nav>
        <a href="index.php"><img src="../imgs/home.png" width="54" height="54" alt="home icon"></a>
    </nav>
    <?php include('header.php');

        // Função para converter data para o formato DateTime com um ano específico
        function convertToDate($dateString, $year) {
            return DateTime::createFromFormat('d/m/Y', $dateString . '/' . $year);
        }

        // Função para verificar se uma data está dentro de um intervalo
        function isDateInRange($date, $startDate, $endDate) {
            return $date >= $startDate && $date <= $endDate;
        }

        // Carregar o arquivo XML
        $xml = simplexml_load_file('signos.xml');

        if ($xml === false) {
            echo "Erro ao carregar o arquivo XML.";
            exit;
        }


        // Receber a data de nascimento do usuário do formulário
        $dataNascimento = $_POST['data_nascimento'];

        // Tentar criar um objeto DateTime com a data fornecida
        $dataNascimentoObj = DateTime::createFromFormat('d/m/Y', $dataNascimento);

        if ($dataNascimentoObj === false) {
            echo "Data de nascimento inválida. Use o formato dd/mm/aaaa.";
            exit;
        }

        $signoEncontrado = null;

        foreach ($xml->signo as $signo) {
            // Obter as datas de início e fim do signo e converter para o ano da data de nascimento
            $anoNascimento = $dataNascimentoObj->format('Y');
            $dataInicio = convertToDate($signo->dataInicio, $anoNascimento);
            $dataFim = convertToDate($signo->dataFim, $anoNascimento);
            
            // Ajustar o final do signo para o próximo ano se necessário
            if ($dataFim < $dataInicio) {
                $dataFim->modify('+1 year');
            }
            
            // Verificar se a data de nascimento está dentro do intervalo
            if (isDateInRange($dataNascimentoObj, $dataInicio, $dataFim)) {
                $signoEncontrado = $signo;
                break;
            }
        }

        if ($signoEncontrado !== null) {

            $caminhoImagem = "../imgs/" . strtolower($signoEncontrado->signoNome) . "-icon.png";
            
            echo "<h1>Seu signo é: " . htmlspecialchars($signoEncontrado->signoNome) . "</h1>";
            echo "<img src='" . htmlspecialchars($caminhoImagem) . "' alt='Imagem do signo " . htmlspecialchars($signoEncontrado->signoNome) . "'>";
            echo "<p><strong>Data de Início:</strong> " . htmlspecialchars($signoEncontrado->dataInicio) . "</p>";
            echo "<p><strong>Data de Fim:</strong> " . htmlspecialchars($signoEncontrado->dataFim) . "</p>";
            echo "<p><strong>Descrição:</strong> " . htmlspecialchars($signoEncontrado->descricao) . "</p>";
        } else {
            echo "<h1>Não foi possível determinar o signo.</h1>";
        }
    
    ?>

</body>
</html>