<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <h1>Desafio 3</h1>
    </header>
    <main>
        <section>
            <h1>Conversor de moedas v1.0</h1>
            <?php

    if (isset($_GET["reais"])) {

        $valorEmReais = (float)$_GET["reais"].".00" ;
        echo "O valor informado foi R$ $valorEmReais";
        echo "<br/>";
        $valorEmDolar = 5.22;
        $valorConvertido = $valorEmReais / $valorEmDolar;
        $valorConvertido = number_format($valorConvertido, 2, ",", ".");
        echo "Seus R$ $valorEmReais equivalem a US$ $valorConvertido Dolares";
        echo "<br/>";
        echo "*Cotação fixa de $valorEmDolar informada diretamento no código.";
    } else {
        echo "Informe um valor em Reais para realizar a conversão.";
        echo "<br/>";
        echo "*Cotação fixa de R$5,22 informada diretamento no código.";
        echo "<br/>";
    }
    ?>
            <form action="desafio3.php" method="get">
                <input type="text" name="reais" id="idreais">
                <input type="submit" value="Converter" id="idbotao">
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