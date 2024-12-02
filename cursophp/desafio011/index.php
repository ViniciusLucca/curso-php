<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtr=device-widtr, initial-scale=1.0">
    <title>Reajustador de preços</title>
    <link rel="stylesheet" href="../modelo_css.css">
</head>

<body>
    <?php
        //capturando os dados do formulário retroalimentado
        $valor = $_GET['valor'] ?? 0; //$valor1 = v1 || 0 (coalescência)
        $reajuste = $_GET['reajuste'] ?? 0; //$valor1 = v1 || 0 (coalescência)
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="valor">Preço do Produto (R$):</label>
            <input type="number" name="valor" id="valor" value="<?= $valor ?>">
            <label for="reajuste">Qual será o percentual de reajuste? ( <strong><span id="reajuste">0</span>%</strong> )</label>
            <input type="range" name="reajuste" id="reajuste" min=0 max=100 onchange="document.getElementById('reajuste').innerText = reajuste.value" value="<?= $reajuste ?>">
            
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
        print "<p>O produto que custava R$".number_format($valor, 2).", com <strong>$reajuste% de aumento</strong> vai passar a custar <strong>R$".number_format($valor + $valor * $reajuste / 100, 2) . "</strong> a partir de agora</p>"; ?>
    </section>
</body>

</html>