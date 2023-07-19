<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Desafio 5</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<main>	
		<h1>
			Analisador de números reais
		</h1>
		<section>
			<?php 
				$num = $_POST['num'] ?? 0;
				$int = (int) $num;
				$fracionaria = $num - $int;

				print("<p>Analisando o número ". number_format($num, 3, ",", ".") ." informado pelo usuário</p>");
				print("<ul><li>A parte inteira do número é: $int</li>");
				print("<li>A parte fracionária do número é: ". number_format($fracionaria, 3, ",", ".") ."</li></ul>");
			?>
		</section>
		<button onclick="javascript:window.location.href='index.php'"> 
			&#x2B05; Voltar
		</button>
	</main>
</body>
</html>