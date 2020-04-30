<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/catalogo.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/fontello.css">

    <title>Trajes Orquidea</title>
</head>

<body>
    <div class="contenido-body">
        <?php require_once("menu.php") ?>
        <h1 class="titulo-Catalogo">Trajes Orquidea</h1>
        <div class="container">
            <div class="row">
                <?php
        require('modelo/Producto.php');

        $producto = new Producto();
        $conexion = abrirConexion();
        $consultaProductos="";
        if (isset($_GET['categoria'])){
            $consultaProductos = "select * from producto where categoria = '".$_GET['categoria']."'";
        }else{
            $consultaProductos = "select * from producto";
        }

        $listaProductos = $conexion -> query($consultaProductos);
        while($row = $listaProductos->fetch_assoc()){
			$producto->setImagen($row["imagen"]);
            $producto->setId_producto($row["id_producto"]);    
            $producto->setNombre_producto($row["nombre_producto"]);
            $producto->setDescripcion($row["descripcion"]);            
        ?>
                <div class="contenedor-producto col-lg-4 col-md-6 col-sm-12">
                    <img src="img/imagenesProductos/<?php echo $producto->getImagen();?>" class="imagen-producto">
                    <h3><?php echo $producto->getNombre_producto();?></h3>
                    <p class="descripcion-corta"><?php echo $producto->getDescripcion();?></p>
                    <a href="EditarProducto.php?id=<?php echo $producto->getId_producto();?>">
                        <button class="boton-admin btn btn-primary" id="btn-editar">Editar</button></a>
                    <button class="boton-admin btn btn-danger" id="btn-eliminar" type="button" data-toggle="modal"
                        data-target="#mensaje-eliminar<?php echo $producto->getId_producto();?>">Eliminar</button></a>
                </div>
                <div class="modal fade" id="mensaje-eliminar<?php echo $producto->getId_producto();?>" tabindex="-1"
                    role="dialog" aria-labelledby="mensaje-eliminar" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mensaje-eliminar">Confirmar eliminación</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ¿Desea eliminar este elemento?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-danger"> <a class="btn-eliminar"
                                        href="EliminarProducto.php?id=<?php echo $producto->getId_producto();?>">
                                        Eliminar </a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
		}
    ?>
    		<div class="agregar">
			<a href="agregarProducto.php">
				<span class="icon-plus"></span>
			</a>
		</div>
            </div>
        </div>
        <?php require_once("componentes/aside.html");?>

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