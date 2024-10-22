<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="../ex004/style.css">
</head>

<body>
    <!-- Fomulário retroalimentado -->
    <?php 
    //Capturando os dadso do Formulário retroalimentado
        $valor1 = $_GET["v1"] ?? 0;
        $valor2= $_GET["v2"] ?? 0;
    ?>
    <main>
        <h1>Exercício 6 PHP</h1>
        <!-- action get the data from the form -->

        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <?="<h1>Exercício 6</h1>"?>
            <label type="number" for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="number" for="v2"> valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor1?>">
            <input type="submit" value="Calcular">

        </form>
    </main>
    <section>
        <h2>Resultado do calculo</h2>
        <?php
                $soma = $valor1 + $valor2;
                print "<p>O valor da soma entre $valor1 e $valor2 e $soma</p>";
            ?>

    </section>

</body>

</html>