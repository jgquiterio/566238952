<?php

	# Valores de faturamento por estado
	$faturamento = [
		"SP" => 67836.43,
		"RJ" => 36678.66,
		"MG" => 29229.88,
		"ES" => 27165.48,
		"Outros" => 19489.53
	];

	# Calculo total
	$total = array_sum($faturamento);

	# Calculando e exibindo o porcentual de cada estado
	echo "Percentual de cada estado: \n";

	foreach($faturamento as $estado => $valor) {
		$percentual = ($valor / $total) * 100;
		echo "$estado: " . number_format($percentual, 2, ",", "") . "%\n";
	}