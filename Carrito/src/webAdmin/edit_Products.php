<?php
  include('./../../includes/conexion.php');
  $id = $_GET['idProducts'];
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
     include("./../../includes/head.php");
?>
    <link rel="stylesheet" href="./../../css/main.css">
</head>

<?php

$query ="SELECT*FROM productos WHERE id_producto ='$id'";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result)){
	$name = $row['nombre'];
	$description = $row['description'];
    $cant = $row['stock'];
    $precio = $row['Precio'];
}
  
?>

<body class="text-bg-secondary p-3">
    <div class="container formLogin text-bg-info p-5">
        <div class="alert alert-secondary lb-login" role="alert">
            Editar Producto
        </div>
        <form action=" ./../../crud/edit_Products.php?idProducts=" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del Producto</label>
                <input value="<?php echo  $name; ?>" type="text" class="form-control" id="producto" name="producto">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripción</label>
                <input value="<?php echo  $description; ?>" type="text" class="form-control" id="descripcion"
                    name="descripcion">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                <input value="<?php echo  $cant; ?>" type="text" class="form-control" id="cantidad" name="cantidad">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input value="<?php echo  $precio; ?>" type="text" class="form-control" id="precio" name="precio">
                <input value="<?php echo  $id; ?>" type="hidden" class="form-control" id="id" name="id">
            </div>
            <a href="./dashboard.php" type="submit" class="btn btn-outline-danger">Cancelar</a>
            <button type="submit" class="btn btn-success">Actualizar Producto</button>

        </form>
    </div>

</body>

</html>