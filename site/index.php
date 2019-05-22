<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elite Games</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
    <div class="navegacao">
        <img src="img/logo.png" alt="">

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

    <div class="opcoes">
        <input type="button" value="PS4" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" >
        <input type="button" value="Xbox One">
        <input type="button" value="PS3">
        <input type="button" value="Xbox 360">
        <input type="button" value="PC">
    </div>

    <div class="games">
        <h1>Jogos Midia Física</h1>

        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "elitegames";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = 'SELECT * from games';

        $result = mysqli_query($conn, $sql);
               while($row = mysqli_fetch_assoc($result)) {
                   echo "<div class='game' style='margin-left:20px' >";
                   echo "<img src='img/".$row['imagem']. "'>";
                   echo "<a href='view/game.php?id=".$row['id']."' >".$row['nome']."</a>";
                   echo "<h2>R$".$row['preco']."</h2>";
                   echo "</div>";
               }

        ?> 

        <!-- <div class="game" style="margin-left: 20px;" >
            <img src="img/sekiro.jpg" alt="">
            <a href="#">Sekiro</a>
            <h2>R$ 199,99</h2>
        </div>
        <div class="game"></div>
        <div class="game"></div>
        <div class="game" style="margin-left: 20px;" ></div>
        <div class="game"></div>
        <div class="game"></div> -->
    </div>

</body>
</html>