<?php require_once("../obtenerDatos.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/estilos.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="../css/catalogo.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="../css/realizarPago.css?v=<?php echo time(); ?>">
	<script src="https://code.jquery.com/jquery-3.5.0.js"
		integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
	<title>Trajes Orquidea</title>
</head>

<body>
<?php

if(!empty(trim($_POST["cantidad-articulos"])) & !empty(trim($_POST['precioFinal']))){
	$cantidad = trim($_POST['cantidad-articulos']);
	$total_pagar = trim($_POST['precioFinal']);
	$articulo = trim($_GET['id']);
}
?>
	<?php require_once("../obtenerDatos.php")?>
	<div class="contenido-body">
		<?php require_once("../componentes/menu.php") ?>
		<h1 class="titulo-Catalogo">Trajes Orquidea</h1>
		<form id="form-pago" name="form-pago" class="contenedor-general container" method="post" action="../pagoExitoso.php?id=<?php echo $articulo."&cantidad=".$cantidad."&total=".$total_pagar;?>" onsubmit="return validarDatosPago()">
			<div class="contenedor-pago">
				<h1 id="titulo">Tarjeta de Debito/Credito</h1>

				<div class="nombre-titular">
					<p class="titulo-pago">Nombre del titular:</p>
					<input type="text" name="nombre-titular" class="texto">
				</div>

				<div class="numero-tarjeta">
					<p class="titulo-pago">Número de la tarjeta:</p>
					<input type="text" name="numero-tarjeta" class="texto">
				</div>

				<div class="fecha-expiracion">
					<p class="titulo-pago">Fecha de expiración:</p>
					<input type="month" name="fecha-expiracion" class="texto">
				</div>

				<div class="codigo-seguridad">
					<p class="titulo-pago">Código de seguridad:</p>
					<input id="codigo-seguridad" type="number" max="999" name="codigo-seguridad" class="texto">
				</div>
			</div>

			<div class="mostrar-pago">
				<h1>Total a pagar: <?php echo $total_pagar;?><span id="total-pagar">$</span></h1>
				<h2>Usted ha seleccionado: <span id="cantidad"></span></h2>
				<ul>
				<li><h3><?php echo $producto->getNombre_producto();?> X <?php echo $cantidad;?> </h3></li>
				</ul>
				<div class="grupo-error" id="error-comprar">
                    <img class="icono-error" src="../img/error.svg" alt="error">
                    <p id ="error-comprar-mensaje" class="mensaje-error"> </p>
                </div>


				<a href="#" onclick="window.history.go(-1); return false;"><button id="btn-regresar" class="btn btn-outline-danger btn-lg btn-block">Regresar</button></a>
				<input type="submit" id="btn-comprar" class="btn btn-success btn-lg btn-block" value="Comprar Articulo(s)">
</form>

		</div>
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