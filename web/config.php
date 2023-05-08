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
?>