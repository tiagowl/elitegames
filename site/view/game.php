<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
<div class="navegacao">
        <img src="../img/logo.png" alt="">

        <form method="post">
            <input type="text" name="busca">
        </form>

        <a href="#">Login</a>
        <a href="#" style="margin-left: 1170px;" >Inscreva-se</a>

    </div><br>

    <div class="sub-navegacao">
        <a href="#" style="margin-left: 400px;" >PS4</a>
        <a href="#" style="margin-left: 490px;" >Xbox One</a>
        <a href="#" style="margin-left: 620px;" >PS3</a>
        <a href="#" style="margin-left: 720px;" >Xbox 360</a>
        <a href="#" style="margin-left: 870px;" >PC</a>
    </div>

    <?php 
    
    $id=$_REQUEST['id'];
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="elitegames";
    // Create connection
    $conn=new mysqli($servername, $username, $password, $dbname);
    $sql='SELECT * from games where id='.$id;
    $result=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)) {

        echo "<h1 style='margin-left: 600px; margin-top: 310px; font-size: 50px; position: absolute' >".$row['nome']."</h1>";
        echo "<label style='margin-top: 500px; position: absolute;margin-left:600px;font-size: 20px ' >".$row['criador']."</label>";
        echo "<img src='../img/".$row['imagem']."' style='width:320px;height:370px;position:absolute; margin-left: 200px;margin-top: 300px;'>";
        echo "<label style='margin-left: 600px; position: absolute; font-size: 40px; margin-top: 400px'> R$ ".$row['preco']."</label>";
        echo "<button style='margin-left:600px; margin-top: 597px; height: 60px; width: 200px; background-color: rgb(194, 25, 25);border: 3px solid black;border-radius: 10px;' >Comprar</button>";
    }
?>
</body>
</html>