<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP sobre super globais</title>
    <link rel="stylesheet" href="../ex004/style.css">
</head>

<body>
    <main>
        <pre>
            <?php 
                // $_COOKIE: contém os valores dos cookies enviados pelo navegador
                setcookie("Dia-da-semana", "SEGUNDA", time() + 3600);
                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);
                echo "O dia da semana é: " . $_COOKIE["Dia-da-semana"];

                
                // $_SESSION: contém os valores armazenados em uma sessão do servidor
                echo "<h1>Superglobal SESSION</h1>";
                session_start();
                $_SESSION["teste"] = "FUNCIONOU";
                var_dump($_SESSION);

                
                // $_ENV: contém as variáveis de ambiente do sistema operacional
                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);
                $count = 0;
                foreach (getenv() as $key => $value) {
                    $count++;
                    echo "$count : $key: $value<br>";
                }
                
                // $_SERVER: contém informações sobre o servidor e o ambiente de execução
                echo "<h1>Superglobal SERVER</h1>";
                $countServer = 0;
                foreach ($_SERVER as $key => $value) {
                    $countServer++;
                    echo " $countServer : $key: $value<br>";
                }
                var_dump($_SERVER);
                echo "O nome do script é: " . $_SERVER["PHP_SELF"];

                // $GLOBALS: contém um array associativo com todas as variáveis globais do script
                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);
                
                // $_GET: contém os valores enviados via método GET na URL
                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                // $_REQUEST: contém os valores enviados via métodos GET, POST ou COOKIE
                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                // $_POST: contém os valores enviados via método POST no corpo da requisição
                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                // $_FILES: contém os dados dos arquivos enviados via método POST
                echo "<h1>Superglobal FILES</h1>";
                var_dump($_FILES);

            ?>
        </pre>
    </main>

</body>

</html>