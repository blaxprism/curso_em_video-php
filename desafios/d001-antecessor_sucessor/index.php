<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>    
        <h1>
            Informe um número
        </h1>
        <form action="resultado.php" method="post">
            <label for="numero"><strong>Digite um número:</strong></label><br>
            <input type="number" name="num" id="num"><br>
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>