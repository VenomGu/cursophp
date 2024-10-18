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
        $valorEmReaisV2 = (float)$_GET["reaisDesafio4"];
        
        $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$inicio'&@dataFinalCotacao='$fim'";
        
        $data = json_decode(file_get_contents($url), true);
        $cotacaoVenda = $data['value'][0]['cotacaoCompra'];
        $cotacaoVenda = number_format($cotacaoVenda, 4, ",", "."); 
        $valorEmReaisV2 = $valorEmReaisV2;
        $valorConvertidoV2 = $valorEmReaisV2 / $cotacaoVenda;
        $valorConvertidoV2 = number_format($valorConvertidoV2, 2, ",", ".");
        echo "O valor informado foi <strong> R$ $valorEmReaisV2 </strong>";
        echo "<br/>";
        echo "Seus <strong>R$ $valorEmReaisV2 </strong>equivalem a <strong>US$ $valorConvertidoV2 </strong> Dolares";
        echo "<br/>";
        echo "*Cotação obtida diretamente do site do <strong>Banco Central é R$ " . number_format($cotacaoVenda, 2, ",", ".") . "</strong>";
        echo "<br/>";
        } else {
        echo "Informe um valor em Reais para realizar a conversão.";
        echo "<br/>";
        echo "<br/>";
        echo "*Cotação obtida diretamente do site <strong> do Banco Central. </strong>";
        echo "<br/>";
    }
    ?>
            <form action="desafio4.php" method="get">
                <input type="text" name="reaisDesafio4" id="idreaisv2" placeholder="Exemplo: 83,60">
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