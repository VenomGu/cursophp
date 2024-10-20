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
                public $id;
                public $name;
                public $quantity;
            }
        function addFunction($quantityAdded) {
        $addOne->quantity = $quantityAdded + 1;
        return echo $addOne->quantity;

        }
        $addOne =  new ProductsPatternForRooms();
        $addOne->quantity = $addOne->quantity + 1;
        ?>
        <form style="display: flex; flex-direction: row;" action="fazendoCrud.php" method="get">
            <span style="margin-right: 10px;display: flex; flex-direction: row; width: 200px;">Quantidade:
                <?php echo $addOne->quantity; ?> </span>
            <input style="margin-left: 10px; " type="button" name="addOne" value="Add 1 quantity" onclick=addFunction()>
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