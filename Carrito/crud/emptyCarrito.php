<?php
  include '../includes/conexion.php';
  $IdUser = $_GET['idUser'];
  date_default_timezone_set('America/Costa_Rica');
  $fechaHoy = date("Y-m-d");

  echo $fechaHoy ;
  $query ="DELETE FROM  carrito WHERE id_usuario = '$IdUser' and fechaIngreso = '$fechaHoy'";

if(mysqli_query($conn, $query)){
	    echo "<script> 
    alert('Se Vacio el Carrito correctamente!'); 
    window.location = '../src/webClient/carrito.php'; 
    </script>";  
} else{
    echo "<script>
    alert('Fallo al Vaciar el Carrito. Verifique...');  
    window.location = '../src/webClient/carrito.php';
    </script>";  
  
}
?>