<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		$segundos = $_POST['segundos'] ?? 788_645;
	?>
    <main>    
        <h1>
            Calculadora de tempo
        </h1>
		<section>
			<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
				<label for="segundos"><strong>Digite tempo em segundos</strong></label><br>
				<input type="number" name="segundos" id="segundos" step="any" value="<?=$segundos?>"><br>
				<input type="submit" value="Enviar">
			</form>
		</section>
		<section>
			<h2>Resultado final</h2>
			<?php
				$semanas = intdiv($segundos, 604_800);
				$resto_semanas = $segundos % 604_800;
				$dias = intdiv($resto_semanas, 86_400);
				$resto_dias = $resto_semanas % 86_400;
				$horas = intdiv($resto_dias, 3_600);
				$resto_horas = $resto_dias % 3_600;
				$minutos = intdiv($resto_horas, 60);
				$segundos_finais = $resto_horas % 60;
				
			?>
			<p>Analisando o valor que você digitou de <?=$segundos ?> segundos, equivalem a: </p>
			<ul>
				<li><?="$semanas Semanas"?></li>
				<li><?="$dias Dias "?></li>
				<li><?="$horas Horas"?></li>
				<li><?="$minutos Minutos"?></li>
				<li><?="$segundos_finais Segundos"?></li>
			</ul>
		</section>
    </main>
</body>
</html>