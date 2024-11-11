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
            $numero = $_GET["numero"]?? 1;
            $raizQuadrada = sqrt($numero);
            $raizCubica = $numero ** (1/3);

        ?>
    <main>
        <h2>Descubra a Raiz Quadrada e a Raiz Cúbica</h2>
        <h3>Informe o número</h3>

        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="idnumero" placeholder="Ex: 64" step="any" min="1" required>
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
            echo "<ul> <strong> " . $numero ." </strong></ul>";
            echo "<br/>";
            echo "<ul><li>A raiz <strong>quadrada</strong> do número informado é <strong> ".number_format($raizQuadrada, 3, ",", ".") ." </strong></li>";
            echo "<br/>";
            echo "<li>A raiz <strong>cubica</strong> do número informado é <strong>". number_format($raizCubica, 3 , ",", ".") ."</strong> </li></ul>";
            ?>
        </section>
    </main>

</body>

</html>