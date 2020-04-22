<?php
    include 'modelo/AccesoDatos.php';
    $nombre = $correo = $contraseña = $confirmar_contraseña = $direccion = $fecha_nacimiento = $telefono = "";
    $error="";
    $num_usuarios =0;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $conexion = abrirConexion();
        $existeUsuario = false;
        if(empty(trim($_POST["nombre"])) || empty(trim($_POST["fecha_nacimiento"])) || empty(trim($_POST["correo"])) || empty(trim($_POST["contraseña"]))){

        }else{
            $consulta = "select correo from usuarios where correo = ?";
            if($statement = mysqli_prepare($conexion, $consulta)){
                mysqli_stmt_bind_param($statement, "s", $param_correo);   
                $param_correo = trim($_POST["correo"]);
                if(mysqli_stmt_execute($statement)){
                    mysqli_stmt_store_result($statement);
                    if(mysqli_stmt_num_rows($statement) !=0){
                        $existeUsuario=true;
                        echo "Ya existe";
                    }else{
                        $nombre = trim($_POST["nombre"]);
                        $correo = trim($_POST["correo"]);
                        $fecha_nacimiento = trim($_POST["fecha_nacimiento"]);
                        $telefono = trim($_POST["telefono"]);
                        $direccion = trim($_POST["direccion"]);
                        echo "todo bien";


                    }
                }else{
                    echo "Ah ocurrido un error! :(";
                }
                mysqli_stmt_close($statement);
            }
        }
        if(strlen(trim($_POST["contraseña"])) >= 4){
            $contraseña = trim($_POST["contraseña"]);
        }
        if(!empty(trim($_POST["confirmar_contraseña"]))){
            $confirmar_contraseña = trim($_POST["confirmar_contraseña"]);
        }

        $usuarios = "select id_usuario from usuarios";
        $resultado = mysqli_query($conexion, $usuarios);
        if($resultado){
            $num_usuarios = mysqli_num_rows($resultado);
            mysqli_free_result($resultado);
        }
        echo "Paso";
        echo $correo;
        echo $contraseña;


        if(!empty($correo) && !empty($contraseña) && !empty($confirmar_contraseña) && !$existeUsuario){
            echo "Paso 1";
            $consulta = "insert into usuarios(id_usuario, Nombre, fecha_nacimiento, correo, direccion, telefono, contraseña) values(?, ?, ?, ?, ?, ?, ?)";
            if($statement = mysqli_prepare($conexion, $consulta)){                
                mysqli_stmt_bind_param($statement, "sssssss",$param_id, $param_nombre, $param_fecha_nacimiento, $param_correo, $param_direccion, $param_telefono, $param_contraseña);
                $param_id = $num_usuarios + 1;
                $param_nombre= $nombre;
                $param_fecha_nacimiento = $fecha_nacimiento;
                $param_correo = $correo;
                $param_telefono = $telefono;
                $param_direccion = $direccion;
                $param_contraseña = $contraseña;
                echo "Paso 2";

                if(mysqli_stmt_execute($statement)){
                    header("location: index.php");
                } else{
                    echo "Algo ha salido mal";
                }
                mysqli_stmt_close($statement);
            }      
        }else{
            $error ="El usuario ya existe";
            #header("location: index.php");
        } 
        mysqli_close($conexion);
    }
?>

