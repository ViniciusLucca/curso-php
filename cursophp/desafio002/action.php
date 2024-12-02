<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="style.css">k
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            // print "<p>O número gerado foi <strong> " . rand(0, 100) .".</strong></p>"; 
            print "<p>O número gerado foi <strong> " . mt_rand(0, 100) . ".</strong><p>";
            // rand() => 1951, mais lento, menos seguro
            // mt_rand() => 1997, mais rápido, mais seguro
            // a partir do PHP 7.1, rand() é um apontamento pra mt_rand()
            // random_int() MAIS LENTO DE TODOS. gera números aleatórios CRIPTOGRAFICAMENTE SEGUROS
        ?>
        

        <button onclick="javascript:document.location.reload() ">Gerar outro</button>
    </main>
</body>
</html>