<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando a sua idade</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="$_SERVER['PHP_SELF']" method="get">
            <label for="Em que ano você nasceu?"></label>
            <input type="number" name="ano" id="idano" value="0">
            <label for="Quer saber sua idade em que ano? (Atualmente estamos em 2024)"></label>
            <input type="number" name="data" id="iddata">
            <input type="submit" value="Qual será minha idade?">
            <a href="../desafios">
                <button type="button">
                    <i class="fa fa-long-arrow-left"></i>
                    Opções
                </button>
            </a>
        </form>

    </main>
    <section>
        <h2>Resultado </h2>
        <?php
        echo "Quem nasceu em ANO vai ter IDADE em ANOPASSADO.";
        ?>
    </section>

</body>

</html>