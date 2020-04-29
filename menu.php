<?php
    session_start();
	$catalogo="";
	if($_SESSION['tipo']=='Administrador'){
		$catalogo="CatalogoAdmin.php";
	}else{
		$catalogo="CatalogoCliente.php";
	}
?>
<nav id="navegacion">
	<ul id="menu-catalogo">
		<li><a href="index.php">Inicio</a></li>
		<li name="trajes" id="trajes"><a href="<?php echo $catalogo.'?categoria=trajes'?>">Trajes</a></li>
		<li name="vestidos" id="vestidos"><a href="<?php echo $catalogo.'?categoria=vestidos'?>">Vestidos</a></li>
		<li name="complementos" id="complementos"><a href="<?php echo $catalogo.'?categoria=complementos'?>">Complementos</a></li>
		<li id="cerrar-sesion"><a href="cerrarSesion.php">Cerrar Sesión</a></li>
	</ul>
</nav>