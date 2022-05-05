<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Eliminar productos</title>
</head>

<body>

<?php
// Solicitamos el archivo config.php con parametros de conexion a la base de datos
require('login.php');
// Se asocia lo ingresado en el formulario con un codigo previamente registrado
$codigoprod = $_POST['codigoprod'];

// Se define una sentencia SQL para consultar el registro con base en el codigo de producto ingresado
$sql = "SELECT * FROM productos WHERE cod=$codigoprod";
$result = mysqli_query($conn, $sql);

// Se define que accion realizar si la consulta devuelve registros en sus resultados, asi como si no devuelve resultado
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    
    // Se define sentencia SQL para eliminar registro de la base de datos
    $sql2 = "DELETE FROM productos WHERE cod=$codigoprod";

    if (mysqli_query($conn,$sql2)) {

?>

<div class="modal-dialog">
        <div class="modal-content"> 

            <!-- Header de la ventana modal -->
            <div class="modal-header">
                <h3 class="modal-title">Eliminando producto</h4> 
                <button class="close" onclick="location.href='../eliminarproducto.html'">&times;</button> 
            </div>

            <!-- Body de la ventana modal -->
            <div class="modal-body">
                <?php
                echo "El registro fue eliminado exitosamente";
                ?>
            </div>

            <!-- Footer de la ventana modal -->
            <div class="modal-footer">
                <button class="btn btn-success" onclick="location.href='../eliminarproducto.html'">Cerrar</button>  
            </div>
        </div>
    </div>

<?php

    }

else {

?>

<div class="modal-dialog">
        <div class="modal-content"> 

            <!-- Header de la ventana modal -->
            <div class="modal-header">
                <h3 class="modal-title">Error al eliminar datos</h4> 
                <button class="close" onclick="location.href='../eliminarproducto.html'">&times;</button> 
            </div>

            <!-- Body de la ventana modal -->
            <div class="modal-body">
                <?php
                echo "Error al eliminar el registro: <br>" . mysqli_error($conn);
                ?>
            </div>

            <!-- Footer de la ventana modal -->
            <div class="modal-footer">
                <button class="btn btn-danger" onclick="location.href='../eliminarproducto.html'">Cerrar</button>  
            </div>
        </div>
</div>

<?php

    }
}
}
else {

?>

<div class="modal-dialog">
        <div class="modal-content"> 

            <!-- Header de la ventana modal -->
            <div class="modal-header">
                <h3 class="modal-title">Error al eliminar datos</h4> 
                <button class="close" onclick="location.href='../eliminarproducto.html'">&times;</button> 
            </div>

            <!-- Body de la ventana modal -->
            <div class="modal-body">
                <?php
                echo "El producto no existe en la base de datos <br>";
                ?>
            </div>

            <!-- Footer de la ventana modal -->
            <div class="modal-footer">
                <button class="btn btn-danger" onclick="location.href='../eliminarproducto.html'">Cerrar</button>  
            </div>
        </div>
</div>

<?php
}

// Cerrar conexion con DB
mysqli_close($conn);
?>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>