<?php include("template/cabecera.php"); ?>

<div class="jumbotron">
    <h1 class="display-3">Bienvenido a nuestra tienda de ropa</h1>
    <p class="lead">Descubre las últimas tendencias en moda para hombres, mujeres y niños.</p>
    <hr class="my-2">
    <p>Explora nuestra colección y encuentra la moda que se adapte a tu estilo.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="http://localhost/sitioweb/productos.php" role="button">Explorar Catálogo</a>
    </p>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="card-img-top" src="./img/img_nuevo.jpg" alt="">
            <h2>Nuevas Llegadas</h2>
            <p>Descubre nuestras últimas adiciones a la colección de esta temporada.</p>
            <p><a class="btn btn-secondary" href="http://localhost/sitioweb/productos.php" role="button">Ver más &raquo;</a></p>
        </div>
        <div class="col-md-4">
        <img class="card-img-top" src="./img/img_sales.jpg" alt="">
            <h2>Ofertas Especiales</h2>
            <p>Echa un vistazo a nuestras ofertas especiales y ahorra en tus compras.</p>
            <p><a class="btn btn-secondary" href="http://localhost/sitioweb/productos.php" role="button">Ver más &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <img class="card-img-top" src="./img/img_contacto.png" alt="">
            <h2>Contacto</h2>
            <p>¿Tienes alguna pregunta? Contáctanos y estaremos encantados de ayudarte.</p>
            <p><a class="btn btn-secondary" href="contacto.php" role="button">Contactar &raquo;</a></p>
        </div>
    </div>
</div>

<?php include("template/pie.php"); ?>
