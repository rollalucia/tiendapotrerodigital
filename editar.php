<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Potrero Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/55c8f6dfe2.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
    $id = $_GET["id"];
$conexion = mysqli_connect("localhost","id19998281_potrero","@Jazmin2022!","id19998281_tienda_potrero");
$consulta = "SELECT * FROM productos WHERE id = $id";

    $datos = mysqli_query($conexion, $consulta);
    if (isset($_POST["user"]) && isset($_POST["pass"])){
      $user = $_POST["user"];
      $pass = $_POST["pass"];
    } else {
      $user = '';
      $pass = '';
    }
    
?>
<nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2 active" aria-current="page">Inicio</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Preguntas frecuentes</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-dark px-2"></a></li>
      </ul>
      <ul class="nav">
        <li class="nav-item"><a href="login.php" class="nav-link link-dark px-2">Login</a></li>
      </ul>
    </div>
  </nav>
  <header class="mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center align-items-center">
      <a href="/tienda_de_potrero/" class="d-flex align-items-center mb-0 mb-lg-0 me-lg-auto text-dark text-decoration-none">
        <img src="public/media/img/favicon/favicon.png" alt="Logo de potrero digital" class="m-2">
        <span class="fs-4 py-3">Tienda de Potrero Digital</span>
      </a>
    </div>
  </header>
  <main>
  <div class="album py-5 bg-light">
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php 
        while($fila = mysqli_fetch_array($datos)){
        echo '<div class="col">';
        echo '<form class="card shadow-sm" method="POST" action="update.php">';
        // echo '<img class="img-responsive w-100 alto-minimo" src="#" alt="" width="100%">';
          echo '<div class="card-body">';
            echo '<h4 class="text-center mt-2 mb-3">Agregar producto</h6>';
            echo '<input type="text" class="d-none" id="id" placeholder="id" name="id" value="'.$id.'">';
            echo '<div class="form-floating mb-1 fs-6 lh-1">';
              echo '<input type="text" class="form-control" id="prenda" placeholder="Tipo de prenda" name="prenda" value="'.ucfirst($fila["tipo_de_prenda"]).'" autofocus>';
              echo '<label for="prenda">Tipo de prenda</label>';
            echo '</div>';
            echo '<div class="form-floating mb-1 fs-6 lh-1">';
              echo '<input type="text" class="form-control" id="marca" placeholder="Marca" name="marca" value="'.ucfirst($fila["marca"]).'">';
              echo '<label for="marca">Marca</label>';
            echo '</div>';
            echo '<div class="form-floating mb-1 fs-6 lh-1">';
              echo '<input type="text" class="form-control" id="talle" placeholder="Talle" name="talle" value="'.ucfirst($fila["talle"]).'">';
              echo '<label for="talle">Talle</label>';
            echo '</div>';
            echo '<div class="form-floating mb-1 fs-6 lh-1">';
              echo '<input type="text" class="form-control" id="color" placeholder="Color" name="color" value="'.ucfirst($fila["color"]).'">';
              echo '<label for="color">Color</label>';
            echo '</div>';
            echo '<div class="form-floating mb-1 fs-6 lh-1">';
              echo '<input type="number" class="form-control" id="precio" placeholder="Precio" name="precio" value="'.$fila["precio"].'">';
              echo '<label for="precio">Precio</label>';
            echo '</div>';
            echo '<div class="d-flex justify-content-center my-3">';
            echo '<button type="submit" class="btn btn-primary">Agregar</button>';
            echo '</div>';

            
          echo '</div>';
        echo '</form>';
    }?>
      </div>      
    </div>
  </div>
  </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>