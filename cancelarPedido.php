<?php
require_once("modelo/AccesoDatos.php");

$conexion= abrirConexion();

$sql = "UPDATE Compras SET estado_compra = 'cancelado' WHERE id_compra = ".$_GET['id'];
if ($conexion->query($sql) === TRUE) {
    echo "Se ha cancelado su compra";
  } else {
    echo "Error al actualizar ";
  }
?>