<?php

	
	echo 1556.56;
	echo "<br>";
	echo 12.12;
	echo "<br>";

	$a = -12.5;
	
	echo $a;
	echo "<br>";

	if(is_float($a)) {
		echo "Sim, podemos ter floats negativos!";
	}

	if(is_int($a)) {
		echo "É um inteiro";
	}