<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtr=device-widtr, initial-scale=1.0">
    <title>Média Aritmética e Ponderada</title>
    <link rel="stylesheet" href="../modelo_css.css">
</head>

<body>
    <?php
        //capturando os dados do formulário retroalimentado
        $num1 = $_GET['num1'] ?? 0; //$valor1 = v1 || 0 (coalescência)
        $peso1 = $_GET['peso1'] ?? 0; //$valor1 = v1 || 0 (coalescência)

        $num2 = $_GET['num2'] ?? 0; //$valor1 = v1 || 0 (coalescência)
        $peso2 = $_GET['peso2'] ?? 0; //$valor1 = v1 || 0 (coalescência)
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="num1">Número 1:</label>
            <input type="number" name="num1" id="num1" value="<?= $num1 ?>">
            <label for="peso1">Peso 1:</label>
            <input type="number" name="peso1" id="peso1" value="<?= $peso1 ?>">
            <label for="num2">Número 2:</label>
            <input type="number" name="num2" id="num2" value="<?= $num2 ?>">
            <label for="peso2">Peso 2:</label>
            <input type="number" name="peso2" id="peso2" value="<?= $peso2 ?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
        print "<p>Analisando os valores $num1 e $num2 <strong></strong>, temos: 
            <ul>
                <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ". number_format(($num1 + $num2)/2, 2)."</li>
                <li>A <strong>Média Aritmética Ponderda</strong> entre os valores é igual a ". number_format(($num1 * $peso1 + $num2 * $peso2)/($peso1 + $peso2), 2)."</li>
            </ul> </p>"; ?>
    </section>
</body>

</html>