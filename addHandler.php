<?php
	if(isset($_GET["submit"])) {
		$game = trim($_GET["game"]);
		$price = trim($_GET["price"]);
		$year = trim($_GET["year"]);
		$plat = trim($_GET["plat"]);
		$img = trim($_GET["img"]);
		
		$input = "\n".$game."\t".$year."\t".$price."\t".$plat."\t".$img;
		$filePoitner = fopen("data.txt", "a+");
		fwrite($filePoitner, $input);
		fclose($filePoitner);
	}
?>