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
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php 
            $real = $_GET["num"];
            $dólar = $real / 5.22;
            
            //biblioteca intl [INTERNALIZZATION PHP]
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            // $num = $_GET["num"];
            // print "<p>Seus R\$$num equivalem a U\$<strong>".number_format($num/5.22, 2)."*</strong></p>";
            // print "<p><strong>*Cotação fixa de R\$5,22</strong> informada diretamente no código.</p>";

            print "<p>Seus </p>" . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dólar, "USD");
            
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>