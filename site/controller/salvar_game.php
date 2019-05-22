<?php

require_once '../util/Conexao.php';

if($_POST){
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $console = $_POST['console'];
    $preco = $_POST['preco'];
    $plataforma = $_POST['plataforma'];
    $criador = $_POST['criador'];
    $imagem = $_FILES['imagem'];

    if(isset($_FILES['imagem'])){
        $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
        $novo_nome = md5(time()).$extensao;
        $diretorio = "../img/";
        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);

        $sql = "INSERT INTO games 
        (nome, categoria, console, preco, criador, plataforma, imagem)
        VALUES
        ('$nome', '$categoria', '$console', '$preco', '$criador', '$plataforma', '$novo_nome')";
        
        if($connect->query($sql) === TRUE){
            echo 'inserido com sucesso';

            header('Location: ../index.php');
        }
       
    }
}

?>