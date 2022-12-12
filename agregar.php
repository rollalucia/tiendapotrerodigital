<?php
 $prenda = $_POST['prenda'];
 $marca = $_POST['marca'];
 $talle = $_POST['talle'];
 $color = $_POST['color'];
 $precio = $_POST['precio'];
 
$conexion = mysqli_connect("localhost","id19998281_potrero","@Jazmin2022!","id19998281_tienda_potrero");
$consulta = "INSERT INTO `productos` (`id`, `tipo_de_prenda`, `marca`, `talle`, `color`, `precio`) VALUES (NULL, '$prenda', '$marca', '$talle', '$color', '$precio');";

 mysqli_query($conexion, $consulta);
 header('location: index.php');
 
?>