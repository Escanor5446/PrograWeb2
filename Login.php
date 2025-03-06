<?php








?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LinkUp</title>
    <link rel="stylesheet" href="Login.css">
    <link rel="icon" href="LinkUp.png" type="image/png">
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
        <img src="LinkUp.png" alt="LinkUp" style="height: 40px;">
        <img src= "LinkUp 2.png" alt="LinkUp" style="height: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['user_id'])): ?>
                <!-- Opciones visibles cuando el usuario está logueado -->
                
                <li class="nav-item">
                    <a class="nav-link" href="Inicio.php">Inicio</a>
                </li>
                
                <?php 
                // Verificar el rol del usuario
                if ($_SESSION['user_role'] == 1): // Estudiante
                ?>
                    <li class="nav-item">
                    <a class="nav-link" href="Busqueda.php">Publicaciones</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Mis_Publicaciones.php">Mis Publicaciones</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="Chat.php??>">Chat</a>
                </li>
                <?php elseif ($_SESSION['user_role'] == 2): // Instructor ?>
                <li class="nav-item">
                        <a class="nav-link" href="crear-Publicación.php">Crear Publicación</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="Mis_Publicaciones_P.php">Mis Publicaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Chat.php?>">Chat</a>
                </li>
                <?php endif; ?>
                
                
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="Perfil.php">Perfil</a>
                </li>

            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="Inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Busqueda.php">Publicaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Registro.php">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="Login.php">Iniciar sesión</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
    </header>
    <div class="main-container">
        <form class="Login-form" action="Busqueda.php" method="post">
            <h2>Iniciar Sesión</h2>
            <div id="alert-container">
            </div>
            <label for="username">Nombre de Usuario</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            <div class="link">
                <a href="NC.php">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="link">
                <p>¿Es la primera vez que usas LinkUp? <a href="Registro.php">Regístrate</a></p>
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