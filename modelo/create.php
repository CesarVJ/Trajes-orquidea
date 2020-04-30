<?php
    include 'Producto.php';
    $existeProducto = false;
    $num_productos=0;
    $producto = new Producto();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $conexion = abrirConexion();
        $nombre_producto = $categoria =$descripcion = $imagen = "";
        $id_producto = $precio = $talla = 0; 
        echo "Se abrio la conexion";
        if(!empty(trim($_POST["nombre-producto"])) && !empty(trim($_POST["descripcion"]))
                && !empty(trim($_POST["categoria"])) && !empty(trim($_POST["precio"]))){                        
            $productoNuevo = "select * from producto where nombre_producto = '".trim($_POST["nombre-producto"])."' ";
            $resultado = $conexion -> query($productoNuevo);
            if($resultado->num_rows > 0){
                $existeProducto=true;
                header("location: ../agregarProducto.php");
            }else{
                //Se obtiene el numero de prodcutos existentes
                $productos = "select id_producto from producto";
                $resultado = mysqli_query($conexion, $productos);
                if($resultado){
                    $num_productos = mysqli_num_rows($resultado);
                    mysqli_free_result($resultado);
                }
                echo "Se crea el insert en sql";
                $consulta = "insert into producto(id_producto, nombre_producto, categoria, precio, descripcion, talla, imagen) values(?, ?, ?, ?, ?, ?, ?)";
                if($statement = mysqli_prepare($conexion, $consulta)){   
                    echo "SFunciono";   
                    //Se asignan los datos del formulario a un objeto de tipo Producto          
                    $producto->setId_producto($num_productos + 1);
                    $producto->setNombre_producto(trim($_POST["nombre-producto"]));
                    $producto->setCategoria(trim($_POST["categoria"]));
                    $producto->setPrecio(trim($_POST["precio"]));
                    $producto->setDescripcion(trim($_POST["descripcion"]));
                    $producto->setTalla(trim($_POST["talla"]));
                    $producto->setImagen(basename($_FILES['imagen']['name']));
                    
                    echo $producto->getImagen();

                    #Se inserta el nuevo producto
                    mysqli_stmt_bind_param($statement, "issdsis",$producto->getId_producto(), $producto->getNombre_producto(), $producto->getCategoria(), $producto->getPrecio(), $producto->getDescripcion(), $producto->getTalla(), $producto->getImagen());        
                    if(mysqli_stmt_execute($statement)){
                        header("location: ../CatalogoAdmin.php");

                    #Proceso de almacenado de imagen
                    $imagenes = '../img/imagenesProductos/';
                    $imagenSubida = $imagenes . basename($_FILES['imagen']['name']);                                        
                    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $imagenSubida)) {
                        echo "Imagen Guardada";
                    } else {
                       echo "Error al descargar imagen";
                    }

                    } else{
                        echo "Algo ha salido mal";
                    }
                    mysqli_stmt_close($statement);
                }else{
                    echo "No funciono :c";

                }
            }
            mysqli_close($conexion);                        
        }
    }
?>