<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar o valor antecessor e sucessor</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <h1>Mostrar o valor antecessor e sucessor</h1>
    </header>
    <main>
        <section>
            <?php 
        
        echo "<h1>Resultado Final</h1>";
        if (isset($_GET["valor"])) {
        $valor = $_GET["valor"];
        $valor = (int)$valor;
        $valorAntecessor = $valor - 1;
        $valorSucessor = $valor + 1;
        echo "O valor informado foi <strong> $valor </strong>";
        echo "<br/>";
        echo "O antecessor é <strong> $valorAntecessor </strong>";
        echo "<br/>";
        echo "O sucessor é <strong>$valorSucessor </strong>";             
        } else {
            echo "informe um valor";
        }
        ?>

            <form action="desafio1.php" method="get" value="calcular">
                <input type="number" step="any" name="valor" id="idvalor" placeholder="Exemplo: 100">
                <input type="submit" value="Calcular">

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

</html>