<?php require_once 'cabecalho-login.php'; ?>
<h2>Criar novo usuário</h2>
<form name="novo-usuario" method="post" action="usuarios-criar-post.php">
    Nome do usuário:
    <input name="email" maxlength="10" required>
    <br>
    Senha do usuário:
    <input name="senha" type = "password" maxlength="10" required>
    <br>
    <button type="submit">Salvar</button>
</form>
<?php require_once 'rodape.php' ; ?>
