<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="../ex004/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<main>
    <section>
        <h1>Fazendo CRUD</h1>
        <?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=hotel', 'root', 'CRUD');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable error handling

      // Insert
        if (isset($_GET["nome"]) && isset($_GET["email"])) {
        $sql = $pdo->prepare("INSERT INTO quarto (nome, email) VALUES (:nome, :email)");
        $sql->execute(array(":nome" => $_GET["nome"], ":email" => $_GET["email"]));
        echo "Quarto cadastrado com sucesso!";
        }
    } catch (PDOException $e) {
      echo "Erro ao conectar ou cadastrar quarto: " . $e->getMessage(); // Display error message
    }
    ?>

        <form style="display: flex; flex-direction: row;" action="fazendoCrud.php" method="get">
            <span style="margin-right: 10px; display: flex; flex-direction: row; width: 200px;">Adicionar Quarto</span>
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="email" placeholder="Email">
            <input type="submit" value="Enviar">
        </form>

        <a href="../desafios">
            <button type="button">
                <i class="fa fa-long-arrow-left"></i> Opções
            </button>
        </a>
    </section>

</main>

</html>