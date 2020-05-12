<?php require_once("../ObtenerDatosUsuario.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/estilos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/catalogo.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../css/perfil.css?v=<?php echo time(); ?>">
        <script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <title>Trajes Orquidea</title>
</head>
<body>

<div class="contenido-body">
    <?php require_once("../componentes/menu.php") ?>
    <h1 class="titulo-Catalogo">Mis datos</h1>
        <div  class="row" style="margin: 0 auto;">
            <div id="contenedor-datos">
				<form id="form-datos" name="form-datos" action="actualizarDatos.php" onsubmit="return verificarDatosPerfil()" method="post" class="formulario" >
			        <input type="text" name="nombre" class="item" value="<?php echo $nombre_usuario; ?>" placeholder="Ingrese su nombre">
			        <div id="cont-calendario">
				        <img class="icono" id="perfil-calendario" src="../img/calendario.svg" alt="calendario">
				        <input type="date" name="fecha_nacimiento" class="item" value="<?php echo $fecha_nacimiento; ?>">
				        <input type="email" id="perfil-correo" name="correo" class="item" placeholder="Correo" value="<?php echo $correo; ?>" disabled>
			        </div>	
					<input type="text" name="direccion" class="item" placeholder="Direccion" value="<?php echo $correo; ?>">		
			        <input type="tel" name="telefono" class="item" placeholder="271-000-00-00" value="<?php echo $telefono; ?>">
			        <input type="password" name="contraseña" class="item contraseña-perfil" placeholder="Contraseña" value="<?php echo $contraseña; ?>">
			        <input type="password" name="confirmar_contraseña" class="item contraseña-perfil" placeholder="Confirmar contraseña">
			        <div class="grupo-error" id="error-perfil">
				        <img class="icono-error" src="../img/error.svg" alt="error">
				        <p class="mensaje-error" id="mensaje-error-perfil"></p>
			        </div>
			        <input id="guardar-cambios" type="submit" name="gurdar-cambios" value="Guardar cambios" class="btn btn-success">
                </form>
	        </div>    
            </div>
        </div>

</div>
    <?php include_once("../componentes/footer.html") ?>
    <script src="../js/validaciones.js?v=<?php echo time(); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>