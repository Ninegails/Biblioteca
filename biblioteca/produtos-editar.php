<?php require_once 'cabecalho.php'; 
require_once 'classes/Produtos.php';
require_once 'classes/Categoria.php';

$categoria = new Categoria();
$listaCategoria = $categoria->listar();
$id = $_GET['CODIGO'];
$produto = new Produtos();
$linha = $produto->listar1Produto($id);
?>
<div class="row">
    <div class="col-md-12">
        <h2>Editar Produto</h2>
    </div>
</div>

<form action="produtos-editar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <input type = "hidden" name = "id" value = "<?php echo $id ?>">
            <div class="form-group">
                <label for="nome">Nome do livro</label>
                <input name = "nome" type="text" class="form-control" placeholder="Nome do Produto" required value = "<?php echo $linha['nome'];?>">
            </div>
            <div class="form-group">
                <label for="preco">Preço do livro</label>
                <input name = "preco" type="number" step="0.01" min="0" class="form-control" placeholder="Preço do Produto" required value = "<?php echo $linha['preco'];?>">
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade de livros</label>
                <input name = "quantidade" type="number" min="0" class="form-control" placeholder="Quantidade do Produto" required value = "<?php echo $linha['quantidade'];?>">
            </div>
            <br>
            <select name = "categoria">
            <?php 
                foreach($listaCategoria as $linhaCategoria){ 
                    if($linha['categoria'] == $linhaCategoria['id']){
                    ?>
                        <option value = "<?php echo $linhaCategoria['id'];?>" selected>
                            <?php echo $linhaCategoria['categoria'];?>
                        </option>
                <?php } else{
                    ?>
                        <option value = "<?php echo $linhaCategoria['id'];?>">
                            <?php echo $linhaCategoria['categoria'];?>
                        </option>
                        <?php
                }
            }?>
            </select>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>
