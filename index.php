<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css?v=<?php echo time(); ?>">
    <title>Trajes Orquidea</title>
</head>

<body>
<div class="contenido-body">
    <?php
		session_start();
		if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            if($_SESSION["tipo"]=="Administrador"){
    			header("location: vista/CatalogoAdmin.php");
            }else{
                header("location: vista/CatalogoCliente.php");
			}
			exit;
        }
        echo "Datos para accedo de administrador: correo: root@gmail.com contraseña:root";
    ?>
    <div class="fondo"></div>
    <header>
        <nav class="menu contenido">
            <a href="index.php" class="logo"><strong>Trajes Orquidea</strong></a>
            <a href="vista/paginaRegistro.php" id="texto-cambiante">Registrarse</a>
        </nav>
    </header>
    <div class="contenido content container">
        <div class="row">
            <div class="contenedor contenedor-vestido col-lg-4 col-md-6 col-sm-12">
                <img id="img-vestido" src="img/vestido.jpg" alt="vestido">
            </div>

            <div class="contenedor contenedor-texto col-lg-4 col-md-6 col-sm-12">
            <h2 id="titulo-principal">Vestido tipico de Chocaman</h2>
                <p id="descripcion-principal">Lel vestido típico de chocaman tiene diferentes detalles,
                    entre ellos muchos animales y plantas representante de la region de chocaman, cada 
                    uno cuenta con diferentes significados.</p>
            </div>

            <div id="contenedor-login" class="contenedor col-lg-4 col-md-12 col-sm-12">
                <form action="login.php" method="post" class="formulario" id="iniciar-sesion" onsubmit="return verificarInicio();">
                    <h2>Iniciar Sesión</h2>
                    <div class="grupo-correo">
                        <p class="texto">Correo</p>
                        <img class="icono" src="img/usuario.svg" alt="usuario">
                        <input type="email" name="correo" class="item-inicio" placeholder="example@gmail.com" value="">
                        <div class="grupo-error" id="error-correo">
                            <img class="icono-error" src="img/error.svg" alt="error">
                            <p class="mensaje-error">El correo ingresado no es valido</p>
                        </div>
                    </div>
                    <div class="grupo-contraseña">
                        <p class="texto">Contraseña</p>
                        <img class="icono" src="img/contraseña.svg" alt="contraseña">
                        <input type="password" name="contraseña" class="item-inicio" placeholder="Contraseña">
                        <div class="grupo-error" id="error-contraseña">
                            <img class="icono-error" src="img/error.svg" alt="error">
                            <p class="mensaje-error">La contraseña es incorrecta</p>
                        </div>
                        <div class="grupo-error" id="error-inicio">
                            <img class="icono-error" src="img/error.svg" alt="error">
                            <p id ="mensaje-inicio" class="mensaje-error"> </p>
                        </div>
                        <input type="submit" name="entrar" value="Iniciar sesión" class="boton btn-iniciar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="footer-index">
        <p id="tel-contacto">Telefono: 273 - 000 - 00 - 00</p>
        <img class="icono-footer" src="img/facebook.png" alt="">
        <img class="icono-footer" src="img/twitter.png." alt="">
        <img class="icono-footer" src="img/instagram.png" alt="">
    </div>
    <script src="js/validaciones.js?v=<?php echo time(); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(109433)</script> 
</body>

</html>
<?php
		if (isset($_GET['error'])){			
			if($_GET['error'] == 1){
				echo "<script type='text/javascript'>mensajeError('El usuario no existe');</script>";
			}else if($_GET['error'] == 2){
				echo "<script type='text/javascript'>mensajeError('La contraseña es incorrecta');</script>";
			}else if($_GET['error'] == 3){
				echo "<script type='text/javascript'>mensajeError('Por favor, ingrese todo los datos');</script>";
            }
		}

?>