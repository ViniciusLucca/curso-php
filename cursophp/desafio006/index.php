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
        $dividendo = $_GET['dividendo'] ?? 1; //$valor1 = v1 || 0 (coalescência)
        $divisor = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php
        print "<table style='text-align:center; border: none'>
                    <tr>
                        <td><h1>$dividendo</h1></td>
                        <td style='border-left: 3px solid black; border-bottom: 3px solid black'><h1>$divisor</h1></td>
                    </tr>

                    <tr>
                        <td style='text-decoration: underline '><h1>".$dividendo % $divisor."</h1></td>
                        <td style='border-left: 3px solid black'><h1>". intdiv($dividendo, $divisor) ."</h1></td>
                    </tr>
                </table>"; ?>
    </section>
</body>

</html>