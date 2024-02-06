
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta htt-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODAS STEFY</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="nav navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="index.php">MODAS STEFY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/sitioweb/productos.php">Tienda</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="http://localhost/sitioweb/administrador/index.php">Ingreso</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/sitioweb/nosotros.php">Acerca de nosotros</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <br>
        <div class="row">
<?php
session_start();
if($_POST){
    if (($_POST['usuario']=="admin")&&($_POST['contrasenia']=="admin1234")) {
       $_SESSION['usuario']="ok";
       $_SESSION['nombreUsuario']="JuanJose";
       header('Location:inicio.php');
    }else {
        $mensaje="Error: El usuario y contraseña son incorrectas";
    }
    
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>




     <div class="container">
        <div class="row">
        
        <div class="col-md-3">

        </div>
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">

                        <?php if(isset($mensaje))  { ?>
                        <div class="alert alert-primary" role="alert">
                        <?php echo $mensaje; ?>
                        </div>
                        <?php }?>
                            <form method="POST">
                            <div class = "form-group">
                            <label >Usuario:</label>
                            <input type="text" class="form-control" name ="usuario"  placeholder="Escribe tu usuario">

                            </div>
                            <div class="form-group">
                            <label>Contraseña:</label>
                            <input type="password" class="form-control" name="contrasenia" placeholder="Escribe tu contraseña">
                            </div>
                        
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                            </form>
                            
                            
                    </div>
                </div>
                
            </div>
            
        </div>
     </div>
<div class="container">
        <hr class="my-4">
        <p>&copy; <?php echo date("Y"); ?> Modas Stefy - Todos los derechos reservados</p>
        <p>Dirección: Avenida, Humberto Albornoz Oe11-136, Quito 170129</p>
        <p>Email: modasstefy@gamil.com | Teléfono: (02)3202308</p>
    </div>
</body>
</html>