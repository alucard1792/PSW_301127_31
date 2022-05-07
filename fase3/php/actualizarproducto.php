<!DOCTYPE html>
<html lang="es">
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
    $cod = $_POST['codigoprod'];
    $nombre = $_POST['nombreprod'];
    $marca = $_POST['marcaprod'];
    $precio = $_POST['precioprod'];
    $cantidad = $_POST['cantidadprod'];   
    
    $update = "UPDATE productos 
            SET nombre = '$nombre',
            marca = '$marca',
            precio = '$precio',
            cantidad = '$cantidad'
            WHERE cod = $cod";
       
?>

<main class="container">
    
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5>Resultados de La Consulta</h5>
        <button class="close" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="modal-body">
        <div class="alert alert-success">
    <?php
        if(isset($_POST['btnmodificar']))
        {
            include('login.php');
            mysqli_query($conn, $update);          
            echo "Los Registros se han actualizado de forma exitosa";
        } 
        
    ?>
        </div>
    </div>

    <div class="modal-footer">
        <button class="btn btn-warning" type="button" data-dismiss="modal" onclick="location.href='../editarproducto.html'">
            Cerrar
    </button>
            </div>
        </div>
    </div>

</main>    

 </body>