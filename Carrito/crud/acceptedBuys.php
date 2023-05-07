<?php
  include '../includes/conexion.php';
  $idUser = $_GET['idUser'];
  
date_default_timezone_set('America/Costa_Rica');
  $fechaHoy = date("Y-m-d");

$products ="SELECT ca.id_producto as idproducto, sum(ca.stock) as stock, sum(ca.stock*pro.Precio) as total 
FROM  carrito ca 
INNER JOIN productos pro on ca.id_producto = pro.id_producto
WHERE ca.id_usuario = '$idUser' and ca.fechaIngreso = '$fechaHoy' and ca.Estado = 'Activo' group by ca.id_producto";
 $results = mysqli_query($conn,$products);
 while($row = mysqli_fetch_array($results)){
	$stockProduc = $row['stock'];
    $idProduct = $row['idproducto'];
    $total = $row['total'];
    $buys ="INSERT INTO compras (id_usuario, id_producto, cantidad, precio) VALUES ('$idUser', '$idProduct','$stockProduc', '$total')";
    mysqli_query($conn,$buys);
  }
  
 
 

    if($total !=""){
        $quitarStock ="UPDATE carrito SET Estado = 'Pagado' WHERE id_usuario='$idUser' and fechaIngreso='$fechaHoy'";
        mysqli_query($conn, $quitarStock);
      
        echo "<script> 
        alert('Se Genero el pago correctamente!'); 
        window.location = '../src/webClient/dashboard.php';
        </script>";  
    } else{
        echo "<script>
        alert('Fallo pagar. Verifique...');  
       window.location = '../src/webClient/dashboard.php';
        </script>";  
    }


?>