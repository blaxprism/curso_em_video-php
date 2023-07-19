<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Desafio 3</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<main>	
		<h1>
			Conversor de moedas V1.0
		</h1>
		<section>
			<?php 
				//recebimento do valor da carteira do usuário
				$real = (float) $_POST['num'] ?? 0;
				//cotação do dólar
				$cota = 4.87;
				//conversão
				$dolar = $real / $cota;

				//forma de fazer alteração dos caracteres
				//print("Seus <strong>R\$". number_format($real, 2, ",", "."). " equivalem a US\$ " . number_format($dolar, 2, ",", ".") . " </strong><br>");

				//forma de fazer com internacionalização
				//definindo o padrão de lingua do código
				$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

				print("Seus <strong>". numfmt_format_currency($padrao, $real, "BRL"). " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . " </strong><br>");
				print("<h6>*Cotação fixa de ". numfmt_format_currency($padrao, $cota, "BRL") . " informada diretamente no código</h6>");
			?>
		</section>
		<button onclick="javascript:window.location.href='index.php'"> 
			&#x2B05; Voltar
		</button>
	</main>
</body>
</html>