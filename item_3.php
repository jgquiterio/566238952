<?php

	# lendo arquivo json
	$file = "files/dados.json";
	$conteudo = file_get_contents($file);
	$faturamentoDiario = json_decode($conteudo, true);

	# Inicialiando
	$menor = null;
	$maior = null;
	$soma = 0;
	$diasValidos = 0;

	# Calcular soma, maior e menor
	foreach($faturamentoDiario as $dia) {
		$valor = $dia['valor'];

		# Ignorar dias sem faturamento
		if ($valor > 0) {
			if ($menor == null || $valor < $menor) {
				$menor = $valor;
			}

			if ($maior === null || $valor > $maior) {
				$maior = $valor;
			}

			$soma += $valor;
			$diasValidos++;
		}
	}

	# Calculando a media
	$media = $soma / $diasValidos;

	# Quantidade de dias acima da media
	$diasAcimaDaMedia = 0;
	foreach ($faturamentoDiario as $dia) {
		if($dia['valor'] > $media) {
			$diasAcimaDaMedia++;
		}
	}

	# resultado
	echo "Menor faturamento diario: R$ " . number_format($menor, 2, ',', '.') . "\n";
	echo "Maior faturamento diario: R$ " . number_format($maior, 2, ',', '.') . "\n";
	echo "Dias com faturamento acima da média: $diasAcimaDaMedia \n";