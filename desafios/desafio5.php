<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de moedas</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <h1>Analisador de moedas</h1>
    </header>
    <main>
        <section>
            <h1>Analisador de moedas</h1>
            <?php
            if (isset($_GET["reaisD5"]) && $_GET["reaisD5"] > 0) {
                $valorEmReaisD5 = $_GET["reaisD5"];
                $valorInteiro = (int)$valorEmReaisD5;
                $valorFracionario = $valorEmReaisD5 - $valorInteiro;
                echo "Analisando o valor <strong> $valorEmReaisD5 </strong>informado pelo usuário...";
                echo "<br/>";
                echo "<li>A parte inteira do número é <strong>". number_format($valorInteiro, 0, ",", ".")."</strong>. </li>";
                echo "<li>A parte fracionária do número é <strong>". number_format($valorFracionario, 3, ",", ".") ."</strong> </li>";
            } else if ( isset($_GET["reaisD5"]) == 0) {
                echo "O analisador separa o valor inteiro";
                echo "<br/> e o fracionário do número informado pelo usuário.";
                echo "<br/>";
            } else {
                echo "O valor não pode ser <strong>zero</strong>.";
            }
            
            ?>
            <form action="desafio5.php" method="get">
                <input type="number" step="any" name="reaisD5" id="idreaisD5" placeholder="Exemplo: 245,678">
                <input type="submit" value="Analisar" id="idbotaoD5">
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