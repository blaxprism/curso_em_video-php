<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		$preco = $_POST['preco'] ?? 1;
		$porcentagem = $_POST['porcentagem'] ?? 1;
	?>
    <main>    
        <h1>
            Reajuste de preço
        </h1>
		<section>
			<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
				<label for="preco"><strong>Digite o preço atual do produto</strong></label><br>
				<input type="number" name="preco" id="preco" min="1" step="0.01" value="<?=$preco?>"><br>
				<label for="porcentagem"><strong>Selecione a porcentagem que será aplicada <br>
				(<span id="percent">?</span>)</strong></label><br>
				<input type="range" name="porcentagem" id="porcentagem" min="1" value="<?=$porcentagem?>" style="padding: 0;" oninput="MudaValor()"><br>
				<input type="submit" value="Enviar">
			</form>
		</section>
		<section>
			<h2>Resultado final</h2>
			<?php
				//forma de fazer com internacionalização
				//definindo o padrão de lingua do código
				$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
				$adicional = $preco * $porcentagem / 100;
				$preco_final = $preco + $adicional;

				print("O produto que custava: ". numfmt_format_currency($padrao, $preco, "BRL")."<br>");
				print("tem valor adicionado de:" .numfmt_format_currency($padrao, $adicional, "BRL"). "<br>");
				print("O preço final é: ". numfmt_format_currency($padrao, $preco_final, "BRL"). "<br>");

			?>
		</section>
		<script>
			MudaValor();

			function MudaValor(){
				percent.innerText = porcentagem.value;
			}
		</script>
    </main>
</body>
</html>