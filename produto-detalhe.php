<?php
// include do footer
include_once './includes/_banco.php';

include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET ['id'];
$tpo = $_GET ['tipo'];

?>

<main role="main" class="container mt-5">
        <h1><?php echo $produtos[$id]['nome'];?></h1>
        <p><?php echo $produtos[$id]['descricao']?></p>
        <div><img src="./content/<?php echo $produtos[$id]['imagem']?>" height=300></div>
        <h4><?php echo $produtos[$id]['preco']?></h4>
</main>



<?php
// include do footer
include_once './includes/_footer.php';
?>