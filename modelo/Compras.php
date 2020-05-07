<?php
    
    class Compras{

        private $id_compra=0;
        private $cantidad;
        private $total;
        private $fecha_compra;
        private $fecha_llegada;
        private $estado_compra;
        private $id_usuario;
        private $id_producto;
    


    	public function getId_compra(){
            return $this->id_compra;
        }
    
        public function setId_compra($id_compra){
            $this->id_compra = $id_compra;
        }
    
        public function getCantidad(){
            return $this->cantidad;
        }
    
        public function setCantidad($cantidad){
            $this->cantidad = $cantidad;
        }
    
        public function getTotal(){
            return $this->total;
        }
    
        public function setTotal($total){
            $this->total = $total;
        }
    
        public function getFecha_compra(){
            return $this->fecha_compra;
        }
    
        public function setFecha_compra($fecha_compra){
            $this->fecha_compra = $fecha_compra;
        }
    
        public function getFecha_llegada(){
            return $this->fecha_llegada;
        }
    
        public function setFecha_llegada($fecha_llegada){
            $this->fecha_llegada = $fecha_llegada;
        }
    
        public function getEstado_compra(){
            return $this->estado_compra;
        }
    
        public function setEstado_compra($estado_compra){
            $this->estado_compra = $estado_compra;
        }
    
        public function getId_usuario(){
            return $this->id_usuario;
        }
    
        public function setId_usuario($id_usuario){
            $this->id_usuario = $id_usuario;
        }
    
        public function getId_producto(){
            return $this->id_producto;
        }
    
        public function setId_producto($id_producto){
            $this->id_producto = $id_producto;
        }

        function obtenerComprasUsuario($usuario){
            $conexion= abrirConexion();
            $listaCompras = array();
            $this->setId_usuario($usuario);
            $consultaCompras = "select * from compras where id_usuario = '".$this->getId_usuario()."'";
            $datos = $conexion -> query($consultaCompras);

            if($datos->num_rows > 0){
                $contador=0;
                while($row = $datos->fetch_assoc()){
                    $listaCompras[$contador] = new Compras();
                    $listaCompras[$contador]->setCantidad($row["cantidad"]);
                    $listaCompras[$contador]->setTotal($row["total"]);
                    $listaCompras[$contador]->setFecha_compra($row["fecha_compra"]);
                    $listaCompras[$contador]->setFecha_llegada($row["fecha_llegada"]);
                    $listaCompras[$contador]->setEstado_compra($row["estado_compra"]);
                    $listaCompras[$contador]->setId_usuario($row["id_usuario"]);
                    $listaCompras[$contador]->setId_producto($row["id_producto"]);
                    $contador +=1;
                }
            }
            return $listaCompras;
           # echo 'Total de compras', count($listaCompras);            

        }
    }

?>