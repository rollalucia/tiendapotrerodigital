<?php
$conexion = mysqli_connect("localhost","id19998281_potrero","@Jazmin2022!","id19998281_tienda_potrero");

$prenda = $_POST['prenda'];
$marca = $_POST['marca'];
$talle = $_POST['talle'];
$color = $_POST['color'];
$precio = $_POST['precio'];
$id = $_POST['id'];

$consulta = "UPDATE `productos` SET `tipo_de_prenda` = '$prenda', `marca` = '$marca', `talle` = '$talle', `color` = '$color', `precio` = '$precio' WHERE `productos`.`id` = $id";
mysqli_query($conexion, $consulta);
header('location: index.php');

?>