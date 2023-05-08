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

        $zapytanie = 'SELECT * FROM `termometr` WHERE `id`;';
        $wynik = mysqli_query($link, $zapytanie);
        foreach ($wynik as $wiersz){
            $podzapytanie = 'SELECT MAX(`id`) FROM `termometr`;';
            $podwynik = mysqli_query($link, $podzapytanie);
            if ($wiersz['id'] = $podwynik['id']){
                echo ('najnowsza wartość tęperatury: '.$wiersz['wartosc'].', czas pobrania danych: '.$wiersz['kiedy_pobrano']);
            };
        };
    ?>
</body>
</html>