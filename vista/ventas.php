<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/catalogo.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/fontello.css">
    <title>Ventas</title>
</head>

<body>
    <?php 
    require '../modelo/AccesoDatos.php';
    $conexion=abrirConexion();

    $usuarios= ejecutarConsulta("select id_compra, Nombre, nombre_producto, cantidad , total, fecha_compra from compras natural join usuarios natural join producto",$conexion);
?>
    <div class="contenido-body">
        <?php require_once("../componentes/menu.php") ?>
        <h1 class="titulo-Catalogo">Trajes Orquidea - Ventas</h1>
        <div class="container">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Total</th>
                        <th scope="col">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($numVenta = 0; $numVenta < sizeof($usuarios); $numVenta++){
                            $usuarios[$numVenta][4] = (string)$usuarios[$numVenta][4]." $";        
                    ?>
                    <tr>
                        <?php for($columna = 0; $columna<sizeof($usuarios[0]);$columna++){ ?>
                        <td><?php echo $usuarios[$numVenta][$columna] ?></td>
                        <?php } ?>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
    <?php include_once("../componentes/footer.html") ?>
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