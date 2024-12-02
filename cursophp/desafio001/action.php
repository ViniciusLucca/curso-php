<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antecessor e Sucessor</title>
</head>
<body>
    <header>
        <h1>Resultado final</h1>
    </header>
    <main>
        <?php 
            $num = $_GET["num"];
            print "<p>O número escolhido foi <strong>$num</strong></p>";
            print "<p>O seu antecessor é " . ($num - 1)."</p>";
            print "<p>O seu sucecessor é " . ($num + 1)."</p>";
            
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>