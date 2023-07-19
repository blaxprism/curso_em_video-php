<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		$num1 = $_POST['num1'] ?? 1320;
	?>
    <main>    
        <h1>
            Salário Minimo
        </h1>
		<section>
			<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
				<label for="num1"><strong>Digite o seu salário</strong></label><br>
				<input type="number" name="num1" id="num1" step="any" value="<?=$num1?>"><br>
				<input type="submit" value="Enviar">
			</form>
		</section>
		<section>
			<h2>Resultado final</h2>
			<?php
				//forma de fazer com internacionalização
				//definindo o padrão de lingua do código
				$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
				$quantidade = intdiv($num1, 1320);
				$resto = $num1 % 1320;

				echo "Você recebe $quantidade Salário(s) minimo(s)<br>";
				if($resto > 0){
					echo "Além disso você recebe mais " . numfmt_format_currency($padrao, $resto, "BRL");
				}
			?>
		</section>
    </main>
</body>
</html>