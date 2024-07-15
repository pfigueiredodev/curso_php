<?php

	$x = 10;

	$y = &$x;

	echo $x;
	echo "<br>";
	echo $y;

	$y = 15;

	echo "<br>";
	echo "Atribuição após ref";
	echo "<br>";
	echo $x;
	echo "<br>";
	echo $y;

	$x = 20;

	echo "<br>";
	echo "Atribuição após ref 2";
	echo "<br>";
	echo $x;
	echo "<br>";
	echo $y;
	echo "<br>";

	$nome = "Pedro";

	$nome2 = &$nome;

	echo $nome;
	echo "<br>";
	echo $nome2;
	echo "<br>";

	$nome2 = "João";

	echo $nome;
	echo "<br>";
	echo $nome2;
	echo "<br>";
