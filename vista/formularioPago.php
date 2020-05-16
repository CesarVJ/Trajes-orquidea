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
		<div class="contenedor-general container">
			<div class="contenedor-pago">
				<h1 id="titulo">Tarjeta de Debito/Credito</h1>

				<div class="nombre-titular">
					<p>Nombre del titular:</p>
					<input type="text" name="nombre-titular" class="texto">
				</div>

				<div class="numero-tarjeta">
					<p>Número de la tarjeta:</p>
					<input type="text" name="numero-tarjeta" class="texto">
				</div>

				<div class="fecha-expiracion">
					<p>Fecha de expiración:</p>
					<input type="month" name="fecha-expiracion" class="texto">
				</div>

				<div class="codigo-seguridad">
					<p>Código de seguridad:</p>
					<input id="codigo-seguridad" type="number" max="999" name="codigo-seguridad" class="texto">
				</div>
			</div>

			<div class="mostrar-pago">
				<h1>Total a pagar: <?php echo $total_pagar;?><span id="total-pagar">$</span></h1>
				<h1>Usted ha seleccionado: <span id="cantidad"></span></h1>
				<h3><?php echo $producto->getNombre_producto();?> X <?php echo $cantidad;?> </h3>


				<a href="#" onclick="window.history.go(-1); return false;"><button id="btn-regresar" class="btn btn-outline-danger btn-lg btn-block">Regresar</button></a>
				<input type="submit" id="btn-comprar" class="btn btn-success btn-lg btn-block" value="Comprar Articulo(s)">
			</div>
		</div>

</body>

</html>