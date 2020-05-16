<?php
    if(!empty(trim($_GET['id'])) & !empty(trim($_GET['cantidad'])) && !empty(trim($_GET['total']))){
        session_start();
        require 'modelo/AccesoDatos.php';
        $producto = trim($_GET['id']);
        $cantidad = trim($_GET['cantidad']);
        $total = trim($_GET['total']);

        $fechaCompra = date('Y/m/d', time());
        $fechaCompra = str_replace('/', '-', $fechaCompra);

        $fechaLlegada = date('Y/m/d', time());
        $fechaLlegada = str_replace('/', '-', $fechaLlegada);
        $fechaLlegada = date('Y-m-d', strtotime($fechaLlegada. ' + 3 days'));

        $conexion=abrirConexion();
                $compras = "SELECT * from compras";
                $resultado = mysqli_query($conexion, $compras);
                if($resultado){
                    $num_compras = mysqli_num_rows($resultado);
                    mysqli_free_result($resultado);
                }
                $sql = "INSERT INTO compras values(".($num_compras+1).",".$cantidad.",".$total.",'".$fechaCompra."','".$fechaLlegada."', 'pendiente', ".$_SESSION['id'].",".$producto.");";                
                if ($conexion->query($sql) === TRUE) {
                  echo "Se realizo la compra";
                  header('location: vista/CatalogoCliente.php?compra=exitosa');
                } else {
                  echo "Error: ";
                  header('location: vista/CatalogoCliente.php?compra=fallida');
                }
    }
?>