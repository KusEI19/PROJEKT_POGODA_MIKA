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


    $pocz = mktime(0,0,0,3,26,0);
    $kon = mktime(0,0,0,10,29,0);
    $dzis = mktime(0,0,0,date("m,d", strtotime("now")),0);
    if ($dzis >= $pocz && $dzis <= $kon){
        $time = "+ 2 hours";
    }else{
        $time = "+ 1 hour";
    }
?>