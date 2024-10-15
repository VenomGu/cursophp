<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de números aleatórios</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <h1>Gerador de números aleatórios</h1>
    </header>
    <main>
        <section>
            <?php
            echo "<h1>Trabalhando com números aleatórios</h1>";
            echo "Gerando um número aleatório entre <strong>0 e 1000 </strong>";
            function gerarNumero() {
                return $aleatorio = rand(0, 1000);
            }

            echo "<br/>";
            $aleatorio = gerarNumero();
            echo "O número gerado aleatório foi <strong> $aleatorio </strong>";
            echo "<br/>";

            ?>
            <button type="button" onclick="location.reload()">
                Gerar outro numero
            </button>
            <a href="../desafios">
                <button type="button">
                    <i class="fa fa-long-arrow-left"></i>
                    Opções
                </button>
            </a>
        </section>

    </main>

</body>

</html>