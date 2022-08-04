<?php
include_once '../includes/_dados.php';
include_once '_head.php';
if( isset($_GET['id']) || !empty($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM categorias WHERE CategoriaID = ".$id;
    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
}else{
    $id = '';
    $dados['Nome'] ='';
    $dados['Descricao'] = '';
    $dados['Imagem'] = '';
}
include_once '_menu.php';
?>
    <main>
        <h2>Administração das Categorias</h2>
        <a href="categoria-lista.php">Listagem</a>
        <hr>
        <form action="categoria-processa.php" method="post" enctype="multipart/form-data">