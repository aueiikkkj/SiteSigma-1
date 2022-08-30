<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

?>

<div class="container">
<h2>Promoção</h2>   
    <div class="row mt-5">
        
        <?php
        //cria uma variável que contem SQL executado
        $sql = "SELECT * FROM produtos WHERE Ativo = 1 LIMIT 3";
        //executa o comando SQL
        $exec = mysqli_query ($conn,$sql);
        $numProdutos = mysqli_num_rows ($exec);

        while ($dados = mysqli_fetch_assoc($exec) ) 
        {
        
        ?>
        <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src="./content/<?php echo $dados['Imagem'];?>" alt="Imagem de capa do card" height=250  >
            <div class="card-body">
                <h5 class="card-title"><?php echo $dados['Nome'];?></h5>
                <p class="card-text"> Descrição: <?php echo $dados['Descricao'];?></p>
                <a href="produto-detalhe.php?id=<?php echo $dados['ProdutoID'];?>&tipo=promocao" class="btn btn-primary">Comprar</a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>


</div>

