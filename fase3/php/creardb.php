<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
// Creación de conexión con la base de datos
$conn = mysqli_connect($servername, $username, $password);
//Comprueba si la conexión ha funcionado en caso de que envie un valor 1
if (!$conn){
  die("Conexión fallida: " . mysqli_connect_error());
}

//Crear Base de Datos
$sql = "CREATE DATABASE bdunad31";
if (mysqli_query($conn, $sql)) {
  echo "La base de datos 'bdunad31' se creó correctamente.";
} else {
  echo "Ocurrio un error al crear 'bdunad31':" . mysql_error($conn);
}
mysqli_close($conn);
?>
