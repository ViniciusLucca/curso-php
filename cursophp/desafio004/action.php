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
            $num = $_GET["num"];
            
            $inicio = date("m-d-Y", strtotime("-7 days"));
            
            $fim = date("m-d-Y");
            
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            $cotação = $dados["value"][0]["cotacaoCompra"];
            
            print "<p>Seus R\$$num equivalem a U\$<strong>".number_format($num/$cotação, 2)."</strong></p>";
            print "<p><strong>*Cotação fixa de R\$" . number_format($cotação, 2) . "</strong> diretamente informada do <strong>Banco Central do Brasil</strong>.</p>";
            echo "<p>Seus <strong>" . numfmt_format_currency(numfmt_create("pt-br", NumberFormatter::CURRENCY), $num, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency(numfmt_create("pt-br", NumberFormatter::CURRENCY), $num/$cotação, "USD") . "</strong></p>" 
            
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>