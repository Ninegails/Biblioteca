<?php require_once 'cabecalho.php'; ?>
<h2>Criar nova categoria</h2>
<form name="nova-categoria" method="post" action="categorias-criar-post.php">
    Descrição da categoria:
    <input name="nome_categoria" maxlength="30">
    <br>
    <button type="submit">Salvar</button>
</form>
<?php require_once 'rodape.php' ; ?>
