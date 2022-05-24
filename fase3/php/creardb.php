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
?>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Se ha creado la base de datos de manera exitosa.</h3>
      </div>
      <a class="btn btn-success" href="../index.html" role="button">Regresar</a>
    </div>
  </div>

  <?php  
}else {
  ?>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Ocurrio un error al crear la base de datos.</h3>
      </div>
      <div>
        <p>
          <?php
          echo mysqli_error($conn);
          ?>
        </p>
      </div>
      <a class="btn btn-danger" href="../index.html" role="button">Regresar</a>
    </div>
  </div>
  </main>
  </body> 
  <?php
}
?>
<?php
mysqli_close($conn);
?>
