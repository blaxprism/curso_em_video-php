<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		$num1 = $_POST['num1'] ?? 1;
		$num2 = $_POST['num2'] ?? 2;
		$peso1 = $_POST['peso1'] ?? 1;
		$peso2 = $_POST['peso2'] ?? 1;
	?>
    <main>    
        <h1>
            Médias Aritméticas
        </h1>
		<section>
			<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
				<label for="num1"><strong>Digite o primeiro valor</strong></label><br>
				<input type="number" name="num1" id="num1" step="any" value="<?=$num1?>"><br>
				<label for="peso1"><strong>Digite o primeiro peso</strong></label><br>
				<input type="number" name="peso1" id="peso1" step="any" value="<?=$peso1?>"><br>
				<label for="num2"><strong>Digite o segundo valor</strong></label><br>
				<input type="number" name="num2" id="num2" step="any" value="<?=$num2?>"><br>
				<label for="peso2"><strong>Digite o segundo peso</strong></label><br>
				<input type="number" name="peso2" id="peso2" step="any" value="<?=$peso2?>"><br>
				<input type="submit" value="Enviar">
			</form>
		</section>
		<section>
			<h2>Resultado final</h2>
			<?php
				$media_simples = ($num1 + $num2) / 2;
				$media_ponderada = ($num1 * $peso1 + $num2 * $peso2) / ($peso1 + $peso2);
				print("A média simples entre $num1 e $num2 é: $media_simples<br>");
				print("A média ponderada entre $num1 com peso $peso1, e $num2 com peso $peso2 é de: $media_ponderada");
			?>
		</section>
    </main>
</body>
</html>