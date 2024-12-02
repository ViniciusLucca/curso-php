<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];
            echo "<pre>Olá, <strong>$nome $sobrenome</strong>!</pre>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar à página anterior</a></p>
    </main>
</body>
</html>