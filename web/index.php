<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POGODA</title>
</head>
<body>
    <?php
        include("config.php");

        $zapytanie = 'SELECT * FROM `termometr` WHERE `id` = (SELECT MAX(`id`) FROM `termometr`);';
        $wynik = mysqli_query($link, $zapytanie);
        echo ('najnowsza wartość tęperatury: '.$wynik['wartosc'].', czas pobrania danych: '.$wynik['kiedy_pobrano']);
    ?>
</body>
</html>