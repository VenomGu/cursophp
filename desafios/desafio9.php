<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritiméticas</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <main>
        <h2>Médias Aritiméticas</h2>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="valor1">1º Valor: </label>
            <input type="number" name="valor1" id="idvalor1" placeholder=Exemplo:6 required>
            <label for="peso1">1º Peso(%): </label>
            <input type="number" name="peso1" id="idpeso1" placeholder=Exemplo:40% required>
            <label for="valor2">2º Valor: </label>
            <input type="number" name="valor2" id="idvalor2" placeholder=Exemplo:8 required>
            <label for="peso2">2º Peso(%): </label>
            <input type="number" name="peso2" id="idpeso2" placeholder=Exemplo:60% required>
            <input type="submit" value="Calcular médias">
            <a href="../desafios">
                <button type="button">
                    <i class="fa fa-long-arrow-left"></i>
                    Opções
                </button>
            </a>
        </form>
        <?php
            $valor1 = $_GET["valor1"]?? 0;
            $valor2 = $_GET["valor2"]?? 0;
            $peso1 = $_GET["peso1"]?? 0;
            $peso2 = $_GET["peso2"]?? 0;
            $mediaSimples = ($valor1 + $valor2) / 2;
            $mediaPonderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
            echo "<br/>";
            echo "<h3>Analisando os valores :</h3>";
            echo "<br/>";
            echo " A <strong> Média Aritimética Simples </strong> entre os valores <strong> $valor1 e $valor2 </strong> é igual a <strong> $mediaSimples </strong>";
            echo "<br/>";
            echo "<p>A <strong> Média Aritimética Ponderada </strong>o peso 1 é <strong> $peso1% </strong> e o peso 2 é <strong> $peso2% </strong> então a média ponderada é <strong> $mediaPonderada </strong> </ul></p>";
            ?>
    </main>
</body>

</html>