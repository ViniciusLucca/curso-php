<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtr=device-widtr, initial-scale=1.0">
    <title>Calculadora de Idade</title>
    <link rel="stylesheet" href="../modelo_css.css">
</head>

<body>
    <?php
        //capturando os dados do formulário retroalimentado
        $nascimento = $_GET['nascimento'] ?? date("Y"); //$valor1 = v1 || 0 (coalescência)
        $ano_alvo = $_GET['ano_alvo'] ?? date("Y"); //$valor1 = v1 || 0 (coalescência)
    ?>
    <main>
        <h1>Calculando a susa idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento" max="<?= $ano_alvo - 1?>" value="<?= $nascimento ?>">
            <label for="ano_alvo">Quer saber a sua idade em que ano? (atualmente estamos em <strong><?=date("Y")?></strong>)</label>
            <input type="number" name="ano_alvo" id="ano_alvo" value="<?= $ano_alvo ?>">
            
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
        print "<p>Quem nasceu em $nascimento faz <strong>".$ano_alvo - $nascimento." anos</strong> em $ano_alvo!</p>"; ?>
    </section>
</body>

</html>