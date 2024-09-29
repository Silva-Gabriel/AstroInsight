<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/horoscope.css">
    <title>Astroinsight</title>
</head>

<body>
    <?php include('header.php'); ?>
    <h1>Horóscopo Mensal</h1>
    <?php
    $xml = simplexml_load_file('signos.xml');
    $mesAtual = date('m');

    function ShowHoroscope($signo, $horoscopeLove, $horoscopeFriendly, $horoscopeProfessional, $horoscopeFamily, $horoscopeHealth, $horoscopeReflective)
    {
        echo "<ul>";
        echo "<h2>" . $signo->signoNome . "</h1><br>";
        echo "<p>" . "<strong class='vida-amorosa'>" . "Vida Amorosa:  " . "</strong>" . $horoscopeLove . "</p>";
        echo "<p>" . "<strong class='amizade'>" . "Amizades:  " . "</strong>" . $horoscopeFriendly . "</p>";
        echo "<p>" . "<strong class='profissional'>" . "Trabalho:  " . "</strong>" . $horoscopeProfessional . "</p>";
        echo "<p>" . "<strong class='familia'>" . "Família:  " . "</strong>" . $horoscopeFamily . "</p>";
        echo "<p>" . "<strong class='saude'>" . "Saúde:  " . "</strong>" . $horoscopeHealth . "</p>";
        echo "<h2><b><i>" . "" . $horoscopeReflective . "</i></b></h2>";
        echo "</ul>";
    }

    echo "<section>";
        foreach ($xml->signo as $signo) {
        if ($mesAtual == '01') 
        {
            ShowHoroscope($signo, $signo->horoscopeLoveJan, $signo->horoscopeFriendlyJan, $signo->horoscopeProfessionalJan, $signo->horoscopeFamilyJan, $signo->horoscopeHealthJan, $signo->horoscopeReflectiveJan);
        } else if ($mesAtual == '02') {
            ShowHoroscope($signo, $signo->horoscopeLoveFeb, $signo->horoscopeFriendlyFeb, $signo->horoscopeProfessionalFeb, $signo->horoscopeFamilyFeb, $signo->horoscopeHealthFeb, $signo->horoscopeReflectiveFeb);
        } else if ($mesAtual == '03') {
            ShowHoroscope($signo, $signo->horoscopeLoveMar, $signo->horoscopeFriendlyMar, $signo->horoscopeProfessionalMar, $signo->horoscopeFamilyMar, $signo->horoscopeHealthMar, $signo->horoscopeReflectiveMar);
        } else if ($mesAtual == '04') {
            ShowHoroscope($signo, $signo->horoscopeLoveApr, $signo->horoscopeFriendlyApr, $signo->horoscopeProfessionalApr, $signo->horoscopeFamilyApr, $signo->horoscopeHealthApr, $signo->horoscopeReflectiveApr);
        } else if ($mesAtual == '05') {
            ShowHoroscope($signo, $signo->horoscopeLoveMay, $signo->horoscopeFriendlyMay, $signo->horoscopeProfessionalMay, $signo->horoscopeFamilyMay, $signo->horoscopeHealthMay, $signo->horoscopeReflectiveMay);
        } else if ($mesAtual == '06') {
            ShowHoroscope($signo, $signo->horoscopeLoveJun, $signo->horoscopeFriendlyJun, $signo->horoscopeProfessionalJun, $signo->horoscopeFamilyJun, $signo->horoscopeHealthJun, $signo->horoscopeReflectiveJun);
        } else if ($mesAtual == '07') {
            ShowHoroscope($signo, $signo->horoscopeLoveJul, $signo->horoscopeFriendlyJul, $signo->horoscopeProfessionalJul, $signo->horoscopeFamilyJul, $signo->horoscopeHealthJul, $signo->horoscopeReflectiveJul);
        } else if ($mesAtual == '08') {
            ShowHoroscope($signo, $signo->horoscopeLoveAug, $signo->horoscopeFriendlyAug, $signo->horoscopeProfessionalAug, $signo->horoscopeFamilyAug, $signo->horoscopeHealthAug, $signo->horoscopeReflectiveAug);
        } else if ($mesAtual == '09') {
            ShowHoroscope($signo, $signo->horoscopeLoveSep, $signo->horoscopeFriendlySep, $signo->horoscopeProfessionalSep, $signo->horoscopeFamilySep, $signo->horoscopeHealthSep, $signo->horoscopeReflectiveSep);
        } else if ($mesAtual == '10') {
            ShowHoroscope($signo, $signo->horoscopeLoveOct, $signo->horoscopeFriendlyOct, $signo->horoscopeProfessionalOct, $signo->horoscopeFamilyOct, $signo->horoscopeHealthOct, $signo->horoscopeReflectiveOct);
        } else if ($mesAtual == '11') {
            ShowHoroscope($signo, $signo->horoscopeLoveNov, $signo->horoscopeFriendlyNov, $signo->horoscopeProfessionalNov, $signo->horoscopeFamilyNov, $signo->horoscopeHealthNov, $signo->horoscopeReflectiveNov);
        } else {
            ShowHoroscope($signo, $signo->horoscopeLoveDec, $signo->horoscopeFriendlyDec, $signo->horoscopeProfessionalDec, $signo->horoscopeFamilyDec, $signo->horoscopeHealthDec, $signo->horoscopeReflectiveDec);
        }
    }
    echo "</section>";
    ?>
</body>

</html>