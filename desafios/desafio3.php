<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas v1.0</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <h1>Conversor de moedas v1.0</h1>
    </header>
    <main>
        <section>
            <h1>Conversor de moedas v1.0</h1>
            <?php

    if (isset($_GET["reais"])) {

        $valorEmReais = (float)$_GET["reais"];
        echo "O valor informado foi <strong>R$ $valorEmReais </strong>";
        echo "<br/>";
        $valorEmDolar = 5.22;
        $valorConvertido = $valorEmReais / $valorEmDolar;
        $valorConvertido = number_format($valorConvertido, 2, ",", ".");
        //$padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        //$valorConvertido = numfmt_format_currency($padrao, $valorConvertido, 'BRL');

        echo "Seus <strong>R$ $valorEmReais </strong>equivalem a <strong>US$ $valorConvertido </strong> Dolares";
        echo "<br/>";
        echo "*Cotação fixa de <strong> R$ $valorEmDolar </strong> informada diretamento no código.";
    } else {
        echo "Informe um valor em <strong>Reais</strong> para realizar a conversão.";
        echo "<br/>";
        echo "*Cotação fixa de<strong> R$5,22 </strong> informada diretamento no código.";
        echo "<br/>";
    }
    ?>
            <form action="desafio3.php" method="get">
                <input type="number" step="any" name="reais" id="idreais">
                <input type="submit" value="Converter" id="idbotao">
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