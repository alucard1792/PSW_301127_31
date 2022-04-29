<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insertar</title>
  </head>
  <body>
<?php
require('login.php');
$i = $_POST['codigoprod'];
$n = $_POST['nombreprod'];
$m = $_POST['marcaprod'];
$p = $_POST['precioprod'];
$c = $_POST['cantidadprod'];
//Insertará dentro de la tabla de productos los parametros ingresados.
$sql = "INSERT INTO productos (cod, nombre, marca, precio, cantidad) VALUES ('$i', '$n', '$m', '$p', '$c')";
//Según la respuesta de la db
if(mysqli_query ($conn, $sql)){
?>
<div class="">
  <?php
  echo "Se ha creado correctamente.";
  ?>
</div>
<?php
} else {
?>
<div class="">
  <?php
  echo "Algo ha fallado: " . mysqli_error($conn);
  ?>
</div>
</body>
}
<?php
}
mysqli_close($conn);
?>
