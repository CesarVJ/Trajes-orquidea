<?php

require_once("modelo/AccesoDatos.php");
$conexion = abrirConexion();
 
if(isset($_REQUEST["term"])){
    $sql = "SELECT * FROM PRODUCTO WHERE nombre_producto LIKE ?";
    
    if($stmt = mysqli_prepare($conexion, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        $param_term = $_REQUEST["term"] . '%';
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){                
                    ?>
                    <div class="contenedor-producto col-lg-4 col-md-6 col-sm-12">
                        <img src="../img/imagenesProductos/<?php echo $row["imagen"];?>"
                            class="imagen-producto">
                        <h3><?php echo $row["nombre_producto"];?></h3>
                        <p class="descripcion-corta"><?php echo $row["descripcion"];?></p>
                        <a href="InformacionProducto.php?id=<?php echo $row["id_producto"];?>">
                            <button class="btn btn-success boton" id="btn-comprar">Ver detalles</button></a>
                    </div>


                <?php }
            } else{
                echo "<h2>No se ha encontrado ningun producto</h2>";
            }
        } else{
        }
    }
    mysqli_stmt_close($stmt);
}
 
mysqli_close($conexion);
?>