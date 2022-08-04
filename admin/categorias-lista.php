<?php
//iinclui a conexão com o banco de dados
include_once '../includes/_banco.php';
//inclui o head e header da pagina admin
include_once './_header.php';
//inclui o menu do painel admin
include_once './_menu.php';
?>

<?php
//inclui o footer do painel admin
include_once './_footer.php';
?>

<main>
    <h2> Administração das Categorias </h2>
    <a href="categoria-salvar.php">Inserir<a>
    <hr> 
    <table border="1">
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Ações </th>
        </tr>
        <?php
        //verifica se existe informacoes no banco de dados
        if($resultado){
            while ($dado = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
                <td><?php echo $dado['CategoriaID'];?></td>
                <td><a href="categoria-salvar.php?acaos=salvar&id=<?php echo $dado['CategoriaID'];?>"><?php echo $dado['Nome'];?></a></td>
                <td><a href="categoria-processa.php?acao=excluir&id=<?php echo $dado['CategoriaID'];?>">Excluir</a></td>
        </tr>
        <?php
            }
        }else{
        ?>
        <tr>
            <td colspan="3">Resultados não encontrados</td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="3"> Total de Registros: <?php echo $total;?></td>
        </tr>
    </table>
</main>
<?php
include_once '_footer.php';
?>