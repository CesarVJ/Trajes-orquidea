<?php 


function testBuscarCorreo($correo){
    require '../modelo/Usuario.php';
    $usuario= new Usuario();
    $usuario->setCorreo($correo);
    $usuario->setContraseña("12345");
    echo $usuario->buscarCorreo();
}
testBuscarCorreo("esmeral23@gmail.com");







?>