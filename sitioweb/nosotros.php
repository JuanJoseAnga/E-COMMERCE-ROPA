<?php include("template/cabecera.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="ruta/a/tu/archivo.css">
</head>
<body>

<div class="jumbotron">
    <h1 class="display-3">NOSOTROS</h1>
    <p class="lead">Hola! Somos una tienda de ropa donde ofrecemos servicios de venta de ropa para niño, caballero, damas y además se arreglan todo tipo de prendas de vestir.</p>
    <hr class="my-2">
</div>

<section>
    <h2>Imágenes</h2>
    <div class="img-container">
        <img src="./img/img1.jpg" alt="Imagen 1">
    </div>
</section>

<section>
    <h2>Ubicación</h2>
    <!-- Aquí está el código del mapa de Google -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d419.3757218073381!2d-78.5148921680982!3d-0.18845686226978822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59a53fd248373%3A0xa54cc2590a992028!2sModas%20Stefany!5e0!3m2!1ses-419!2sec!4v1707184283902!5m2!1ses-419!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section>
    <h2>Horarios</h2>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Día</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Horario</th>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Lunes a Viernes</td>
            <td style="border: 1px solid #ddd; padding: 8px;">9:00 AM - 6:00 PM</td>
        </tr>
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px;">Sábado</td>
            <td style="border: 1px solid #ddd; padding: 8px;">10:00 AM - 4:00 PM</td>
        </tr>
    </table>
</section>



</body>
</html>

<?php include("template/pie.php");?>
