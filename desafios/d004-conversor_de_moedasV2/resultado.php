<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Desafio 4</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<main>	
		<h1>
			Conversor de moedas V2.0
		</h1>
		<section>
			<?php 
				//recebimento do valor da carteira do usuário
				$real = (float) $_POST['num'] ?? 0;
				//cotação do dólar
				$inicio = date("d-m-Y", strtotime("-7 days"));
				$fim = date("d-m-Y");
				$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$format=json&$select=cotacaoCompra';
				$dados = json_decode(file_get_contents($url),true);
				
				$cota = $dados['value'][0]['cotacaoCompra'];
				//conversão
				$dolar = $real / $cota;

				$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

				print("Seus <strong>". numfmt_format_currency($padrao, $real, "BRL"). " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . " </strong><br>");
				print("<h6>*Cotação de ". numfmt_format_currency($padrao, $cota, "BRL") . " informada pela API do banco central</h6>");
			?>
		</section>
		<button onclick="javascript:window.location.href='index.php'"> 
			&#x2B05; Voltar
		</button>
	</main>
</body>
</html>