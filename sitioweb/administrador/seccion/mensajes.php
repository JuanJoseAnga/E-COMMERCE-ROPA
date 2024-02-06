<?php include("../template/cabecera.php"); ?>
<?php


// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['telefono']) && isset($_POST['tipo_mensaje'])) {
    // Obtener datos del formulario
    $telefono = $_POST['telefono'];
    $tipo_mensaje = $_POST['tipo_mensaje'];

    // TOKEN QUE NOS DA FACEBOOK
    $token = 'EAA0bnFP0W1UBO9ZCqk3xbSwbwVxxYQyP4lCry0wmn1ZB8aLl9iX8W1JowLtMlvOU1UpsKZCWN0JlzfQI8Fb4ZAAD1ZBpZAFTibWwLU949dujh2676x3o2dxfW0CijMaOAhmhBcxlLbC4azQzBW5wecNQWEqjOwEJjoWPlSfNPClFL3vlZCdQsHMGAIJbH7J2e70eR7f2ixf2RMdseKZAXHgZD';

    // URL A DONDE SE MANDARÁ EL MENSAJE
    $url = 'https://graph.facebook.com/v18.0/252700097916196/messages';

    // CONFIGURACION DEL MENSAJE
    $mensaje = json_encode([
        'messaging_product' => 'whatsapp',
        'to' => $telefono,
        'type' => $tipo_mensaje,
        'template' => [
            'name' => 'hello_world',
            'language' => ['code' => 'en_US']
        ],
    ]);

    // DECLARAMOS LAS CABECERAS
    $header = ["Authorization: Bearer " . $token, "Content-Type: application/json"];

    // INICIAMOS EL CURL
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $mensaje);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // OBTENEMOS LA RESPUESTA DEL ENVÍO DE INFORMACIÓN
    $response = json_decode(curl_exec($curl), true);

    // IMPRIMIMOS LA RESPUESTA
    print_r($response);

    // OBTENEMOS EL CÓDIGO DE LA RESPUESTA
    $status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    // CERRAMOS EL CURL
    curl_close($curl);
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Enviar Mensaje</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
</head>
<body>

<div class="container">
    <br/>

    <div class="row">
        <!-- Formulario para que los usuarios ingresen el número de teléfono y el tipo de mensaje -->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="telefono">Número de Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="tipo_mensaje">Tipo de Mensaje:</label>
                <input type="text" class="form-control" id="tipo_mensaje" name="tipo_mensaje" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
        </form>
    </div>
</div>

</body>
</html>
