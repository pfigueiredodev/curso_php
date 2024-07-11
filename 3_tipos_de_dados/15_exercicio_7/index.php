
<?php

	$pessoa = [
		'nome' => 'Pedro',
		'idade' => 26,
		'profissao' => 'Desenvolvedor',
		'formacao' => true
	];

	$maiorIdade = 19;

	// desafio 
	if($pessoa['idade'] >= $maiorIdade) {
		echo "A pessoa é maior de idade! <br>";
	}