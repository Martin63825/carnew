<!DOCTYPE html>
<html lang="en">

<head>
    <?php
      include('./../../includes/conexion.php');
      include("./../../includes/head.php");
      session_start();
      $idUser =$_SESSION['user_id'];
      
?>
    <link rel="stylesheet" href="./../../css/main.css">
</head>

<body>
    <?php
        $sqlCarrito = "SELECT COUNT(ca.stock) as cantidad FROM carrito ca 
                        WHERE ca.id_usuario = ' $idUser'";
                        $result2 = mysqli_query($conn,$sqlCarrito);
                         while($row1= mysqli_fetch_array($result2)){
                            $catCarrito = $row1['cantidad'];
                         }
      ?>

    <div class="wrapper">
        <aside>
            <header>
                <h1 class="logo"> Tienda</h1>
            </header>
            <nav>
                <ul>
                    <li><a class="boton-menu boton-volver" href="./dashboard.php"><i
                                class="bi bi-arrow-return-left"></i>Seguir comprando</a></li>
                    <li><a class="boton-menu boton-carrito active" href="./carrito.php"><i
                                class="bi bi-cart-fill"></i>Carrito <span class="numero">
                                <?php echo  $catCarrito ;?> </span></a></li>
                </ul>
            </nav>

        </aside>
        <main>
            <h2 class="titulo-principal">Carrito</h2>
            <div class="contenedor-carrito">
                <?php
                  $ProductsExite = "SELECT COUNT(ca.stock) as total, SUM(ca.stock * pro.Precio) as subtotal 
                  FROM carrito ca 
                  INNER JOIN productos pro on ca.id_producto = pro.id_producto
                  WHERE ca.id_usuario = ' $idUser'";
                        $results = mysqli_query($conn,$ProductsExite);
                         while($row2 = mysqli_fetch_array($results)){
                            $carritoVacio = $row2['total'];
                            $carritoSubTotal = $row2['subtotal'];
                         }
                        
                  
                         if($carritoVacio == 0){?>
                <p class="carrito-vacio">Tu carrito esta vacio</p>

                <?php
                    }else{?>
                <p class="carrito-vacio">Tu carrito tiene productos</p>
                <?php 
                }
                ?>
                <?php  
                if($carritoVacio != 0){?>
                <div style="display: flex;" class="carrito-acciones">
                    <div class="carrito-acciones-izquierda">
                        <a class="carrito-acciones-vaciar"
                            href="./../../crud/emptyCarrito.php?idUser=<?php echo $idUser;?>">Vaciar
                            carrito</a>
                    </div>
                    <div class="carrito-acciones-derecha">
                        <div class="carrito-acciones-total">
                            <p>TOTAL: </p>
                            <p><?php echo "$".$carritoSubTotal?></p>
                        </div>
                        <button class=" carrito-acciones-comprar">Comprar ahora</button>
                    </div>
                </div>
                <?php
                }else if($carritoVacio == 0){?>
                <div class="carrito-acciones">
                    <div class="carrito-acciones-izquierda">
                        <a class="carrito-acciones-vaciar" readonly>Vaciar
                            carrito</a>
                    </div>
                    <div type="hidden" class=" carrito-acciones-derecha">
                        <div class="carrito-acciones-total">
                            <p>TOTAL: </p>
                            <p><?php echo "$".$carritoSubTotal?></p>
                        </div>
                        <button class="carrito-acciones-comprar" readonly>Comprar ahora</button>
                    </div>
                </div>
                <?php
                }
                ?>
                <div class=" carrito-productos">
                    <?php
                        $sqlProducts = "SELECT ca.stock as cantidad, pro.nombre as nombre, pro.Precio as precio, (ca.stock * pro.Precio) as subtotal 
                        FROM carrito ca 
                        INNER JOIN productos pro on ca.id_producto = pro.id_producto 
                        WHERE ca.id_usuario = ' $idUser'";
                        $result = mysqli_query($conn,$sqlProducts);
                         while($row = mysqli_fetch_array($result)){
                         
                          ?>
                    <div class="carrito-producto">
                        <img class="carrito-producto-imagen" src="./img/producto1.jpg" alt="">
                        <div class="carrito-producto-titulo">
                            <small>Producto</small>
                            <h3><?php echo $row['nombre'];?></h3>
                        </div>
                        <div class="carrito-producto-cantidad">
                            <small>Cantidad</small>
                            <p><?php echo $row['cantidad'];?></p>
                        </div>
                        <div class="carrito-producto-precio">
                            <small>Precio</small>
                            <p><?php echo $row['precio'];?></p>
                        </div>
                        <div class="carrito-producto-subtotal">
                            <small>Subtotal</small>
                            <p><?php echo $row['subtotal'];?></p>
                        </div>
                        <button class="carrito-producto-eliminar"><i class="bi bi-trash3-fill"></i></button>
                    </div>
                    <?php    
                    }
                    ?>
                </div>

            </div>
        </main>
    </div>
    <?php
      include('../../includes/foother.php');
    ?>
</body>

</html>