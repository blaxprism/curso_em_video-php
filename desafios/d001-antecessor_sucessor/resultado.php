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
        <h1>Resultado final</h1>
        <section>
            <?php 
                $num = (int) $_POST['num'] ?? 0;
                $antecessor = $num - 1;
                $sucessor = $num + 1;
                print("O número inserido foi: <strong>$num</strong><br>");
                print("O <em>antecessor</em> dele é: <strong>$antecessor</strong><br>");
                print("O <em>sucessor</em> dele é: <strong>$sucessor</strong><br>");
            ?>
        </section>
        <button onclick="javascript:window.location.href='index.php'"> &#x2B05; Voltar
        </button>
    </main>
</body>
</html>