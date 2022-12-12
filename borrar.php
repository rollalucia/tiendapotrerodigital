<?php

$id = $_GET["id"];
$conexion = mysqli_connect("localhost","id19998281_potrero","@Jazmin2022!","id19998281_tienda_potrero");
$consulta = "DELETE FROM productos WHERE `productos`.`id` = $id";

mysqli_query($conexion, $consulta);

header('location: index.php');
?>