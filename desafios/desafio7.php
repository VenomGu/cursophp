<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe o seu salário</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="salario">Salário (R$):</label>
            <input type="number" name="salario" id="idSalário" placeholder="Exemplo: 5000,00" step="any"
                required></label>
            <p>Considerando o salário mínimo de <strong> R$ 1.380,00 </strong></p>
            <input type="submit" value="Calcular">

            <a href="../desafios">
                <button type="button">
                    <i class="fa fa-long-arrow-left"></i>
                    Opções
                </button>
            </a>
        </form>
        <h1>Resultado Final</h1>
        <section>
            <?php 
        //Desafio, pegar o salário minimo, identificar quantos salários minimos dá e o valor de quebra.
        if (isset($_GET["salario"])) {
        $salario = (float)$_GET["salario"];
        $salariosMinimos = (float)0;
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        $salarioMinimoAtual = (float)1380;
        $salariosMinimos =  $salario / $salarioMinimoAtual;
        $resto = $salario % $salarioMinimoAtual;
        $restoCheck = $salario > $salarioMinimoAtual ? $resto : 0;
        echo "Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, 'BRL') . " ganha " . (int)$salariosMinimos . " por  salários mínimos. <br/> O valor quebrado é de " . numfmt_format_currency($padrao, $restoCheck, 'BRL');
        } else {
            echo "informe um valor";
        }
        ?>
        </section>
    </main>

</body>

</html>