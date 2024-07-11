<?php

	$carro = [
		'cor' => 'branco',
		'tipo' => 'sedan',
		'portas' => 4,
		'ar_condicionado' => true,
		'marca' => 'BMW',
		'rodas' => 4,
		'teto_solar' => true,
		'velocidade_max' => 300,
		'blindado' => false
	];

	print_r($carro);
	echo "<br>";

	$marca = $carro['marca'];
	$velocidade_maxima = $carro['velocidade_max'];

	echo "O carro é da marca $marca e atinge no maximo $velocidade_maxima km/h";
	echo "<br>";

	echo $carro['cor'];
	echo "<br>";
	echo $carro['portas'];
	echo "<br>";
	echo $carro['ar_condicionado'];
