<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - LinkUp</title>
    <link rel="stylesheet" href="Registro.css">
    <link rel="icon" href="LinkUp.png" type="image/png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Registro.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="content-wrapper"></div>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="LinkUp.png" alt="LinkUp Logo" style="height: 40px;">
        <img src="LinkUp 2.png" alt="LinkUp Logo" style="height: 40px;">
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

    </br></br>

    <div class="main-container">

    
        <section class="register">
            <div class="register-container">
                <form action="backend/be_Registro.php" method="POST" enctype="multipart/form-data">
                    
                    <h1>Registro de Usuario</h1>
                    <div id="alert-container"></div> 
                    <div class="form-group">
                        <label for="name">Nombre Completo:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" required>
                        <span id="passwordHelp" style="color: red;"></span>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirmar Contraseña:</label>
                        <input type="password" id="confirm_password" name="confirm_password" required>
                        <span id="confirmPasswordHelp" style="color: red;"></span>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Telefono:</label>
                        <input type="telefono" id="telefono" name="telefono" required>
                    </div>

                    <div class="form-group">
                        <label for="gender">Género:</label>
                        <select id="gender" name="gender" required>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option value="3">Otro</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="dob">Fecha de Nacimiento:</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label for="avatar">Foto de Perfil:</label>
                        <input type="file" id="avatar" name="avatar" accept=".png, .jpg, .jpeg" required>

                    </div>

                    <div class="form-group">
                        <label for="user-type">Tipo de Usuario:</label>
                        <select id="user-type" name="user_type" required>
                            <option value="1">Personal</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Descripción:</label>
                        <textarea id="description" name="description" rows="4" cols="40" ></textarea>
                    </div>


                    
                        
                    <button type="submit" class="btn-primary">Registrar</button>
                </form>

                </br></br>
            </div>
        </section>
        <div class="image-container">
            <img src="https://cdni.iconscout.com/illustration/premium/thumb/empleado-trabaja-en-Registro-pagina-11021018-8869761.png?f=webp" alt="Imagen de LinkUp">
        </div>
    </div>


    <footer>
        <p>&copy; 2025 LinkUp. Todos los derechos reservados.</p>
    </footer>
    <script src="./BackEnd/Registro.js"></script>
</body>
</html>