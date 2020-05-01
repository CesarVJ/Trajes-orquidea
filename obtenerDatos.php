<?php
	require("modelo/Producto.php");

	$conexion= abrirConexion();
	$producto = new producto();

	if (isset($_GET['id'])){
		//Se asignan los datos de los producto a editar
		$producto->setId_producto($_GET['id']);

		$consultaProducto = "select * from producto where id_producto = '".$producto->getId_producto()."'";
		$datosProducto = $conexion -> query($consultaProducto);

		//Se asignan los datos al objeto tipo producto actual
        $row = $datosProducto->fetch_assoc();
        
        $producto->setNombre_producto($row["nombre_producto"]);
        $producto->setCategoria($row["categoria"]);
        $producto->setPrecio($row["precio"]);
        $producto->setDescripcion($row["descripcion"]);
        $producto->setTalla($row["talla"]);
        $producto->setImagen($row["imagen"]);

		$id_producto =$producto->getId_producto();
        $nombre_producto =$producto->getNombre_producto();
        $categoria = $producto->getCategoria();
		$precio =$producto->getPrecio();
		$descripcion = $producto->getDescripcion();
		$talla = $producto->getTalla();
        $imagen = $producto->getImagen();
        
}
?>