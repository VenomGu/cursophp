<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Descubra o número binário</title>
</head>
<?php 

?>

<body>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="valor"> Qual valor você quer saber o número binário?</label>
            <input type="number" name="valor" id="idvalor">
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
        <?php


        ?>
    </section>

</body>

</html>