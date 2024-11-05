<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Caixa Eletrônico</title>
</head>
<?php 
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        $nota100 = 0;
        $nota50 = 0;
        $nota10 = 0;
        $nota5 = 0;
        $alerta = "";

        if (isset($_REQUEST["valor"]) ) {
            $valor = (int)$_REQUEST["valor"];
            $valoresPermitidos = [$valor % 100 == 0
            , $valor % 50 == 0, $valor % 10 == 0, $valor % 5 == 0];
                if (in_array($valor, $valoresPermitidos)) {
                    $nota100 = (int)($valor / 100);
                    $nota50 = (int)($valor % 100 / 50);
                    $nota10 = (int)($valor % 100 % 50 / 10);
                    $nota5 = (int)($valor % 100 % 50 % 10 / 5);
                    $alerta = "O número de notas ser:" ?? "";
                } else {
                    $nota100 = 0;
                    $nota50 = 0;
                    $nota10 = 0;
                    $nota5 = 0;
                    $alerta = "**Não temos essa nota no caixa**" ?? "";
                }
        }
?>

<body>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
            <label for="valor"> Qual valor deseja sacar? (R$)*</label>
            <!-- Só podem sacar essas notas: R$100, R$50, R$10 e R$5 -->
            <input type="number" name="valor" id="idvalor" min="5" required>
            <h6>*Notas disponíveis: R$100, R$50, R$10 e R$5</h6>
            <input type="submit" value="Sacar">

            <div name="notas" id="idnotas" style="display: flex; flex-direction: column;">
                <?php echo "<h5> $alerta </h5>"; ?>

                <div style="display: flex; align-items: center;">
                    <?php echo "O número de notas vai ser: $nota100"?> <img
                        style="margin-left: 10px; margin-bottom: 10px" src="../imagens/100_front.jpg"
                        alt="Nota de R$100" width="100px">
                </div>

                <div style="display: flex; align-items: center;">
                    <?php echo "O número de notas vai ser: $nota50 "?> <img
                        style="margin-left: 10px; margin-bottom: 10px" src="../imagens/50_front.jpg" alt="Nota de R$50"
                        width="100px">
                </div>

                <div style="display: flex; align-items: center;">
                    <?php echo "O número de notas vai ser: $nota10 "?> <img
                        style="margin-left: 10px; margin-bottom: 10px" src="../imagens/10_front.jpg" alt="Nota de R$10"
                        width="100px">
                </div>

                <div style="display: flex; align-items: center;">
                    <?php echo "O número de notas vai ser: $nota5 "?> <img
                        style="margin-left: 10px; margin-bottom: 10px" src="../imagens/5_front.jpg" alt="Nota de R$5"
                        width="100px">
                </div>

            </div>
            <a href="../desafios">
                <button type="button">
                    <i class="fa fa-long-arrow-left"></i>
                    Opções
                </button>
            </a>
        </form>
    </main>

</body>

</html>