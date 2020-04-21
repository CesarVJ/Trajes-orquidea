<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Trajes Orquidea</title>
</head>
<body>
    <?php
		session_start();
		if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

            if($correo == "root@gmail.com"){
    			header("location: CatalogoAdmin.php");
            }else{
                header("location: CatalogoCliente.php");
			}
			exit;
        }
    ?>
    <div class="fondo"></div>
    <header>
		<nav class="menu contenido">
			<a href="index.php" class="logo"><strong>Trajes Orquidea</strong></a>
			<a href="" id="texto-cambiante">Registrarse</a>
	    </nav>
    </header>
    <div class="container contenido content" >
        <div  class="row">
            <div class="contenedor col-md-8">
                <img id="img-vestido" src="img/vestido.jpg" alt="vestido">
                <h2>EL nombre del vestido</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis quisquam dolore quae corrupti quia nam incidunt praesentium excepturi nisi, quidem non delectus quis, labore totam odit, iure saepe placeat harum!</p>
            </div>
            <div id="contenedor-login" class="contenedor col-md-4">
                <?php require_once("login.html")   ?>
            </div>
        </div>
    </div>
        <footer class="contenido">
            <p id="tel-contacto">Telefono: 273 - 000 - 00 - 00</p>            
            <img class="icono-footer" src="img/facebook.png" alt="">
            <img class="icono-footer" src="img/twitter.png." alt="">
            <img class="icono-footer" src="img/instagram.png" alt="">
        </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
</body>
</html>