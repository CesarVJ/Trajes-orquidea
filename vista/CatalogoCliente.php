<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/catalogo.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/estilos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/buscar.css?v=<?php echo time(); ?>">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Trajes Orquidea</title>
</head>

<body>

    <div class="contenido-body">
        <?php require_once("../componentes/menu.php");?>
        <?php
                if(isset($_GET['compra'])){
                    if(trim($_GET['compra']) == 'exitosa'){?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Tu compra se ha realizado con exito</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php }else {?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>!Algo ha salido mal!, tu compra no se pudo realizar.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php

        }
        }
?>
        <h1 class="titulo-Catalogo">Trajes Orquidea</h1>
        <div class="container">
        <form id="form-buscar" action="">
            <input id="barra-busqueda" type="text" name="" id=""  placeholder="Buscar articulo">
            <input id="btn-buscar" class="btn btn-outline-primary" type="submit" value="Buscar">
        </form>
            <div class="contenedor row">
        <script>
            $('#barra-busqueda').on("keyup input", function(){
                console.log("Presionaste");
            });
        </script>
            
                <?php
                        require('../modelo/Producto.php');

                        $producto = new Producto();
                        include '../modelo/AccesoDatos.php';
                        $conexion = abrirConexion();
                        $consultaProductos="";
                        if (isset($_GET['categoria'])){
                            $consultaProductos = "select * from producto where categoria = '".$_GET['categoria']."'";
                            #echo "Categoria ".$_GET['categoria'];
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
                    <img src="../img/imagenesProductos/<?php echo $producto->getImagen();?>" class="imagen-producto">
                    <h3><?php echo $producto->getNombre_producto();?></h3>
                    <p class="descripcion-corta"><?php echo $producto->getDescripcion();?></p>
                    <a href="InformacionProducto.php?id=<?php echo $producto->getId_producto();?>">
                        <button class="btn btn-success boton" id="btn-comprar">Ver detalles</button></a>
                </div>
                <?php
		                }
	                ?>
            </div>
        </div>
        <?php require_once("../componentes/aside.html");?>
    </div>
    <?php require_once("../componentes/footer.html");?>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://account.snatchbot.me/script.js"></script>
    <script>
        window.sntchChat.Init(109433)
    </script>

</body>

</html>