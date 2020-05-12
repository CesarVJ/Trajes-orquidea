<?php 
namespace test2;
use PHPUnit\Framework\TestCase;

final class ComprasTest extends TestCase{
    public function testObtenerComprasUsuario(){
        require 'modelo/Compras.php';
        $compras = new Compras();
        $listaCompras =$compras->obtenerComprasUsuario(3);
        $this->assertContains($compras,$listaCompras);        
    }
}

?>