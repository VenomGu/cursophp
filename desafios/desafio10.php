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
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="ano">Quando você nasceu?</label>
            <input type="date" name="nascimento" id="idnascimento" required>
            <label for="data"> Quer saber quantos anos terá na data abaixo?</label>
            <input type="date" name="data" id="iddata" required>
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
        $nascimento = $_REQUEST["nascimento"] ?? 0;
        $data = $_REQUEST["data"] ?? 0;
        $idade = date("Y", strtotime($data)) - date("Y", strtotime($nascimento));
        $dias = date("d", strtotime($data)) - date("d", strtotime($nascimento));
        $meses = date("m", strtotime($data)) - date("m", strtotime($nascimento));
        if ($nascimento && $data && $nascimento < $data) {
        echo "Quem nasceu em <strong>". date( " d/m/Y", strtotime($nascimento)) ." </strong> vai ter <strong>" .$idade . "</strong> anos, <strong>" . abs($dias) . "</strong> dias e <strong>" . abs($meses) . "</strong> mês de idade na data <strong>". date("d/m/Y", strtotime($data))."</strong>.";
        } elseif ($nascimento > $data) {
            echo "A data de nascimento deve ser <strong> menor </strong> que a data desejada.";
        }
        else {
            echo "Preencha todos os campos, por favor.";    
        }

        ?>
    </section>

</body>

</html>