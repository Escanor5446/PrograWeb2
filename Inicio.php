<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - LinkUp</title>
    <link rel="icon" href="LinkUp.png" type="image/png">
    <!-- Agregar Bootstrap -->
    <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="Stylesheet" href="Inicio.css">
</head>
<body>
    <div class="content-wrapper">
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


        
        <!-- Sección Desc -->
        <section class="Desc">
            <div class="Desc-content">
                <div class="text-content">
                    <h1>Expresa lo que sientes y lo que quieres</h1>
                    <p>Accede a publicaciones tanto de otros usuarios asi como las tuyas.</p>
                    <a href="Busqueda.php" class="btn-primary">Explorar Publicaciones</a>
                    
                </div>
                <div class="image-content">
                    <img src="https://i.ibb.co/FqkGY4S/Dise-o-sin-t-tulo.png" alt="Imagen Desc">
                </div>
            </div>
        </section>

        <!-- Sección ¿Qué es LinkUp? -->
        <section class="InfoTM">
        <div class="InfoTM-content">
            <h2>¿Qué es LinkUp?</h2>
            <p>LinkUp es la plataforma de publicaciones digitales que ofrece una comunicacion atraves de Chat en tiempo real. Accede a las publicaciones en cualquier momento.</p>
        </div>
    </section>

    <section class="image-section">
        <div class="full-width-image">
            <img src="https://blogs.iadb.org/conocimiento-abierto/wp-content/uploads/sites/10/2023/07/Herramientas-para-eficientar-los-cursos-en-linea-por-medio-de-la-Inteligencia-Artificial.png" alt="Herramientas para Publicaciones en Línea">
        </div>
        <!-- Sección Expectativas -->
        <section id="Expectativas">
        <div class="container">
            <h2>¿Qué esperar de LinkUp?</h2>
            <div class="Expectativas-columnas">
                <div class="Expectativa-item">
                    <h3>Flexibilidad Total</h3>
                    <p>Accede a tus publicaciones en cualquier momento y desde cualquier lugar.</p>
                </div>
                <div class="Expectativa-item">
                    <h3>Comunidad Activa</h3>
                    <p>Conecta con otras personas y comparte tus ideas. Comparte tus opiniones sobre las publicaciones.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="image-section-Expectativa">
        <div class="full-width-image-Expectativa">
            <img src="https://tecnosoluciones.com/wp-content/uploads/2023/08/participacion-comunitaria.png" alt="Herramientas para Publicaciones en Línea">
        </div>
    </section>
    

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>


</html>