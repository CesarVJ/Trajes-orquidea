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
		<div class="imagen-vestido" style="text-align:center;">
        <input type="file" name="portada" value="Inserta portada" accept=".jpg, .png, .svg, .jpeg">
		</div>

		<div class="contenedor-datos">
            <form id="form-agregarProducto" action="agregar.php" action="" method="post" name="form-agregarProducto">			
			<div id="nombre-articulo">
				<label><h3>Nombre:</h3></label>
				<input type="text" name="nombre-articulo" class="caja">
            </div>
            <div class="contenedor-descripcion">
				<h3>Descripción</h3>
                <input type="textarea" name="descripcion" class="descripcion">
            </div>
            <div class="contenedor-categoria">
					<label for="categoria"><h3>Categoria:</h3></label>
					<select name="categoria" id="categoria" onchange="verificarProducto(this);">
						<option>Selecciona categoria</option>
						<option value="Trajes">Trajes</option>
						<option value="Vestidos">Vestidos</option>
						<option value="Complementos">Complementos</option>
					</select>
            </div>
            <div id="contenedor-talla">
                <label for="talla"><h3>Talla:</h3></label>
                <input id="talla" type="text" name="talla">
            </div>
            <div class="contenedor-precio">
                <label for="precio"><h3>Precio:</h3></label>
                <input id="precio" type="text" name="precio">
            </div>
            <input type="button" name="agregar" value="Agregar producto" class="btn btn-success">
            </form>
		</div>
	</div>
</div>
    <?php include_once("componentes/footer.html") ?>
    <script src="js/validaciones.js"></script>
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