<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
    $num = 0b1011; //binário
    $num = 0123; //octal
    $num = 0x0f; //hexadecimal
    //$num = 1.234; //ponto flutuante
    $v = (integer) "300"."100";
    var_dump($v);
    echo $v ."<br/>"; 
    echo "O valor de \$num é $num";
    $casado = true;
    echo "<br/>O valor de \$casado é $casado";
    

    if ($casado) {
        echo "<br/>O valor de \$casado é true";
    } else {
        echo "<br/>O valor de \$casado é false";
    }
    $casou = $casado ? "sim" : "nao";
    echo "<br/>O valor de \$casou é $casou";

    $vet = [6,2,9,3,5];
    echo "<br/>O valor de \$vet[0] é $vet[0]";
    var_dump($vet);
    echo "<br/>";

    class Pessoa {
        private string $nome;
    };
    $p = new Pessoa;
    var_dump($p);

    const CANAL = "Curso em video \u{1F499}";
    echo '</br>Eu adoro o ' . CANAL . "//single quote" ; 

    
    $canal = "Curso em video \u{1F499}";
    echo "</br>Eu adoro o $canal" . "//double quote"; 

    $nomeLutador = "Rodrigo";
    $sobrenomeLutador = "Nogueira";
    echo "</br>$nomeLutador "."\"Minotauro\" "."$sobrenomeLutador";
    //Escape sequences: \n, \t, \\, \$, \U{}
    echo "</br>Escape sequences:";
    echo "</br> \\n Nova linha";
    echo "</br> \\t Tabulação horizontal";
    echo "</br>\\\ Barra invertida" ;
    echo "</br>\\\$ Sinal de cifrão";
    echo "</br>\\U{} Codepoint Unicode";
    echo "</br>$nomeLutador \"Minotauro\" $sobrenomeLutador";

    ?>
</body>

</html>