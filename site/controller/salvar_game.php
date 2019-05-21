<?php

require_once '../util/Conexao.php';

if($_POST){
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $console = $_POST['console'];
    $preco = $_POST['preco'];
    $plataforma = $_POST['plataforma'];
    $criadora = $_POST['criadora'];
    $imagem = $_FILES['imagem'];

    if(isset($_FILES['imagem'])){
        $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
        $novo_nome = md5(time()).$extensao;
        $diretorio = "../img/";
        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);

        $sql = "INSERT INTO games 
        (nome, categoria, console, preco, plataforma, criadora, imagem)
        VALUES
        ('$nome', '$categoria', '$console', '$preco', '$plataforma', '$criadora', '$novo_nome')";
        
        $conn = new PDO("mysql:dbname=elitegames;host=localhost", "root","");
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
}

?>