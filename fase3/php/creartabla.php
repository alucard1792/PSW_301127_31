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
//Creación de la tabla.
$sql = "CREATE TABLE productos (
cod INT(10) PRIMARY KEY,
nombre VARCHAR(10),
marca VARCHAR(10),
precio INT(15),
cantidad INT(10)
)";

if (mysqli_query($conn, $sql)){
  echo "Se ha creado la tabla de 'produtos' correctamente.";
} else{
  echo "Ocurrio un error en la creación de la tabla 'productos'" . mysqli_error($conn);
}

mysqli_close($conn);
?>
