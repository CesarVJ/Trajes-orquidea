<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/catalogo.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/centro.css?v=<?php echo time(); ?>">
    <script src="https://code.jquery.com/jquery-3.5.0.js"
        integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <title>Trajes Orquidea</title>
</head>

<body>
    <?php require_once("../obtenerDatos.php")?>
    <div class="contenido-body">
        <?php require_once("../componentes/menu.php") ?>
        <h1 class="titulo-Catalogo">Trajes Orquidea</h1>
        <form class="contenedor-general" id="form-comprarProducto"
            action="formularioPago.php?id=<?php echo $producto->getId_producto();?>" method="post"
            name="form-comprarProducto">
            <div class="imagen-vestido portada-activa"
                style="background-image: url('<?php echo "../img/imagenesProductos/".$producto->getImagen(); ?>')">
            </div>

            <div class="contenedor-datos">
                <h1 id="nombre-articulo"><?php echo $producto->getNombre_producto(); ?></h1>

                <h3>Descripción</h3>
                <p><?php echo $producto->getDescripcion(); ?></p>
                <p><b>Talla: </b><?php echo $producto->getTalla(); ?></p>

                <label for="cantidad-articulos"><b>Cantidad:</b></label>
                <input type="number" class="cantidad" name="cantidad-articulos" min="1" id="cantidad-articulos"> <br>
                <input type="hidden" id="v" value="0" />
                <label><b>Precio:</b> <span id="precio-total"></span> $</label><br>
                <input type="text" id="precioFinal" name="precioFinal" value="0" style="display:none;">
                <input type="submit" class="btn btn-success btn-lg btn-block" value="Realizar compra" style="margin-top:5rem;">
                <script>
                    $("#cantidad-articulos").bind('keyup mouseup', function () {
                        var precio = <?php echo $producto->getPrecio();?>;
                        var actual = $("#cantidad-articulos").val();
                        var anterior = $("#v").val();
                        if (actual > anterior || actual < anterior) {
                            $("#v").val(actual);
                            var nuevo = $("#v").val();
                            document.getElementById("precio-total").innerHTML = nuevo * precio;
                            document.getElementById("precioFinal").value = nuevo * precio;
                        }
                    });
                </script>
            </div>
        </form>
    </div>
    <?php include_once("../componentes/footer.html") ?>
    <script src="../js/validaciones.js"></script>
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