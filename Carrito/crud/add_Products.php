<?php
  include '../includes/conexion.php';
  $name = $_POST['producto'];
  $descripcion = $_POST['descripcion'];
  $cantidad = $_POST['cantidad'];
  $precio = $_POST['precio'];

  $query ="INSERT INTO productos (nombre, description, stock, Precio) values('$name', '$descripcion','$cantidad', '$precio')";

if(mysqli_query($conn, $query)){
	    echo "<script> 
    alert('Se agrego correctamente!'); 
    window.location = '../src/webAdmin/dashboard.php'; 
    </script>";  
} else{
    echo "<script>
    alert('Fallo al agregar. Verifique...');  
    window.location = '../src/webAdmin/add_Products.php';
    </script>";  
  
}
?>