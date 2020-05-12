<?php
require("AccesoDatos.php");
$conexion= abrirConexion();
if(isset($_GET["id"]) && !empty($_GET["id"])){
    #require_once("../obtenerDatos.php");

    $id_producto =$_GET["id"];
    
    #$nombre_producto = trim($_POST["nombre-producto"]);
    if($_POST["nombre-producto"]==""){
        $nomb_err = "Por favor, ingrese un nombre de producto";     
    }
    
    if(empty($nomb_err)){
        if(basename($_FILES['imagen']['name']) == null || basename($_FILES['imagen']['name']) == ""){
            $sql = "UPDATE producto SET nombre_producto=?, categoria=?, precio=?, descripcion=?, talla=? WHERE id_producto=?";
        }else{
            $sql = "UPDATE producto SET nombre_producto=?, categoria=?, precio=?, descripcion=?, talla=?, imagen=? WHERE id_producto=?";
        }

 
        if($stmt = mysqli_prepare($conexion, $sql)){
            if(basename($_FILES['imagen']['name']) == null || basename($_FILES['imagen']['name'])==""){
                mysqli_stmt_bind_param($stmt,"ssdsii", $param_nombre, $param_categoria, $param_precio, $param_descripcion, $param_talla, $param_id);
            }else{
                mysqli_stmt_bind_param($stmt,"ssdsisi", $param_nombre, $param_categoria, $param_precio, $param_descripcion, $param_talla, $param_imagen, $param_id);
            }
            
            $param_nombre = $_POST["nombre-producto"];
            $param_categoria = $_POST["categoria"];
            $param_precio= $_POST["precio"];
            $param_descripcion= $_POST["descripcion"];;
            $param_talla= $_POST["talla"];;
            $param_imagen= basename($_FILES['imagen']['name']);
            $param_id = $id_producto;
            echo "Id: ".$id_producto;
            
            if(mysqli_stmt_execute($stmt)){
                require_once("almacenarImagen.php");
                header("location: ../vista/CatalogoAdmin.php");
                exit();
            } else{
                echo "Ocurrio un error al editar el articulo, intentelo de nuevo.";
            }
            mysqli_stmt_close($stmt);
        }
         
    }
    
    mysqli_close($conexion);
}

?>