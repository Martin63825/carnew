<!DOCTYPE html>
<html lang="en">


<head>
    <?php
      include("./../../includes/head.php");
?>
    <link rel="stylesheet" href="./../../css/main.css">
</head>



<body>
    <div class="wrapper">
        <?php
      include("./../../includes/header.php");
        ?>
        <main>
            <h2 class="titulo-principal">Todos los productos</h2>
            <div class="contenedor-productos">
                <div class="producto">
                    <img class="producto-imagen" src="./img/producto1.jpg" alt="">
                    <div class="producto-detalles">
                        <h3 class="producto-titulo">producto 01</h3>
                        <p class="producto-precio">$20</p>
                        <button class="producto-agregar">Agregar</button>
                    </div>
                </div>
                <div class="producto">
                    <img class="producto-imagen" src="./img/producto2.jpg" alt="">
                    <div class="producto-detalles">
                        <h3 class="producto-titulo">producto 02</h3>
                        <p class="producto-precio">$20</p>
                        <button class="producto-agregar">Agregar</button>
                    </div>
                </div>
                <div class="producto">
                    <img class="producto-imagen" src="./img/producto3.jpg" alt="">
                    <div class="producto-detalles">
                        <h3 class="producto-titulo">producto 03</h3>
                        <p class="producto-precio">$20</p>
                        <button class="producto-agregar">Agregar</button>
                    </div>
                </div>
                <div class="producto">
                    <img class="producto-imagen" src="./img/producto1.jpg" alt="">
                    <div class="producto-detalles">
                        <h3 class="producto-titulo">producto 04</h3>
                        <p class="producto-precio">$20</p>
                        <button class="producto-agregar">Agregar</button>
                    </div>
                </div>
                <div class="producto">
                    <img class="producto-imagen" src="./img/producto2.jpg" alt="">
                    <div class="producto-detalles">
                        <h3 class="producto-titulo">producto 05</h3>
                        <p class="producto-precio">$20</p>
                        <button class="producto-agregar">Agregar</button>
                    </div>
                </div>
            </div>
        </main>

    </div>
    <?php
      include("./../../includes/foother.php");
    ?>
</body>

</html>