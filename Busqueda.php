
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda - LinkUp</title>
    <link rel="stylesheet" href="busqueda.css">
    <link rel="icon" href="LinkUp.png" type="image/png">
    <!-- Agregar Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                    <a class="nav-link" href="Inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Busqueda.php">Publicaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Registro.php">Registro</a>
                </li>

                <?php elseif ($_SESSION['user_role'] == 2): // Instructor ?>
                <li class="nav-item">
                        <a class="nav-link" href="Crear_Publicacion.php">Crear Publicación</a>
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
                    <a class="nav-link" href="Busqueda.php">Publicaciones</a>
                </li>
                
                <li class="nav-item">
                        <a class="nav-link" href="Mis_Publicaciones_P.php">Mis Publicaciones</a>
                </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="Crear_Publicacion.php">Crear Publicación</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="Chat.php??>">Chat</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
        </header>

        <section class="search-section">
            <div class="search-container">
                <form method="GET" action="Busqueda.php">
                    <input type="text" name="search" placeholder="Buscar Publicaciones..." class="search-input" value="">
                    <button type="submit" class="search-button">Buscar</button>
                </form>
            </div>
        </section>

        <section class="main-content">
        <aside class="filter-sidebar">
    <!-- Botón para quitar filtros -->
    <a href="Busqueda.php" class="btn btn-secondary mb-3">Quitar filtros</a>
    
    <h2>CATEGORÍAS</h2>
    
</aside>

        </section>

        <footer>
            <p>&copy; 2025 LinkUp. Todos los derechos reservados.</p>
        </footer>

        <!-- Scripts de Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
</body>
</html>