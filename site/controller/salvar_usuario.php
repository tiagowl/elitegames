<?php

require_once 'Conexao.php';

if($_POST){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios
    (nome, email, senha)
    VALUES
    ('$nome', '$email', '$senha')";

    $conectar = new Conexao();
    $conexao = $conectar->connect();
    $conexao->query($sql);
     
}

?>