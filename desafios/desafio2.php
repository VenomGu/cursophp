<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <h1>Desafio 2</h1>
    </header>
    <main>
        <section>
            <?php
            echo "<h1>Trabalhando com números aleatórios</h1>";
            echo "<br/>";
            echo "Gerando um número aleatório entre 0 e 100";
            echo "<br/>";
            function gerarNumero() {
                return $aleatorio = rand(0, 1000);
            }
            function gerarNumero2() {
                return $aleatorio2 = range(0, 5);
            }

            echo "<br/>";
            $aleatorio2 = gerarNumero2();
            $aleatorio = gerarNumero();

            echo "O número gerado por rand(0, 1000) foi $aleatorio";
            echo "<br/>";
            echo "O numero gerado por range(0, 300) foi ";
            print_r($aleatorio2);
            echo "<br/>";

            ?>
            <button type="button" onclick="location.reload()">
                Gerar outro numero
            </button>
            <button type="button" onclick="javascript:history.go(-1)">
                <i class="fa fa-long-arrow-left"></i>
                Desafios
            </button>
        </section>

    </main>

</body>

</html>