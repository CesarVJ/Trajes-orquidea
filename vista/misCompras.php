<?php require_once("../ObtenerDatosUsuario.php"); ?>
<?php require_once("../modelo/Compras.php"); ?>
<?php require_once("../modelo/Producto.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/catalogo.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/perfil.css?v=<?php echo time(); ?>">
    <script src="https://code.jquery.com/jquery-3.5.0.js"
        integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <title>Trajes Orquidea</title>
</head>

<body>
    <?php     
    $date = date('Y/m/d', time());
    $date = str_replace('/', '-', $date);
    $compra  = new Compras();
    $compras = $compra->obtenerComprasUsuario($id_usuario);
?>
    <div class="contenido-body">
        <?php require_once("../componentes/menu.php") ?>
        <h1 class="titulo-Catalogo">Mis compras</h1>
        <div class="container">
            <div class="row">
                <?php             
            foreach ($compras as $listaCompras){ 
                $producto = new Producto($listaCompras->getId_producto());
            ?>
                <div class="card col-lg-3 col-md-6 col-sm-12">
                    <img src="../img/imagenesProductos/<?php echo $producto->getImagen(); ?>" class="card-img-top"
                        alt="..." style="height: 15rem;width:15rem; margin: 5px auto;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $producto->getNombre_producto(); ?></h5>
                        <p><b>Pagado: </b> <?php echo $listaCompras->getTotal(); ?>$</p>
                        <p><b>Comprado: </b><?php echo $listaCompras->getFecha_compra(); ?></p>
                        <p><b>Llega: </b><?php echo $listaCompras->getFecha_llegada(); ?></p>
                        <?php
                            if(strtotime($date) < strtotime($listaCompras->getFecha_llegada())){ ?>
                                <a href="../cancelarPedido.php?id=<?php echo $listaCompras->getId_producto() ?>" class="btn btn-danger">Cancelar pedido</a>                            
                        <?php }else{ ?>
                            <a href="#" class="btn btn-secondary deshabilitado">Pedido enviado</a>                            
                        <?php    }
                        ?>                        
                    </div>
                </div>

                <?php } ?>
                <script>
                $('.btn.deshabilitado').css("pointerEvents","none");
                $('.btn.deshabilitado').css("cursor","default");
                </script>
            </div>
        </div>
    </div>
    <?php include_once("../componentes/footer.html") ?>
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
 <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(109433)</script> 
</body>

</html>