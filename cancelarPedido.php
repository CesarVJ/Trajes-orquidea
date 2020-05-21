<?php
require_once("modelo/AccesoDatos.php");
session_start();
$conexion= abrirConexion();
$sql = "UPDATE Compras SET estado_compra = 'cancelado' WHERE id_compra = ".$_GET['id'];
if ($conexion->query($sql) === TRUE) {
    header("location: vista/misCompras.php?id=".$_SESSION['id']."&operacion=cancelar");
  } else {
    echo "Error al actualizar ";
  }
?>