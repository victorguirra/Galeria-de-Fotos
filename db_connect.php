<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$db_name = "gallery_photo";

$connect = mysqli_connect($serverName, $userName, $password, $db_name);

if(mysqli_connect_error()){
    echo "Falha na conexão: ".mysqli_connect_error();
}
