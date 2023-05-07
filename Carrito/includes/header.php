      <?php
        include('conexion.php');
        $idUser =$_SESSION['user_id'];
        $sqlCarrito = "SELECT COUNT(ca.stock) as cantidad FROM carrito ca 
                        WHERE ca.id_usuario = ' $idUser'";
                        $result2 = mysqli_query($conn,$sqlCarrito);
                         while($row1= mysqli_fetch_array($result2)){
                            $catCarrito = $row1['cantidad'];
                         }
      ?>

      <aside>
          <header>
              <h1 class="logo"> Tienda Online</h1>
          </header>
          <nav>
              <ul class="menu">
                  <li><button class="boton-menu boton-categoria active"><i
                              class="bi bi-arrow-right-circle-fill"></i>Todos lo productos</button></li>
                  <li><a class="boton-menu boton-carrito" href="./carrito.php"><i class="bi bi-cart-fill"></i>Carrito
                          <span class="numero">
                              <?php
                                echo $catCarrito;
                              ?> </span></a></li>
                  <li><a href="./../../includes/logout.php?user=Client"
                          class="boton-menu boton-categoria btn btn-danger"><i
                              class=" bi bi-arrow-right-circle-fill"></i>Cerrar sesion</a></li>

              </ul>
          </nav>
      </aside>