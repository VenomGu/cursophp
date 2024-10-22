<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="segundos">Qaul é o total de segundos?</label>
            <input type="number" step="any" name="segundos" id="idsegundos">
            <input type="submit" value="Calcular">

            <a href="../desafios">
                <button type="button">
                    <i class="fa fa-long-arrow-left"></i>
                    Opções
                </button>
            </a>
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <?php 
    echo "Analisando o valor que você digitou, X SEGUNDOS equivalem a um total de: <ol> X SEMANAS <br/> X DIAS <br/> X HORAS <br/> X MINUTOS <br/> X SEGUNDOS </ol>";
    // É divisão e resto de divisão

    ?>

    </section>


</body>

</html>