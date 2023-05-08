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
        foreach ($wynik as $wiersz){
            echo ('najnowsza wartość tęperatury: '.$wiersz['wartosc'].', czas pobrania danych: '.$wiersz['kiedy_pobrano']);
        };

        echo '<br>';

        $zapytanie2 = 'SELECT * FROM `wilgotnosc` WHERE `id` = (SELECT MAX(`id`) FROM `wilgotnosc`);';
        $wynik2 = mysqli_query($link, $zapytanie2);
        foreach ($wynik2 as $wiersz2){
            echo ('najnowsza wartość wilgotności: '.$wiersz2['wartosc'].', czas pobrania danych: '.$wiersz2['kiedy_pobrano']);
        };

        echo '<table border="1">';
            $zapytanie3 = 'SELECT * FROM `termometr`;';
            $wynik3 = mysqli_query($link, $zapytanie3);
            $zapytanie4 = 'SELECT * FROM `wilgotnosc`;';
            $wynik4 = mysqli_query($link, $zapytanie4);
            echo '<tr><th>Tęperatura</th><th>data pobrania</th></tr>';
            foreach ($wynik3 as $wiersz){
                echo ('<tr><td>'.$wiersz['wartosc'].'</td><td>'.$wiersz['kiedy_pobrano'].'</td></tr>');
            };
            echo '<tr><th>Wilgotność</th><th>data pobrania</th></tr>';
            foreach ($wynik4 as $wiersz){
                echo ('<tr><td>'.$wiersz['wartosc'].'</td><td>'.$wiersz['kiedy_pobrano'].'</td></tr>');
            };
        echo '</table>';
    ?>
</body>
</html>