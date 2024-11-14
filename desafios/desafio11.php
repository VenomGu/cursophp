<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de preços</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="valor">Preço do Produto (R$):</label>
            <input type="number" name="valor" id="idvalor" step="0.01" placeholder="Exemplo: 89,90" required>
            <label for="reaj">Qual será o reaj do reajuste? (<strong><span id="p">50</span>%</strong>)
            </label>
            <input min="0" max="100" type="range" name="reaj" id="reaj" step="1" oninput="mudarValor()">
            <input type="submit" value="Reajustar" onclick="mudarValor()">
            <a href="../desafios">
                <button type="button">
                    <i class="fa fa-long-arrow-left"></i>
                    Opções
                </button>
            </a>
        </form>
    </main>
    <section>
        <h2>
            Resultado do reajuste
        </h2>
        <?php 
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        $valor = isset($_REQUEST["valor"]) ? (float)$_REQUEST["valor"] : (float)(0) ?? 0;
        $reaj = isset($_REQUEST["reaj"]) ? (int)$_REQUEST["reaj"] : (int)(50) ?? 0;
        $reajuste = ($valor * $reaj) / 100 ?? 0;
        $valorFinal = $valor + $reajuste ?? 0;
        if ($valor == 0) {
            isset($_REQUEST["reaj"]) == 0;
            isset($_REQUEST["valor"]) == 0;
            echo "Por favor, informe um valor e </br> reajuste a barra para realizar o reajuste";
        } else {
        echo "Valor inicial <strong>". numfmt_format_currency($padrao, $valor, 'BRL'). "</strong>";
        echo "</br>";
        echo "Percentual de reajuste <strong>". numfmt_format_currency($padrao, $reajuste, 'BRL'). "</strong>";
        echo "</br>";
        echo "Com o reajuste de <strong>". $reaj ."%</strong>, o valor final é <strong>". numfmt_format_currency($padrao, $valorFinal, 'BRL')."</strong>";
        }
        ?>
    </section>
    <script>
    //Método para mudar o valor do reajuste usando JavaScript
    function mudarValor() {
        p.innerText = reaj.value;
    }
    </script>

</body>

</html>