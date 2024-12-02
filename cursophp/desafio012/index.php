<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtr=device-widtr, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="../modelo_css.css">
</head>

<body>
    <?php
        //capturando os dados do formulário retroalimentado
        $segundos = $_GET['segundos'] ?? 0; //$valor1 = v1 || 0 (coalescência)
        $sobra = $segundos; //$valor1 = v1 || 0 (coalescência)
        $reajuste = $_GET['reajuste'] ?? 0; //$valor1 = v1 || 0 (coalescência)
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?= $segundos ?>">
            
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <?php
        // $semanas = intdiv($segundos, 3600*24*7);
        // $semanas = $segundos / (3600 * 24 * 7) - $segundos % (3600 * 24 * 7);
        // $dias = intdiv($segundos,3600*24) - ($semanas * 7);
        // $horas = intdiv($segundos, 3600) - ($semanas * 7 * 24);
        // $minutos = intdiv($segundos, 60) - ($semanas * 7 * 24 * 60);

        //total de semanas 
        $semanas = (int) ($sobra / 604_800);
        $sobra = $sobra % 604_800;
        //total de dias
        $dias = (int) ($sobra / 86_400);
        $sobra = $sobra % 86_400;
        //total de horas
        $horas = (int) ($sobra / 3600);
        $sobra = $sobra % 3600;
        //total de minutos
        $minutos = (int) ($sobra / 60);
        $sobra = $sobra % 60;

        print "<p>Analisando o valor que você digitou, $segundos segundos equivalem a um total de: 
        <ul>
            <li>". $semanas ." semanas</li>
            <li>". $dias . " dias</li>
            <li>". $horas ." horas</li>
            <li>". $minutos ." minutos</li>
            <li>". $sobra." segundos</li>
        </ul>
        </p>"; ?>
    </section>
</body>

</html>