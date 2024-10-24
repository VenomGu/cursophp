<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas v2.0</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <h1>Conversor de moedas v2.0</h1>
    </header>
    <main>
        <section>
            <h1>Conversor de moedas v2.0</h1>
            <?php
            $inicio = date("m-d-Y" , strtotime("-7 days"));
            $fim = date("m-d-Y");
    if (isset($_GET["reaisDesafio4"])) {
        $valorEmReaisV2 = $_GET["reaisDesafio4"];
        
        $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$inicio'&@dataFinalCotacao='$fim'";
        
        $data = json_decode(file_get_contents($url), true);
        $cotacaoVenda = $data['value'][0]['cotacaoCompra'];
        $valorConvertidoV2 = $valorEmReaisV2 / $cotacaoVenda;
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        
        echo "O valor informado foi <strong> " . numfmt_format_currency($padrao, $valorEmReaisV2, 'BRL') . "</strong>";
        echo "<br/>";
        echo "Seus <strong> " . numfmt_format_currency($padrao, $valorEmReaisV2, 'BRL') . " </strong>equivalem a <strong> " . numfmt_format_currency($padrao, $valorConvertidoV2, 'USD') ."</strong> Dolares";
        echo "<br/>";
        echo "*Cotação de dólar em reais hoje e obtida diretamente do site do <strong>Banco Central </strong> é <strong>". numfmt_format_currency($padrao, $cotacaoVenda, 'BRL') ." </strong>";
        echo "<br/>";
        } else {
        echo "Quantos <strong>Reais</strong> você deseja converter? ";
        echo "<br/>";
        echo "*Cotação obtida diretamente do site do <strong> Banco Central. </strong>";
        echo "<br/>";
    }
    ?>
            <form action="desafio4.php" method="get">
                <input type="number" step="any" name="reaisDesafio4" id="idreaisv2" placeholder="Exemplo: 83,60">
                <input type="submit" value="Converter" id="idbotaov2">
                <a href="../desafios">
                    <button type="button">
                        <i class="fa fa-long-arrow-left"></i>
                        Opções
                    </button>
                </a>
            </form>
        </section>
    </main>
</body>