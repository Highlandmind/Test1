<?php
	//Ustawianie tytułu strony
	$pageTitle = "Śpuldrew";	
	
	//Otwieranie pliku z szablonem
	$fileScheme = fopen("lot/layout.html", "r");
	
	//Wczytywanie szablonów
	$pageLayout = "";
	while (!feof($fileScheme)) {
		$pageLayout .= fgets($fileScheme);
	}
	
	fclose($fileScheme);
	
	//Dodawanie tytułu strony
	$completePage = "";
	$completePage = str_replace("%page_title%", $pageTitle, $pageLayout);
	
	//Zmiana zawartości strony
	$completePage = str_replace("%content%", "<p>To jest nowa zawartość strony:D</p>", $completePage);
	
	//Wyświetlanie strony
	print($completePage);		
?>