<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra a Raiz Quadrada e a Raiz Cúbica</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <?php
            $numero = $_GET["numero"]?? 0;
            //A raiz quandrada de 64 é 8. A raiz cubica de 64 é 4.
?>
    <main>
        <h2>Descubra a Raiz Quadrada e a Raiz Cúbica</h2>
        <h3>Informe o número</h3>

        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="idnumero" value="0" step="any" required>
            <input type="submit" value="Calcular Raízes">

            <a href="../desafios">
                <button type="button">
                    <i class="fa fa-long-arrow-left"></i>
                    Opções
                </button>
            </a>

        </form>
        <section>
            <h2>Resultado Final</h2>
            <?php 
            echo "Analisando o número ";
            echo "<ul> <strong> valor </strong></ul>";
            echo "<br/>";
            echo "O valor da raiz quadrada é raizQuadrada";
            echo "<br/>";
            echo "O valor da raiz cubica é raizCubica";
            ?>
        </section>
    </main>

</body>

</html>