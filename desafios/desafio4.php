<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <h1>Desafio 4</h1>
    </header>
    <main>
        <section>
            <h1>Conversor de moedas v2.0</h1>
            <?php

//Aqui o if isset checa se a variável existe, então pega o valor digitado pelo usuário pelo name do input
    if (isset($_GET["reaisDesafio4"])) {
//Agora o $valorEmReais vai receber o valor digitado pelo usuário pelo name do input
        $valorEmReaisV2 = (float)$_GET["reaisDesafio4"] . ".00";
//Agora o $url vai receber o link da API do Banco Central
        $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='07-10-2024'&@dataFinalCotacao='07-10-2024'";
        echo "<br/>";
//O curl_init serve para iniciar a API, é uma funcionalidade do PHP
        $ch = curl_init();
        echo "<br/>";
/*O curl_setopt tem três parâmetros, o primeiro é o $ch, o segundo é o CURLOPT_URL e o terceiro é o $url, que vai receber o link da API, o curl_setopt serva para configurar os parâmetros da API */
        curl_setopt($ch, CURLOPT_URL, $url);
//A pós o CURLOPT_URL serve para fazer a chamada da API
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//O CURLOPT_RETURNTRANSFER serve para retornar o conteúdo da API
        $response = curl_exec($ch);
//O reponse vai receber o curl_exec que vai retornar o conteúdo da API passada em $ch
        curl_close($ch);
//curl_close serve para fechar a API
        $data = json_decode($response, true);
//json_decode serve para decodificar o conteúdo da API que foi passado em $response
        $cotacaoVenda = $data['value'][0]['cotacaoVenda'];
/*O $cotacaoVenda vai receber o valor da cotação da API, $data['value'][0]['cotacaoVenda'] acessa o valor da cotação na API e o $cotacaoVenda vai receber o valor da cotação*/
        $valorConvertidoV2 = $valorEmReaisV2 / $cotacaoVenda;
        $valorConvertidoV2 = number_format($valorConvertidoV2, 2, ",", ".");

        echo "<br/>";
        echo "O valor informado foi R$ " . $valorEmReaisV2;
        echo "<br/>";
        echo "Seus R$ " . $valorEmReaisV2 . " equivalem a US$ " . $valorConvertidoV2 . " Dolares";
        echo "<br/>";
        echo "*Cotação obtida diretamente do site do Banco Central.";
        echo "<br/>";
      } else {
        echo "Informe um valor em Reais para realizar a conversão.";
        echo "<br/>";
        echo "<br/>";
        echo "*Cotação obtida diretamente do site do Banco Central.";
        echo "<br/>";
        echo "<br/>";
      }
      ?>
            <form action="desafio4.php" method="get">
                <input type="text" name="reaisDesafio4" id="idreaisv2">
                <input type="submit" value="Converter" id="idbotaov2">
                <a href="../desafios">
                    <button type="button">
                        <i class="fa fa-long-arrow-left"></i>
                        Desafios
                    </button>
                </a>
            </form>
        </section>
    </main>
</body>