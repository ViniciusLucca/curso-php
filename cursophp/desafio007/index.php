<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtr=device-widtr, initial-scale=1.0">
    <title>Anatomia de Divisão</title>
    <link rel="stylesheet" href="../modelo_css.css">
</head>

<body>
    <?php
        //capturando os dados do formulário retroalimentado
        $salário = $_GET['salario'] ?? 0; //$valor1 = v1 || 0 (coalescência)
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="salario">Salário (R$):</label>
            <input type="number" name="salario" id="salario" value="<?= $salário ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
        $padrão = numfmt_create("pt_br", NumberFormatter::CURRENCY);
        
        print "<p>Quem recebe um salário de ". numfmt_format_currency($padrão, $salário, "BRL")." ganha <strong>". intdiv($salário, 1380)." salários mínimos</strong> + ". numfmt_format_currency($padrão, $salário % 1380, "BRL") .".</p>"; ?>
    </section>
</body>

</html>