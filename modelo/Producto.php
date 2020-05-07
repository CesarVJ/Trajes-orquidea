<?php
#include 'AccesoDatos.php';
class Producto{
    private $id_producto =0;
    private $nombre_producto = "";
    private $categoria= "";
    private $precio =0;
    private $descripcion ="";
    private $talla = 0;
	private $imagen = "";
	
	public function __construct(){
		$params = func_get_args();
		$num_params = func_num_args();
		$funcion_constructor ='__construct'.$num_params;
		if (method_exists($this,$funcion_constructor)) {
			call_user_func_array(array($this,$funcion_constructor),$params);
		}
	}

	public function __construct0(){

	}
	public function __construct1($idProducto){
		$conexion = abrirConexion();
		$this->setId_producto($_GET['id']);
		$consultaProducto = "select * from producto where id_producto = '".$idProducto."'";
		$datosProducto = $conexion -> query($consultaProducto);
        $row = $datosProducto->fetch_assoc();        
        $this->setNombre_producto($row["nombre_producto"]);
        $this->setCategoria($row["categoria"]);
        $this->setPrecio($row["precio"]);
        $this->setDescripcion($row["descripcion"]);
        $this->setTalla($row["talla"]);
        $this->setImagen($row["imagen"]);
	}

    public function getId_producto(){
		return $this->id_producto;
	}

	public function setId_producto($id_producto){
		$this->id_producto = $id_producto;
	}

	public function getNombre_producto(){
		return $this->nombre_producto;
	}

	public function setNombre_producto($nombre_producto){
		$this->nombre_producto = $nombre_producto;
	}

	public function getCategoria(){
		return $this->categoria;
	}

	public function setCategoria($categoria){
		$this->categoria = $categoria;
	}

	public function getPrecio(){
		return $this->precio;
	}

	public function setPrecio($precio){
		$this->precio = $precio;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

	public function getTalla(){
		return $this->talla;
	}

	public function setTalla($talla){
		$this->talla = $talla;
	}

	public function getImagen(){
		return $this->imagen;
	}

	public function setImagen($imagen){
		$this->imagen = $imagen;
	}

}
    
?>