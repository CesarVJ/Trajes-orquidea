<?php
include 'AccesoDatos.php';
class Usuario{
    private $id_usuario = 0;
    private $nombre = "";
    private $fecha_nacimiento = "";
    private $correo = "";
    private $direccion = "";
	private $telefono = "";
	private $contraseña = "";
	private $tipo_usuario="";

	public function getId_usuario(){
		return $this->id_usuario;
	}

	public function setId_usuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getFecha_nacimiento(){
		return $this->fecha_nacimiento;
	}

	public function setFecha_nacimiento($fecha_nacimiento){
		$this->fecha_nacimiento = $fecha_nacimiento;
	}

	public function getCorreo(){
		return $this->correo;
	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}

	public function getContraseña(){
		return $this->contraseña;
	}

	public function setContraseña($contraseña){
		$this->contraseña = $contraseña;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function getTelefono(){
		return $this->telefono;
	}

	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}

	public function getTipo_usuario(){
		return $this->tipo_usuario;
	}

	public function setTipo_usuario($tipo_usuario){
		$this->tipo_usuario = $tipo_usuario;
	}


	public function buscarCorreo(){
		$encontrado = false;
		$consulta = "";
		$resultados = null;
			if (($this->correo == "" || $this->contraseña == "") )
				throw new Exception("Datos faltantes");
			else{
				$consulta = "SELECT id_usuario, Nombre, fecha_nacimiento, correo, direccion, telefono, contraseña, tipo_usuario FROM usuarios WHERE correo = '".$this->correo."'";
				
				$acceso = abrirConexion();
				if ($acceso){
					echo "Se abrio la conexion";
					$resultados = ejecutarConsulta($consulta,$acceso);
					cerrarConexion($acceso);
					if ($resultados != null){
						echo "Bien 1";

						$this->setId_usuario($resultados[0][0]);
						$this->setNombre($resultados[0][1]);
						$this->setFecha_nacimiento($resultados[0][2]);
						$this->setCorreo($resultados[0][3]);
						$this->setDireccion($resultados[0][4]);
						$this->setTelefono($resultados[0][5]);
						$this->setContraseña($resultados[0][6]);
						$this->setTipo_usuario($resultados[0][7]);						
						echo "Bien 2";

						$encontrado = true;
					}
				}
			}
			return $encontrado;
		}
}


?>