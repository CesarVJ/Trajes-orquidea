<?php
include_once('modelo/Usuario.php');
    session_start();
    $sErr = "";
    #$acceso = new AccesoDatos();
    $usuario = new Usuario();
    
    /*if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty(trim($_POST["contraseña"])) && !empty(trim($_POST["correo"]))){
             trim($_POST["correo"]);
            $contraseña = trim($_POST["contraseña"]);
        }

    }*/

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
                    /*echo $usuario->getNombre();
                    echo $usuario->getId_usuario();
                    echo $usuario->getTipo_usuario();*/

                    $_SESSION["usuario"] = $usuario;
                    if ($usuario->getTipo_usuario()== 1)
                        $_SESSION["tipo"] = "Administrador";
                    else
                        $_SESSION["tipo"] = "Cliente";
                }
                else{
                    $sErr = "Usuario desconocido";
                }
            }catch(Exception $error){
                #echo "mal 1";
                $sErr = "Error al acceder a la base de datos";
            }
    }else{
        $sErr = "Faltan datos";
    }
    	
	if ($sErr == ""){
        if($_SESSION["tipo"] == "Administrador"){
            header("Location: inicio.php");
        }else if($_SESSION["tipo"] == "Cliente"){
            header("Location: inicio2.php");
        }
    }else{
        header("Location: error.php?sError=".$sErr);
    }


?>