<?php
require_once 'classes/Categoria.php';

$categoria = new Categoria();
$lista = $categoria->listar();

require_once 'cabecalho.php';
?>

<h2>Categorias</h2>
<a href="categorias-criar.php" class= "btn btn-success">Adicionar categorias</a>
<br><br>
<select>
    <?php foreach($lista as $linha){ ?>
        <option value = "<?php echo $linha['id'];?>">
            <?php echo $linha['categoria'];?>
        </option>
    <?php } ?>
</select>


<table class= "table">
    <thead>
        <th>Id</th>
        <th>Categoria</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['categoria'];?></td>
            <td>
                <a href="categorias-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Alterar</a>
                <a href="categorias-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php } ?>
    <tbody>
</table>

<?php
require_once 'rodape.php';
?>