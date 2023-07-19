<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		$num1 = $_POST['num1'] ?? 64;
	?>
    <main>    
        <h1>
            Calculadora de raizes
        </h1>
		<section>
			<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
				<label for="num1"><strong>Digite um número</strong></label><br>
				<input type="number" name="num1" id="num1" step="any" value="<?=$num1?>"><br>
				<input type="submit" value="Enviar">
			</form>
		</section>
		<section>
			<h2>Resultado final</h2>
			<?php
				print("Analisando o <strong>número $num1 </strong>, temos: <br>");
				$quadrada = $num1 ** 0.5;
				$cubica = $num1 ** (1/3);
				print("<ul><li>A sua raiz quadrada é: $quadrada</li>");
				print("<li>A sua raiz cúbica é: $cubica</li><ul>");

			?>
		</section>
    </main>
</body>
</html>