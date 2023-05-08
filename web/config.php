<?php

	//główny plik startowy
	
	$link = @mysqli_connect("localhost","zsti2","EciePecie666!","zsti2");
	if (!$link){
		$polaczenie = "Błąd: ".mysqli_connect_error();
		echo '<script>console.log("'.$polaczenie.'")</script>';
	} else {
		$polaczenie = "Baza się podłączyła";
		echo '<script>console.log("'.$polaczenie.'")</script>';
	}


    $pocz = strtotime("26 mar");
    $kon = strtotime("29 paź");
    $dzis = date("m d", strtotime("now"));
    if ($dzis > $pocz && $dzis < $kon){
        $time = "+ 2 hours";
    }else{
        $time = "+ 1 hour";
    }
?>