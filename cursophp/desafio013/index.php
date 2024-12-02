<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" qcontent="widtr=device-widtr, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="../modelo_css.css">
</head>

<body>
    <?php
        //capturando os dados do formulário retroalimentado
        $valor = $_GET['valor'] ?? 0; //$valor1 = v1 || 0 (coalescência)
        $sobra = $valor;
        $cem = (int) ($valor/100);
        $sobra = $valor % 100;
        $cinquenta = (int)($sobra/50);
        $sobra = $valor % 50;
        $dez = (int)($sobra/10);
        $sobra = $valor % 10;
        $cinco = (int)($sobra/5);
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="valor">Qual valor você deseja sacar?</label>
            <input type="number" name="valor" id="valor" value="<?= $valor ?>">
            
            <input type="submit" value="Sacar  ">
        </form>
    </main>
    <section id="resultado">
        <h2>Saque de R$ <?= number_format($valor, 2)?> realizado</h2>
        <?php
        print "<p>O caixa eletrônico vai te entregar as seguintes notas: 
        <ul>
            <li><strong>". $cem ."</strong> notas de R$ 100,00.</li>
            
            <li><strong>". $cinquenta ."</strong> notas de R$ 50,00.</li>
            
            <li><strong>". $dez ."</strong> notas de R$ 10,00.</li>
            
            <li><strong>". $cinco ."</strong> notas de R$ 5,00.</li>
            
        </ul>
        </p>"; ?>
    </section>
</body>

</html>