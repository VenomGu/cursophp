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
    
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="divisao">divisao:</label>
            <input type="number" name="divisao" id="iddivisao" value="<?=$divisao; ?>" step="any" required>

            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="iddivisor" value="<?=$divisor; ?>" step="any" required>

            <input type="submit" value="Analisar">
            <a href="../desafios">
                <button type="button">
                    <i class="fa fa-long-arrow-left"></i>
                    Opções
                </button>
            </a>
        </form>

    </main>
    <section style="padding: 40px;">
        <h2>Estrutura da Divisão</h2>
        <!-- Desafio, mostrar os valores de
        1. divisao
        2. Divisor
        3. Quociente
        4. Resto
-->
        <span style="font-size: 2em;">
            <?php 
        if ( isset($_REQUEST["divisao"]) && isset($_REQUEST["divisor"])) {
    $divisao = $_REQUEST["divisao"] ?? 0;
    $divisor = $_REQUEST["divisor"] ?? 0;
    $resto = $divisao % $divisor ?? 0;
    $quociente = $divisao / $divisor ?? 0;
    echo "<span style='padding-right: 30px; '>" . $divisao . "</span>";
    echo "<span style='border-left: solid; padding-bottom: 50px; '></span>";
    echo "<span style='padding-left: 30px; padding-right: 30px; border-bottom: solid;'>" .$divisor . " </span>";
    
    echo "<br/>";
    
    echo "<span style='text-decoration: underline; padding-right: 80px;'>" . $resto . "</span>";
    echo "<span>" .$quociente . " </span>";
    } else {
        echo "Por favor, informe os valores de divisao e divisor";
    }
        ?>
        </span>

    </section>


</body>

</html>