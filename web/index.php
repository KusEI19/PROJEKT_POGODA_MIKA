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
            echo ('najnowsza wartość temperatury: '.$wiersz['wartosc'].'°C, czas pobrania danych: '.date("m-d-Y H:i:s"  ,strtotime($wiersz['kiedy_pobrano'].$time)));
        };

        echo '<br>';

        $zapytanie2 = 'SELECT * FROM `wilgotnosc` WHERE `id` = (SELECT MAX(`id`) FROM `wilgotnosc`);';
        $wynik2 = mysqli_query($link, $zapytanie2);
        foreach ($wynik2 as $wiersz2){
            echo ('najnowsza wartość wilgotności: '.$wiersz2['wartosc'].'%, czas pobrania danych: '.date("m-d-Y H:i:s"  ,strtotime($wiersz['kiedy_pobrano'].$time)));
        };

        echo '<br>';

        echo '<table border="1" style="float:left;">';
            $zapytanie3 = 'SELECT * FROM `termometr`;';
            $wynik3 = mysqli_query($link, $zapytanie3);
            echo '<tr><th>Temperatura</th><th>data pobrania</th></tr>';
            foreach ($wynik3 as $wiersz){
                echo ('<tr><td>'.round($wiersz['wartosc'], 2).'°C</td><td>'.date("m-M-Y H:i:s"  ,strtotime($wiersz['kiedy_pobrano'].$time)).'</td></tr>');
            };
        echo '</table>';
        echo '<table border="1" style="float:left;">';
            $zapytanie4 = 'SELECT * FROM `wilgotnosc`;';
            $wynik4 = mysqli_query($link, $zapytanie4);
            echo '<tr><th>Wilgotność</th><th>data pobrania</th></tr>';
            foreach ($wynik4 as $wiersz){
                echo ('<tr><td>'.round($wiersz['wartosc'], 2).'%</td><td>'.date("m-M-Y H:i:s"  ,strtotime($wiersz['kiedy_pobrano'].$time)).'</td></tr>');
            };
        echo '</table>';
        echo '<div style="clear:both"></div>'
    ?>
    <form action="index.php" method="post"><input type="submit" value="Odśwież dane"></form>
</body>
</html>