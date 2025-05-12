<?php
	# Numero escolhido
	$numero = 21;

	# Inicio do fibonacci
	$a = 0;
	$b = 1;

	# Validar se pertence a sequencia
	$pertence = false;

	while ($a <= $numero) {
		if ($a === $numero) {
			$percente = true;
			break;
		}	

		# Proximo numero da sequencia
		$prox = $a + $b;
		$a = $b;
		$b = $prox;

	}

	if ($pertence) {
		echo "O numero $numero pertence a sequencia de fibonacci. \n";
	} else {
		echo "O numero $numero NÃO pertence a sequencia de fibonacci. \n";
	}