<?php
session_start();

require("modelo/Producto.php");
#require("modelo/AccesoDatos.php");


$conexion= abrirConexion();
$producto = new Producto();


if (isset($_GET['id'])){

    $producto->setId_producto($_GET['id']);

    $sql = "DELETE FROM producto WHERE id_producto = ?";

    if($stmt = mysqli_prepare($conexion, $sql)){
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        $param_id = $producto->getId_producto();
        if(mysqli_stmt_execute($stmt)){
            header("location: index.php");
            exit();
        } else{
            echo "No se pudo eliminar el producto";
        }
    }
    # Se cierra la conexion
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
} else{
    echo "Algo ha salido mal";
}

?>