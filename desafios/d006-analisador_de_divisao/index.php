<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		$num1 = round($_POST['num1'] ?? 1);
		$num2 = round($_POST['num2'] ?? 2);
	?>
    <main>    
        <h1>
            Analisador de divisão
        </h1>
		<section>
			<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
				<label for="num1"><strong>Digite o dividendo</strong></label><br>
				<input type="number" name="num1" id="num1" step="any" value="<?=$num1?>"><br>
				<label for="num2"><strong>Digite o divisor</strong></label><br>
				<input type="number" name="num2" id="num2" step="any" min="1" value="<?=$num2?>"><br>
				<input type="submit" value="Enviar">
			</form>
		</section>
		<section>
			<?php
				$quociente = intdiv($num1, $num2);
				$resto = $num1 %  $num2;
			?>
			<table class="divisao">
				<tr>
					<td><?=$num1?></td>
					<td><?=$num2?></td>
				</tr>
				<tr>
					<td><?=$resto?></td>
					<td><?=$quociente?></td>
				</tr>
			</table>
		</section>
    </main>
</body>
</html>