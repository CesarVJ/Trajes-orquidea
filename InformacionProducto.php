<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/catalogo.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="css/centro.css?v=<?php echo time(); ?>">

    <title>Trajes Orquidea</title>
</head>
<body>
<div class="contenido-body">
    <?php require_once("menu.php") ?>
    <h1 class="titulo-Catalogo">Trajes Orquidea</h1>
    <div class="contenedor-general">
		<div class="imagen-vestido">
			<span>Vestido</span>
		</div>

		<div class="contenedor-datos">
			<h1 id="nombre-articulo">Nombre: <span>------</span></h1>

				<h3>Descripción</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni mollitia obcaecati quam voluptate dolorem reiciendis aliquid praesentium fugiat! Nemo doloremque placeat perferendis quasi facere sequi ut voluptatibus nihil sunt vitae?</p>

				<label for="cantidad-articulos">Cantidad:</label>
				<input type="number" name="cantidad-articulos" min="1" id="cantidad-articulos">

				<label>Precio: <span>$$</span></label><br>

				<button>Realizar compra</button>

		</div>
	</div>
</div>
    <?php include_once("componentes/footer.html") ?>
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