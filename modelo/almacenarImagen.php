<?php
                    #Proceso de almacenado de imagen
                    $imagenes = '../img/imagenesProductos/';
                    $imagenSubida = $imagenes . basename($_FILES['imagen']['name']);                                        
                    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $imagenSubida)) {
                        echo "Imagen Guardada";
                    } else {
                       echo "Error al descargar imagen";
                    }
?>