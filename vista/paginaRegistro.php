<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Trajes Orquidea</title>
</head>
<body>
	<?php
	/*
		session_start();
		if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            if($correo == "root@gmail.com"){
    			header("location: CatalogoAdmin.php");
            }else{
                header("location: CatalogoCliente.php");
			}
			exit;
        }*/
    ?>
    <div class="fondo"></div>
    <header>
		<nav class="menu contenido">
			<a href="../index.php" class="logo"><strong>Trajes Orquidea</strong></a>
			<a href="../index.php" id="texto-cambiante">Iniciar Sesión</a>
	    </nav>
    </header>
    <div id="contenido-principal-registro" class="contenido content contenido-principal" >
        <div  class="row">
            <div id="contenedor-registro" class="contenedor">
				<form id="form-registro" name="form-registro" action="../registro.php" onsubmit="return validarRegistro()" method="post" class="formulario" >
					<h2>Registrarse</h2>
			        <input type="text" name="nombre" class="item" placeholder="Ingrese su nombre">
			        <div id="cont-calendario">
				        <img class="icono" id="calendario" src="../img/calendario.svg" alt="calendario">
				        <input type="date" name="fecha_nacimiento" class="item">
				        <input type="email" id="correo" name="correo" class="item" placeholder="Correo">
			        </div>	
					<input type="text" name="direccion" class="item" placeholder="Direccion">		
			        <input type="tel" name="telefono" class="item" placeholder="271-000-00-00">
			        <input type="password" name="contraseña" class="item" placeholder="Contraseña">
			        <input type="password" name="confirmar_contraseña" class="item" placeholder="Confirmar contraseña">
			        <div class="grupo-error" id="error-registro">
				        <img class="icono-error" src="../img/error.svg" alt="error">
				        <p class="mensaje-error" id="mensaje-error-registro"></p>
			        </div>
			        <input type="submit" name="registrarse" value="Registrarse" class="boton">
                </form>
	        </div>    
            </div>
        </div>
    </div>
    <?php include_once("../componentes/footer.html") ?>

	<script src="../js/validaciones.js?v=<?php echo time(); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
</body>
</html>