<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/catalogo.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Trajes Orquidea</title>
</head>
<body>
    <?php require_once("menu.html") ?>
    <h1 class="titulo-Catalogo">Trajes Orquidea</h1>
    <div class="container">
        <div class="contenedor row">
            <div class="contenedor-producto col-lg-3 col-md-4 col-sm-12">
                <img src="img/prueba1.jpg" class="imagen-producto">
                <h3>Vestido 1</h3>
                <p class="descripcion-corta">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Harum officiis nemo vitae</p>
                <button class="boton" id="btn-comprar">Comprar</button>
            </div>
            <div class="contenedor-producto col-lg-3 col-md-4 col-sm-12">
                <img src="img/prueba2.jpg" class="imagen-producto">
                <h3>Vestido 2</h3>
                <p class="descripcion-corta">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Harum officiis nemo vitae</p>
                <button class="boton" id="btn-comprar">Comprar</button>
            </div>
            <div class="contenedor-producto col-lg-3 col-md-4 col-sm-12">
                <img src="img/prueba3.jpg" class="imagen-producto">
                <h3>Vestido 3</h3>
                <p class="descripcion-corta">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Harum officiis nemo vitae</p>
                <button class="boton" id="btn-comprar">Comprar</button>
            </div>
            <div class="contenedor-producto col-lg-3 col-md-4 col-sm-12">
                <img src="img/prueba4.jpg" class="imagen-producto">
                <h3>Vestido 4</h3>
                <p class="descripcion-corta">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Harum officiis nemo vitae</p>
                <button class="boton" id="btn-comprar">Comprar</button>
            </div>
        </div>
    </div>
    <?php include_once("footer.html") ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>