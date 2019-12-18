<?php
class Produtos{

    /*atibutos*/
public $id;
public $nome;
public $preco;
public $quantidade;
public $categoria_livro;

    /*metodos*/
public function listar(){
        $query = "SELECT id, nome, preco, quantidade, categoria FROM tb_produtos";
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
}

public function listar1Produto($id){
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

    $query = "SELECT id, nome, preco, quantidade, categoria FROM tb_produtos WHERE id = " . $id;

    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();

    foreach($lista as $linha){
        return $linha;
    }
}

public function inserir($nome, $preco, $quantidade, $categoria_livro){
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

    $query="INSERT INTO tb_produtos(nome, preco, quantidade, categoria) VALUES('".$nome."', '".$preco."', '".$quantidade."', '".$categoria_livro."')";

    $conexao->exec($query);
}

public function alterar($id, $nome, $preco, $quantidade, $categoria_livro){
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

    $query = "UPDATE tb_produtos SET nome = '".$nome."' , preco = '".$preco."' , quantidade = '".$quantidade."' , categoria = '".$categoria_livro."' WHERE id = " .$id;
    
    $conexao->exec($query);

}

public function excluir($id){
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

    $query = "DELETE FROM tb_produtos WHERE id = " .$id;

    $conexao->exec($query);

}

}