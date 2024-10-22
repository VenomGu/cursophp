<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Caixa Eletrônico</title>
</head>

<body>
    <main>
        <form action="$_SERVER['PHP_SELF']" method="get">
            <label for="valor"> Qual valor deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="idvalor">
            <!-- Só podem sacar essas notas: R$100, R$50, R$10 e R$5 -->
            <h6>*Notas disponíveis: R$100, R$50, R$10 e R$5</h6>
            <input type="submit" value="Sacar">

            <a href="../desafios">
                <button type="button">
                    <i class="fa fa-long-arrow-left"></i>
                    Opções
                </button>
            </a>
        </form>
    </main>
    <section>
        <?php 
        echo "<h1>Saque de X VALOR realizado</h1>";
        echo "<br/>";
        echo "O caixa eletrônico vai te entregar as seguntes nota: <br/>";
        echo "<br/>";
        echo "DESENHO DA NOTA DE 100 REAIS:  X NOTAS";
        echo "<br/>";
        echo "DESENHO DA NOTA DE 50 REAIS:  X NOTAS";
        echo "<br/>";
        echo "DESENHO DA NOTA DE 10 REAIS:  X NOTAS";
        echo "<br/>";
        echo "DESENHO DA NOTA DE 5 REAIS:  X NOTAS";

        ?>
    </section>

</body>

</html>