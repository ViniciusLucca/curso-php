<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtr=device-widtr, initial-scale=1.0">
    <title>Raízes Numéricas</title>
    <link rel="stylesheet" href="../modelo_css.css">
</head>

<body>
    <?php
        //capturando os dados do formulário retroalimentado
        $num = $_GET['num'] ?? 0; //$valor1 = v1 || 0 (coalescência)
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="num">Número:</label>
            <input type="number" name="num" id="num" value="<?= $num ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
        $padrão = numfmt_create("pt_br", NumberFormatter::CURRENCY);

        print "<p>Analisando o <strong>número $num</strong>, temos: 
            <ul>
                <li>A sua raiz quadrada é <strong>". number_format(pow($num, 1/2), 3)."</strong></li>
                <li>A sua raiz cúbica é <strong>". number_format(pow($num, 1/3), 3)."</strong></li>
            </ul> </p>"; ?>
    </section>
</body>

</html>