<?php require_once 'cabecalho.php'; 
require_once 'classes/Produtos.php';

$produto = new Produtos();
$lista = $produto->listar();

?>

<h2>Produtos</h2>
<a href="produtos-criar.php" class="btn btn-info">Criar Novo Produto</a>
<br>
<br>
<select>
    <?php foreach($lista as $linha){ ?>
        <option value = "<?php echo $linha['id'];?>">
            <?php echo $linha['nome'];?>
        </option>
    <?php } ?>
</select>

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Categoria</th>
        <th class="acao">Editar</th>
        <th class="acao">Excluir</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['preco'];?></td>
            <td><?php echo $linha['quantidade'];?></td>
            <td><?php echo $linha['categoria'];?></td>
            <td>
                <a href="produtos-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Alterar</a></td>
                <td><a href="produtos-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php } ?>
    <tbody>
</table>
<?php require_once 'rodape.php' ?>