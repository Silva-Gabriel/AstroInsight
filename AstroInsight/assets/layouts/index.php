<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AstroInsight</title>
    <link type="image/png" sizes="54x54" rel="icon" href="../imgs/cancer-icon.png">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script defer src="../js/script.js"></script>
</head>

<body>
    <nav class="navbar nav-underline navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php $_SERVER['PHP_SELF'] ?>"><img class="home-icon" src="../imgs/cancer.png" alt="Logo" width="65" height="50" class="d-inline-block align-text-center">AstroInsight</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <ul class="nav nav-underline">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Horóscopo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Ver Todos</a>
                        </li>
                    </ul>
                </ul>
                <form id="signo-form" method="POST" action="show_zodiac_sign.php" class="d-flex" role="search">
                    <input class="form-control me-2" id="data_nascimento" name="data_nascimento" type="search" placeholder="dd/mm/yyyy" maxlength="10" aria-label="Search">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="agua">
        <h3>Water</h3>
        <img src="../imgs/home-câncer.png" width="64" height="64" alt="logo câncer home">
        <img src="../imgs/home-escorpião.png" width="60" height="60" alt="logo escorpião home">
        <img src="../imgs/home-peixes.png" width="58" height="58" alt="logo peixes home">
    </div>
    <div class="fogo">
        <h3>Fire</h3>
        <img src="../imgs/home-sagitário.png" width="50" height="50" alt="logo sagitário home">
        <img src="../imgs/home-áries.png" width="50" height="50" alt="logo áries home">
        <img src="../imgs/home-leão.png" width="68" height="68" alt="logo leão home">
    </div>
    <div class="terra">
        <h3>Earth</h3>
        <img src="../imgs/home-touro.png" width="54" height="54" alt="logo touro home">
        <img src="../imgs/home-virgem.png" width="50" height="50" alt="logo virgem home">
        <img src="../imgs/home-capricórnio.png" width="50" height="50" alt="logo capricórnio home">
    </div>
    <div class="ar">
        <h3>Air</h3>
        <img src="../imgs/home-gêmeos.png" width="54" height="54" alt="logo gêmeos home">
        <img src="../imgs/home-libra.png" width="58" height="58" alt="logo libra home">
        <img src="../imgs/home-aquário.png" width="50" height="50" alt="logo aquário home">
    </div>
    <section class="intro">
        <div class="container">
            <div class="signos">
                <h2>O que são Signos?</h2>
                <p>Os signos são doze divisões do zodíaco, cada uma representando uma faixa de 30 graus da eclíptica, que é o caminho aparente do Sol através do céu ao longo do ano. Cada signo é associado a certas características e traços de personalidade, e eles são usados para criar horóscopos que oferecem insights sobre a personalidade e os eventos futuros.</p>
            </div>
            <div class="importancia">
                <h2>Importância da Astrologia</h2>
                <p>A astrologia é uma prática antiga que busca entender a influência dos corpos celestes sobre a vida e o comportamento humano. Embora a ciência moderna trate a astrologia como uma pseudociência, muitas pessoas acreditam que ela pode oferecer insights valiosos sobre suas vidas e personalidades.</p>
                <p>A importância da astrologia pode ser vista de várias maneiras:</p>
                <ul>
                    <li><strong>Autoconhecimento:</strong> Ajuda os indivíduos a compreenderem melhor suas características pessoais, pontos fortes e áreas de crescimento.</li>
                    <li><strong>Orientação e Reflexão:</strong> Oferece uma perspectiva sobre desafios e oportunidades na vida, ajudando as pessoas a refletirem sobre suas escolhas e decisões.</li>
                    <li><strong>Conexão com o Cosmos:</strong> Proporciona uma sensação de conexão com o universo e a natureza, promovendo um senso de pertencimento e propósito.</li>
                    <li><strong>Tradição e Cultura:</strong> Mantém vivas tradições e práticas culturais que têm sido parte da história humana por milênios.</li>
                </ul>
            </div>
            <div class="elementos-intro">
                <div class="descricao">
                    <h2>Elementos dos Signos do Zodíaco</h2>
                    <p>Os signos do zodíaco são agrupados em quatro elementos principais, cada um simbolizando diferentes aspectos da personalidade e da vida. Abaixo, explicamos cada elemento e suas características, utilizando analogias para ilustrar melhor suas qualidades.</p>
                </div>
                <div class="elementos-1">
                    <h2>Fogo</h2>
                    <p>O elemento Fogo simboliza energia, entusiasmo e transformação. Assim como o fogo é intenso e pode iluminar ou destruir, os signos de Fogo são apaixonados e têm uma abordagem ardente e dinâmica em relação à vida. Eles são conhecidos por sua vitalidade e impulso.</p>
                    <h2>Terra</h2>
                    <p>O elemento Terra representa praticidade, estabilidade e solidez. Assim como a terra fornece uma base firme e é essencial para o crescimento das plantas, os signos de Terra são confiáveis e estruturados, oferecendo suporte e realismo em suas abordagens. Eles valorizam a segurança e a consistência.</p>
                </div>
                <div class="elementos-2">
                    <h2>Ar</h2>
                    <p>O elemento Ar é associado à comunicação, intelecto e movimento. Assim como o ar é invisível, mas essencial para a vida e está em constante movimento, os signos de Ar são comunicativos, curiosos e adaptáveis. Eles valorizam a liberdade mental e a troca de ideias.</p>
                    <h2>Água</h2>
                    <p>O elemento Água simboliza emoção, intuição e fluidez. Assim como a água pode se adaptar a qualquer forma e é essencial para a vida, os signos de Água são profundos e empáticos, capazes de se adaptar às emoções e de entender os sentimentos dos outros. Eles são conhecidos por sua sensibilidade e adaptabilidade.</p>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>