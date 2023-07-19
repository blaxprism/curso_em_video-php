<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		$ano_nascimento = $_POST['ano_nascimento'] ?? 1900;
		$ano_previsto = $_POST['ano_previsto'] ?? 2077;
		$ano = date("Y");
	?>
    <main>    
        <h1>
        	Calculo de idade
        </h1>
		<section>
			<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
				<label for="ano_nascimento"><strong>Digite o Ano que você nasceu</strong></label><br>
				<input type="number" name="ano_nascimento" id="ano_nascimento" step="1" max="<?=($ano-1)?>" value="<?=$ano_nascimento?>"><br>
				<label for="ano_previsto"><strong>Digite um ano aleatório para saber quantos anos você terá nele</strong></label><br>
				<input type="number" name="ano_previsto" id="ano_previsto" step="1" value="<?=$ano_previsto?>"><br>
				<p>Atualmente estamos em: <?=$ano?></p>
				<input type="submit" value="Enviar">
			</form>
		</section>
		<section>
			<h2>Resultado final</h2>
			<?php
				$idade_atual = $ano - $ano_nascimento;
				$idade_prevista = $ano_previsto - $ano_nascimento;
				print("Você faz $idade_atual no ano de 2023<br>");
				print("Você faz $idade_prevista no ano de $ano_previsto<br>");
			?>
		</section>
    </main>
</body>
</html>