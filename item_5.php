<?php

	# String original
	$original = "Teste desenvolvedor2";

	# Função para inverter a string
	function inverterString($str)
	{
		$invertida = '';
		$length = 0;

		# Calcular o tamanho da string
		while (isset($str[$length])) {
			$length++;
		}

		# Inverter de tras pra frente
		for ($i = $length - 1; $i >= 0; $i--) {
			$invertida .= $str[$i];
		}

		return $invertida;
	}

	echo "Original: $original \n";
	echo "Invertida: " . inverterString($original) . "\n";