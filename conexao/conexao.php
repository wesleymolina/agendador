<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agendador";

// Create connection
$conexao = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conexao) {
  die("Connection failed: " . mysqli_connect_error());
}

?> 