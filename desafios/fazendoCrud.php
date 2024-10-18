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
        <h1>
            Fazendo CRUD de produtos
        </h1>
        <H2>Protudos do Hotel</H2>
        <?php 
        echo "Lista de Produtos </br>";
        
class ProductsPatternForRooms {
  // Properties
    public $id = 1;
    public $name = "Agua com gas";
    public $quantity = 7;
    public $price= 3.50;
}

        $stockOfProducts = [
    [
        "id" => 1,
        "name" => "Água com gás",
        "quantity" => 7,
        "price" => 3.50
    ],
    [
        "id" => 2,
        "name" => "Refrigerante",
        "quantity" => 10,
        "price" => 4.50
    ],
    [
        "id" => 3,
        "name" => "Suco de laranja",
        "quantity" => 15,
        "price" => 3.00
    ],
    [
        "id" => 4,
        "name" => "Biscoito",
        "quantity" => 20,
        "price" => 1.50
    ],
    [
        "id" => 5,
        "name" => "Salgadinho",
        "quantity" => 12,
        "price" => 2.50
    ],
    [
        "id" => 6,
        "name" => "Café",
        "quantity" => 30,
        "price" => 2.00
    ],
    [
        "id" => 7,
        "name" => "Chá",
        "quantity" => 25,
        "price" => 1.80
    ],
    [
        "id" => 8,
        "id" => 8,
        "name" => "Leite",
        "quantity" => 18,
        "price" => 3.20
    ],
    [
        "id" => 9,
        "name" => "Iogurte",
        "quantity" => 15,
        "price" => 2.80
    ],
    [
        "id" => 10,
        "name" => "Chocolate",
        "quantity" => 5,
        "price" => 2.00
    ]
];
        function searchFunction() {
            echo "Search a product";
            if (isset($_GET["search"])) {
                $search = $_GET["search"];
                echo "Search: $search";
            } else {
                echo "All products: ";
                
        for ($i = 0; $i < count($stockOfProducts); $i++) {
            echo "ID: " . $stockOfProducts[$i]["id"] . "</br>";
            echo "Name: " . $stockOfProducts[$i]["name"] . "</br>";
            echo "Quantity: " . $stockOfProducts[$i]["quantity"] . "</br>";
            echo "Price: " . $stockOfProducts[$i]["price"] . "</br></br>";
        }
            }
        }
        function addFunction() {
            echo "Add 1 quantity";
        }


        ?>
        <form style="display: flex; flex-direction: row;" action="fazendoCrud.php" method="get">
            <input type="text" name="search" id="idsearch" placeholder="Exemplo: agua">

            <input style="margin-left: 10px; " type="submit" name="add" value="Add 1 quantity" onclick=addFunction()>
        </form>
        <a href="../desafios">
            <button type="button">
                <i class="fa fa-long-arrow-left"></i>
                Opções
            </button>
        </a>
    </section>

</main>

</html>