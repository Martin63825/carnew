<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../../css/main.css">
</head>

<body>

    <div class="wrapper">
        <aside>
            <header>
                <h1 class="logo"> Tienda</h1>
            </header>
            <nav>
                <ul>
                    <li><a class="boton-menu boton-volver" href="./index.html"><i
                                class="bi bi-arrow-return-left"></i>Seguir comprando</a></li>
                    <li><a class="boton-menu boton-carrito active" href="./carrito.html"><i
                                class="bi bi-cart-fill"></i>Carrito <span class="numero">0</span></a></li>
                </ul>
            </nav>

        </aside>
        <main>
            <h2 class="titulo-principal">Carrito</h2>
            <div class="contenedor-carrito">
                <p class="carrito-vacio">Tu carrito esta vacio</p>
                <div class="carrito-productos">
                    <div class="carrito-producto">
                        <img class="carrito-producto-imagen" src="./img/producto1.jpg" alt="">
                        <div class="carrito-producto-titulo">
                            <small>Titulo</small>
                            <h3>Prodcuto 01</h3>
                        </div>
                        <div class="carrito-producto-cantidad">
                            <small>Cantidad</small>
                            <p>1</p>
                        </div>
                        <div class="carrito-producto-precio">
                            <small>Precio</small>
                            <p>20</p>
                        </div>
                        <div class="carrito-producto-subtotal">
                            <small>Subtotal</small>
                            <p>20</p>
                        </div>
                        <button class="carrito-producto-eliminar"><i class="bi bi-trash3-fill"></i></button>
                    </div>
                    <div class="carrito-producto">
                        <img class="carrito-producto-imagen" src="./img/producto2.jpg" alt="">
                        <div class="carrito-producto-titulo">
                            <small>Titulo</small>
                            <h3>Prodcuto 02</h3>
                        </div>
                        <div class="carrito-producto-cantidad">
                            <small>Cantidad</small>
                            <p>2</p>
                        </div>
                        <div class="carrito-producto-precio">
                            <small>Precio</small>
                            <p>20</p>
                        </div>
                        <div class="carrito-producto-subtotal">
                            <small>Subtotal</small>
                            <p>40</p>
                        </div>
                        <button class="carrito-producto-eliminar"><i class="bi bi-trash3-fill"></i></button>
                    </div>
                </div>

                <div class="carrito-acciones">
                    <div class="carrito-acciones-izquierda">
                        <button class="carrito-acciones-vaciar">Vaciar carrtio</button>
                    </div>
                    <div class="carrito-acciones-derecha">
                        <div class="carrito-acciones-total">
                            <p>total</p>
                            <p>60</p>
                        </div>
                        <button class="carrito-acciones-comprar">Comprar ahora</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php
      include('../../includes/foother.php');
    ?>

</body>

</html>