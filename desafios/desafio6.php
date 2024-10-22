<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php

    $dividendo = $_GET["dividendo"];
    $divisor = $_GET["divisor"];
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="$_SERVER['PHP_SELF']" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="iddividendo" value="0" step="any" required>

            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="iddivisor" value="0" step="any" required>

            <input type="submit" value="Analisar">
            <a href="../desafios">
                <button type="button">
                    <i class="fa fa-long-arrow-left"></i>
                    Opções
                </button>
            </a>
        </form>

    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <!-- Desafio, mostrar os valores de
        1. Dividendo
        2. Divisor
        3. Quociente
        4. Resto
-->

        1 dividendo | 2 divisor
        <br>
        ----------- | ---------|
        <br>
        ----------- | -----------
        4 resto | 3 quociente


    </section>


</body>

</html>