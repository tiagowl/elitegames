<?php

 $localhost = "127.0.0.1";
 $user = "root";
 $password = "";
 $dbname = "elitegames";

$connect = new Mysqli($localhost, $user, $password, $dbname);

if($connect->connect_error){
    die("Falhar ao conectar no banco de dados. ".$connect->connect_error);
}

