<?php 
namespace test;
use PHPUnit\Framework\TestCase;

final class AccesoDatosTest extends TestCase{
    public function estAbrirConexion(){
        require 'modelo/AccesoDatos.php';
        $this->assertNotEmpty(abrirConexion());
    }
}


?>