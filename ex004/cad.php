<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <h1>Resultados do processamento</h1>
    </header>
    <main>
        <?php
        $nome = $_GET["nome"] ?? "Sem nome";
        $sobrenome = $_GET["sobrenome"] ?? "Sem sobrenome";
        if (isset($_GET["nome"]) && isset($_GET["sobrenome"])) {
        echo "É um prazer te conhecer $nome $sobrenome";
        } else {
            echo "Nenhum valor foi informado";
        }
        ?>
        <p><a href="javascript:history.go(-1)"><button>Voltar para a página anterior</button></a></p>
    </main>
</body>

</html>