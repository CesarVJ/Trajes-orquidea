<?php

    #private $conexion = null;
    function abrirConexion(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpassword = "";
        $database = "TrajesOrquidea";
        $conexion = new mysqli($dbhost, $dbuser, $dbpassword, $database) or die("Fallo la conexión:%s\n".$conexion ->error);
        return $conexion;
    }
    
    function cerrarConexion($conexion){
        $conexion -> close();
    }

    function ejecutarConsulta($consulta, $Conexion){
        $resultados = $result = $tupla = null;
		$valor = "";
		$i = $j =0;
        if ($consulta == ""){
		       throw new Exception("No se especifico ninguna consulta");
			}
			if ($Conexion == null){
                echo "null error";
				throw new Exception("Error de conexión");
			}
			try{
                $result = $Conexion->query($consulta); 
                echo "No error";
			}catch(Exception $error){
				throw $error;
            }
            echo "No error 2";
			if ($result){
                
				foreach($result as $tupla){ 
					foreach($tupla as $clave=>$columna){
						if (is_string($clave)){
							$resultados[$i][$j] = $columna;
							$j++;
						}
					}
					$j=0;
					$i++;
				}
			}
			return $resultados;
    }
		/*
		echo "Se ha realizado la conexión con exito!";
		$admin = "select * from administrador";
		$resultado = $conexion -> query($admin);
		if($resultado->num_rows > 0){
			while($row = $resultado->fetch_assoc()){
				echo "id: " . $row["id_administrador"]. "Nombre: " . $row["nombre"]. "Correo: ". $row["correo"]."<br>";
			}
		}else{
			echo "0 results";
		}
		cerrarConexion($conexion);
		*/




?>