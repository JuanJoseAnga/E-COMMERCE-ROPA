<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailDestino = filter_var($_POST['destino'], FILTER_SANITIZE_EMAIL);
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $texto = filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING);

    if (!empty($emailDestino) && !empty($nombre) && !empty($texto)) {
        $asunto = "Email de prueba"; 
        $cuerpo = '
            <html> 
                <head> 
                    <title>Prueba de envio de correo</title> 
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f8f9fa;
                            color: #343a40;
                        }
                        .container {
                            max-width: 500px;
                            margin: 50px auto;
                            padding: 20px;
                            background-color: #fff;
                            border-radius: 5px;
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        }
                        h1 {
                            text-align: center;
                        }
                        form {
                            margin-top: 20px;
                        }
                    </style>
                </head>
                <body> 
                    <div class="container">
                        <h1>Envío de correo con PHP</h1>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email de destino</label>
                                <input type="email" class="form-control" id="email" name="destino" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" required>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Escriba su sugerencia aquí" id="mensaje" name="mensaje" style="height: 100px"></textarea>
                                <label for="mensaje">Comentario</label>            
                            </div>
                            <button type="submit" class="btn btn-success mt-3">Enviar</button>
                        </form>
                    </div>
                </body>
            </html>
        ';
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; 
        $headers .= "From: $nombre <$emailDestino>\r\n";
        $headers .= "Return-path: $emailDestino\r\n";

        if (mail($emailDestino, $asunto, $cuerpo, $headers)) {
            echo "Correo enviado con éxito!!!";
        } else {
            echo "ERROR al enviar el correo!!!";
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envío de Correo a usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Envío de correo con PHP</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email de destino</label>
                <input type="email" class="form-control" id="email" name="destino" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Escriba su sugerencia aquí" id="mensaje" name="mensaje" style="height: 100px"></textarea>
                </label>            
            </div>
            <button type="submit" class="btn btn-success mt-3">Enviar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

<?php 
}
?>
