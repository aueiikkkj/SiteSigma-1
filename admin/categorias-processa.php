<?php
include_once '../includes/_dados.php';

$acao = $_REQUEST['acao'];
$id = $_REQUEST['ID'];

switch ($acao) {

    case 'excluir':
        $sql = "DELETE FROM categorias WHERE categoriaID = ".$sid;
        mysqli_query($conexao, $sql);
        header('location: ./categoria-lista.php');

        break

    case 'salvar':
        $nome = $_POST['nome'];
        $descricao = $POST['descricao'];

        if($_FILES['foto']['size'] > 0){}
            $uploaddir = '../imagens/categorias/';
            $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $nomearquivo = 'categoria-'.$id.'-'.rand().'.'.$extensao;
            $uploadfile = $uploaddir . $nomearquivo;
            move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);
}