<?php
include_once('modelo/Usuario.php');
    session_start();
    $sErr = "";
    $usuario = new Usuario();
    if (isset($_POST["contraseña"]) && !empty($_POST["contraseña"]) &&
         isset($_POST["correo"]) && !empty($_POST["correo"])){
            $correo = $_POST["correo"];
            $contraseña = $_POST["contraseña"];
            $usuario->setCorreo($correo);
            $usuario->setContraseña($contraseña);
            try{
                if ( $usuario->buscarCorreo() ){
                    echo "Bien 1";
                    $nombre = $usuario->getNombre();
                    if($usuario->getContraseña() == $contraseña){
                        session_start(); // Se inicia la sesion
                        $_SESSION["loggedin"] = true;
                        $_SESSION["usuario"] = $usuario;
                        if ($usuario->getTipo_usuario()== 1)
                            $_SESSION["tipo"] = "Administrador";
                        else
                            $_SESSION["tipo"] = "Cliente";
                    }else{
                        $sErr = "Contraseña incorrecta";
                    }
                }else{
                    $sErr = "Usuario desconocido";
                }
            }catch(Exception $error){
                $sErr = "Error al acceder a la base de datos";
            }
    }else{
        $sErr = "Faltan datos";
    }    	
	if ($sErr == ""){
        if($_SESSION["tipo"] == "Administrador"){
            header("location: CatalogoAdmin.php");
        }else if($_SESSION["tipo"] == "Cliente"){
            header("location: CatalogoCliente.php");
        }
    }else{
        header("Location: error.php?sError=".$sErr);
    }

?>