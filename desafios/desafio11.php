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
            <label for="reajuste">Preço do Produto (R$):</label>
            <input type="number" name="reajuste" id="idreajuste" value="0">
            <label for="percentual">Qual será o percentual do reajuste? (%)</label>
            <!-- Colocar barra deslizante para o percentual -->
            <input type="submit" value="Reajustar">

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
        echo "O produto que custava VALOR, com o PORCENTAGEM de aumento vai passar a custar R$\ REAIS a partir de agora.";
        ?>
    </section>

</body>

</html>