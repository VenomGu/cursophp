<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" step="any" name="segundos" id="idsegundos" placeholder="Exemplo: 120" min=0 required>
            <input type="submit" value="Calcular">

            <a href="../desafios">
                <button type="button">
                    <i class="fa fa-long-arrow-left"></i>
                    Opções
                </button>
            </a>
        </form>
    </main>

    <section style="margin: 0px;">
        <h2>Totalizando tudo</h2>
        <?php
        $secondsPassed = $_GET["segundos"] ?? 0;
        $segundos = $_GET["segundos"] ?? 0;

        $weeks = floor($segundos / 604800);
        $segundos -= $weeks * 604800;

        $days = floor($segundos / 86400);
        $segundos -= $days * 86400;

        $hours = floor($segundos / 3600);
        $segundos -= $hours * 3600;
        
        $minutes = floor($segundos / 60);
        $segundos -= $minutes * 60;
        
        $seconds = $segundos % 60;
    if (isset($_REQUEST["segundos"]) && $_REQUEST["segundos"] > 0) {
    echo "Analisando o valor que você digitou,<strong> $secondsPassed</strong> equivalem a um total de: <ol style='margin: 0'> <br/> $weeks SEMANAS <br/> $days DIAS <br/> $hours HORAS <br/> $minutes MINUTOS <br/> $seconds SEGUNDOS </ol>"; 
    echo "</br>";
    } else {

    echo "<strong><h5 style='margin: 0'>**Um minuto tem 60 segundos, um hora tem 3600 segundos</br> um dia tem 86400 segundos uma semana tem 604800 segundos</br> um ano tem 31536000 segundos. ** </h5></strong>";
    }
    ?>
    </section>
</body>

</html>