<?php 
if(isset($_GET['id']) && !empty($_GET["id"])){
    require("modelo/AccesoDatos.php");
    $conexion= abrirConexion();
    $id_usuario =$_GET["id"];
        $sql = "UPDATE usuarios SET Nombre=?, fecha_nacimiento=?, direccion=?, telefono=?, contraseña=? WHERE id_usuario=?";
        
        if($stmt = mysqli_prepare($conexion, $sql)){
            mysqli_stmt_bind_param($stmt,"sssssi", $param_nombre, $param_fecha, $param_direccion, $param_telefono, $param_contraseña, $param_id);
            $param_nombre= $_POST["nombre"];
            $param_fecha= $_POST["fecha_nacimiento"];
            $param_direccion=$_POST["direccion"];
            $param_telefono= $_POST["telefono"];
            $param_contraseña=$_POST["contraseña"];
            $param_id = $id_usuario;
            
            if(mysqli_stmt_execute($stmt)){
                header("location: vista/Perfil.php?id=".$_GET["id"]);
                exit();
            } else{
                echo "Ocurrio un error al actualizar su informacion, intentelo de nuevo.";
            }
            mysqli_stmt_close($stmt);
        }
    mysqli_close($conexion);
}



?>