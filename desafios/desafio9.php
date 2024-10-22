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
        <h1>Médias Aritiméticas</h1>
        <form action="$_SERVER['PHP_SELF']" method="get">
            <label for="valor1">1º Valor: </label>
            <input type="number" name="valor1" id="idvalor1">
            <label for="peso1">1º Peso: </label>
            <input type="number" name="peso1" id="idpeso1">
            <label for="valor2">2º Valor: </label>
            <input type="number" name="valor2" id="idvalor2">
            <label for="peso2">2º Peso: </label>
            <input type="number" name="peso2" id="idpeso2">
            <input type="submit" value="Calcular médias">
            <a href="../desafios">
                <button type="button">
                    <i class="fa fa-long-arrow-left"></i>
                    Opções
                </button>
            </a>

        </form>
        <?php 
            echo "<h2>Analisando os valores :</h2>"; ;
            echo "<br/>";
            echo "A <strong> Média Aritimética Simples </strong> entre os valores é igual a valor1 e valor2 ";
            echo "<br/>";
            echo "<p>A <strong> Média Aritimética Ponderada </strong>com pesos 1 e peso 2 é igual a médiaObtida </ul></p>";
            ?>
    </main>


</body>

</html>