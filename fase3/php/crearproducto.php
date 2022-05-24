<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <title>Consultar</title>
    <meta charset="utf-8">
   <meta name="viewport" content="width-device-width, initial-scale-1" >
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h3>Se he creado correctamente.</h3>
    </div>
    <div class="modal-body">
      <div class="alert alert-success">
        <?php
          echo  "Codigo:" . $i . 
                "<br> Nombre: " . $n . 
                "<br> Marca: " . $m . 
                "<br> Precio: " . $p .
                "<br> Cantidad: " . $c;
        ?>
    </div>
    <div class="modal-footer">
    <a class="btn btn-success" href="../index.html" role="button">Regresar</a>
    </div>
  </div>
  </div>
<?php
} else {
?>
<div class="">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">
          Algo ha fallado.
          <?php
            echo mysqli_error($conn);
          ?>
        </h3>
      </div>
      <a class="btn btn-danger" href="../index.html" role="button">Regresar</a>
    </div>
  </div>

</div>
</body>
}
<?php
}
mysqli_close($conn);
?>
