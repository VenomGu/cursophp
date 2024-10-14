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
        if (isset($_GET["nome"]) && isset($_GET["sobrenome"]) || empty($_GET["nome"]) && empty($_GET["sobrenome"])) {
        echo "É um prazer te conhecer $nome $sobrenome";
        } else {
            echo "Nenhum valor foi informado";
        }
        echo "<br/>";
        $mathTest = 50 / (2 + 3 * 2) ** 2;
        echo $mathTest;
        $absoluteValue = abs(-5);
        echo "<br/>";
        echo "The absolute value of -5 is $absoluteValue <br/>";
        $binaryConverter = base_convert(100, 10, 2);
        $hexConverter = base_convert(100, 10, 16);
        $octalConverter = base_convert(100, 10, 8);
        echo "<br/>";
        debug_zval_dump("In this situtation, the Binary converter took 100 as the base and 10 as the target number and the radix is 2. The Binary converter: $binaryConverter<br/> Hexadecimal converter: $hexConverter<br/> Octal converter: $octalConverter<br/>");
        echo "The base converter takes the first value as the <strong>base</strong> and the second as the <strong> target </strong> number, and the third as the <strong> radix </strong>.";
        echo "<br/>";
        echo "The binary representation of 100 is $binaryConverter";
        echo "<br/>";
        echo "The hex representation of 100 is $hexConverter";
        echo "<br/>";
        echo "The octal representation of 100 is $octalConverter";
        echo "<br/>";
        function priceCalculator($price, $quantity, $fruitStock) {
            return ($quantity * $price) / $fruitStock;
        }
        echo "Aula de PHP Funções Aritiméticas";
        $resultOfApplesCost = priceCalculator(5, 10, 3);
        $fomattedResultOfApplesCost = number_format($resultOfApplesCost, 2, ",", ".");
        echo "<br/>";
        echo "The apples cost $fomattedResultOfApplesCost;";
        $formattedToCeiling = ceil($resultOfApplesCost);
        $formattedToRound = round($resultOfApplesCost);
        $fomattedToFloor = floor($resultOfApplesCost);
        $formattedToHypot = hypot(5, 2);
        $formattedToIntdiv = intdiv(5, 2);
        $formattedToModule = 5%2;
        $mininum = min(5, 2);
        $maximum = max(5, 2);
        $piFunction = pi();
        $M_PIWayFunctions = M_PI;
        $powFunction = pow(5, 2);
        $powFunctionWay = 5**2;
        $sinFunction = sin( 5 );
        $cosFunction = cos( 5 );
        $tanFunction = tan( 5 );
        $squareFunction = sqrt( 25 );
        $otherSquareFunction = 5**(0.5);
        $cubicFunction = 27**(1/3);
        echo "<br/>";
        echo "The square root of 25 using sqrt() function is $squareFunction";
        echo "<br/>";
        echo "The square root using 5**(0.5) of 5 is $otherSquareFunction";
        echo "<br/>";
        echo "The cubic root of 5 needs to use 27**(1/3) is $cubicFunction";
        echo "<br/>";
        echo "The sin means that the sine of 5 is $sinFunction";
        echo "<br/>";
        echo "The cos means that the cosine of 5 is $cosFunction";
        echo "<br/>";
        echo "The tan means that the tangent of 5 is $tanFunction";
        echo "<br/>";
        echo "The pow of 5 and 2 is with ** is $powFunctionWay";
        echo "<br/>";
        echo "The pow of 5 and 2 is $powFunction";
        echo "<br/>";
        echo "The pi value with M_PI is $M_PIWayFunctions";
        echo "<br/>";
        echo "The pi value is $piFunction";
        echo "<br/>";
        echo "The max of 5 and 2 is $maximum";
        echo "<br/>";
        echo "The min of 5 and 2 is $mininum";
        echo "<br/>";
        floor($resultOfApplesCost);
        echo "<br/>";
        echo "The ceiling of the apples cost $formattedToCeiling";
        echo "<br/>";
        echo "The floor of the apples cost $fomattedToFloor";
        echo "<br/>";
        echo "The round of the apples cost $formattedToRound";
        echo "<br/>";
        echo "The hypot of 5 and 2 is $formattedToHypot";
        echo "<br/>";
        echo "The intdiv of 5 and 2 is $formattedToIntdiv";
        echo "<br/>";
        echo "The module of 5%2 is $formattedToModule";
        
        ?>
        <p><a href="javascript:history.go(-1)"><button>Voltar para a página anterior</button></a></p>
    </main>
</body>

</html>