<?php
include 'AccesoDatos.php';
class Producto{
    private $id_producto =0;
    private $nombre_producto = "";
    private $categoria= "";
    private $precio =0;
    private $descripcion ="";
    private $talla = 0;
    private $imagen = "";

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