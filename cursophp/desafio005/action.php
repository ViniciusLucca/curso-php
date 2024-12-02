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
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
        <?php 
            $num = $_REQUEST["num"] ?? 0;//?? 0 => operador de coalescência (caso o $_GET não retorne nada)
            $inteiro = intdiv($num,1);
            //$inteiro = (int) $num; <= converte o número pra inteiro
            $frac = $num - $inteiro;
            print "<p>Analisando o número <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usuário:</p>";
            print "<ul><li>A Parte inteira do número é <strong>".number_format($inteiro, 0,",", ".")."</strong> <li>A parte fracionária do número é <strong>".(number_format($frac,3, ",", "."))."</strong></ul>"            
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>