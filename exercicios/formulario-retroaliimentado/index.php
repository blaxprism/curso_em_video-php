<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		$num1 = $_REQUEST['num1'] ?? 0.00;
		$num2 = $_REQUEST['num2'] ?? 0.00;
	?>
    <main>    
        <h1>
            Formulário retroalimentado
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="num1"><strong>Digite um número real</strong></label><br>
            <input type="number" name="num1" id="num1" step="any" value="<?=$num1?>"><br>
			<label for="num2"><strong>Digite um número real</strong></label><br>
            <input type="number" name="num2" id="num2" step="any" value="<?=$num1?>"><br>
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>