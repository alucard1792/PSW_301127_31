<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad31";

// Creación de conexión con la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Comprueba si la conexión ha funcionado en caso de que envie un valor 1
if (!$conn){
  die("Conexión fallida: " . mysqli_connect_error());
}
?>
