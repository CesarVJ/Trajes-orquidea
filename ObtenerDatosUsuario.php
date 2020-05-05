<?php
	require("modelo/Usuario.php");

	$conexion= abrirConexion();
	$usuario = new Usuario();

	if (isset($_GET['id'])){
		//Se asignan los datos del usuario 
		$usuario->setId_usuario($_GET['id']);

		$consultaUsuario = "select * from usuarios where id_usuario = '".$usuario->getId_usuario()."'";
		$datosusUario = $conexion -> query($consultaUsuario);

		//Se asignan los datos al objeto tipo usuario actual
        $row = $datosUsuario->fetch_assoc();
        
        $usuario->setNombre($row["nombre"]);
        $usuario->setFecha_nacimiento($row["categoria"]);
        $usuario->setCorreo($row["correo"]);
        $usuario->setDireccion($row["direccion"]);
        $usuario->setTelefono($row["telefono"]);
        $usuario->setContraseña($row["contraseña"]);

		$id_usuario =$usuario->getId_usuario();
        $nombre_usuario =$usuario->getNombre();
        $fecha_nacimiento = $usuario->getFecha_nacimiento();
		$correo =$usuario->getCorreo();
		$direccion = $usuario->getDireccion();
		$telefono = $usuario->getTelefono();
        $contraseña = $usuario->getContraseña();
        
}
?>