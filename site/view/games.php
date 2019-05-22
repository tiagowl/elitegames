<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="navegacao">
        <img src="../img/logo.png" style="margin-right: 1700px;" >
        <label style="color: white; margin-left: 460px;position:absolute;margin-top: -40px;font-family:sans-serif;font-size:30px;" >MyAdmin</label>
    </div>
    <div class="sub-navegacao">
        <a href="../index.php" style="margin-left: 340px" >Home</a>
        <a href="games.php" style="margin-left: 460px" >Games</a>
        <a href="usuarios.php" style="margin-left: 580px" >Usuários</a>
    </div><br>

    <table class="table" style="margin-top: 270px;width: 500px;margin-left: 30px;" >
        <thead class="thead-dark">
            <tr>
                <th scope="col" >Nome</th>
                <th scope="col" >Categoria</th>
                <th scope="col" >Console</th>
                <th scope="col" >Preço</th>
                <th scope="col" >Criador</th>
                <th scope="col" >Plataforma</th>
            </tr>
        </thead>
        <tbody>
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "elitegames";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = 'SELECT * from games';

        $result = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['categoria']."</td>";
            echo "<td>".$row['console']."</td>";
            echo "<td>".$row['preco']."</td>";
            echo "<td>".$row['criador']."</td>";
            echo "<td>".$row['plataforma']."</td>";
            echo "</tr>";
       }

       ?>
        </tbody>
    </table>

    <a href="formGame.html"><button class="btn btn-success" style="margin-left: 470px;" >Adicionar</button></a>


    
</body>
</html>