<?php include_once("../Conexion_DB/Conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LinkUp</title>
    <link rel="stylesheet" href="../CSS/Login.css">
    <link rel="icon" href="../Imagenes/LinkUp.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="content-wrapper"></div>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="../Imagenes/LinkUp.png" alt="LinkUp" style="height: 40px;">
        <img src= "../Imagenes/LinkUp 2.png" alt="LinkUp" style="height: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="../PHP/Registro.php">Registro</a>
                </li>
        </ul>
    </div>
</nav>
    </header>
    <div class="main-container">
        <form class="Login-form" action="../BackEnd/CDB_Login.php" method="post">
            <h2>Iniciar Sesión</h2>

            <div id="alert-container">
            </div>
            <label for="Email">Correo Electrónico:</label>
            <input type="Email" id="Email" name="Email" required>
            <label for="Password">Contraseña</label>
            <input type="Password" id="Password" name="Password" required>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            <div class="link">
                <a href="../PHP/NC.php">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="link">
                <p>¿Es la primera vez que usas LinkUp? <a href="../PHP/Registro.php">Regístrate</a></p>
            </div>
        </form>
        <div class="image-container">
            <img src="https://cdni.iconscout.com/illustration/premium/thumb/inicio-de-sesion-seguro-5120700-4283468.png" alt="Imagen de LinkUp">
        </div>
    </div>
    <footer>
        <p>&copy; 2025 LinkUp. Todos los derechos reservados.</p>
    </footer>
</body>
</html>