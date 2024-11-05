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
    <main>
        <h4>Anatomia de uma Divisão</h4>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="divisao">divisao:</label>
            <input type="number" name="divisao" id="iddivisao" step="any" min="1" required>

            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="iddivisor" step="any" min="1" required>

            <input type="submit" value="Analisar">
            <a href="../desafios/desafio6.php">
                <button type="button">
                    Limpar
                </button>
            </a>
            <a href="../desafios">
                <button type="button">
                    <i class="fa fa-long-arrow-left"></i>
                    Opções
                </button>
            </a>
        </form>

    </main>
    <section style="padding: 40px;">
        <h3>Estrutura da Divisão</h3>
        <span>
            <?php 
        if (isset($_REQUEST["divisao"]) && isset($_REQUEST["divisor"]) && $_REQUEST["divisao"] > 0 && $_REQUEST["divisor"] > 0) {
    $divisao = abs($_REQUEST["divisao"]) ?? 0;
    $divisor = abs($_REQUEST["divisor"]) ?? 0;
    $resto = $divisao % $divisor ?? 0;
    $quociente = $divisao / $divisor ?? 0;
    echo "<span style='padding-right: 30px; font-size: 2em;'>" . $divisao . "</span>";
    echo "<span style='border-left: solid; padding-bottom: 50px;font-size: 2em; '></span>";
    echo "<span style='padding-left: 30px; padding-right: 30px; border-bottom: solid;font-size: 2em;'>" .$divisor . " </span>";
    echo "<br/>";
    echo "<span style='text-decoration: underline; padding-right: 80px;font-size: 2em;'>" . $resto . "</span>";
    echo "<span style='padding-left: 0px;font-size: 2em;'> " .$quociente . " </span>";
    } else if(isset($_REQUEST["divisao"]) == 0 || isset($_REQUEST["divisor"]) == 0) {

    echo "<span style='padding-right: 30px; font-size: 2em;'> divisão </span>";
    echo "<span style='border-left: solid; padding-bottom: 50px;font-size: 2em;'></span>";
    echo "<span style='padding-left: 30px; padding-right: 30px; border-bottom: solid;font-size: 2em;'> divisor </span>";
    echo "<br/>";
    echo "<span style='text-decoration: underline; padding-right: 80px;font-size: 2em;'> resto </span>";
    echo "<span style='padding-left: 0px;font-size: 2em;'> quociente </span>";

    }
        ?>
        </span>

    </section>


</body>

</html>