<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>    
        <h1>
            Números aleatórios
        </h1>
        <section>
            Gerando números aleatórios de 0 a 100...<br>
            <?php 
                $num = mt_rand(0,100);
                print("O número gerado foi: <strong>$num</strong>");
            ?>
            <br><br>
            <button onclick="javascript:window.location.href='index.php'"> 
                Gerar novo
            </button>
        </section>
    </main>
</body>
</html>