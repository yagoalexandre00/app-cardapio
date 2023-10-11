<?php 

$host = "mariadb";
$user = "root";
$pass = "1234";
$db = "cardapio";

// $conexao = mysqli_connect($servidor, $senha, $usuaruio, $db);
$conexao = new mysqli($host, $user, $pass, $db);

