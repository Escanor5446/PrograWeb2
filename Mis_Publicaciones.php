<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Cursos - Taskmaster</title>
    <link rel="stylesheet" href="mis-cursos.css">
    <link rel="icon" href="https://i.ibb.co/MM1tkPn/Logo2.png" type="image/png">

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
        <img src="https://i.ibb.co/MM1tkPn/Logo2.png" alt="Taskmaster Logo" style="height: 40px;">
        <img src="https://i.ibb.co/cLgDyzY/TASKMASTER2.png" alt="Taskmaster Logo" style="height: 40px;">
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
                    <a class="nav-link" href="busqueda.php">Cursos</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mis-cursos.php">Mis Cursos</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="chat.php??>">Chat</a>
                </li>
                <?php elseif ($_SESSION['user_role'] == 2): // Instructor ?>
                <li class="nav-item">
                        <a class="nav-link" href="Crear_Publicacion.php">Crear curso</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="mis-cursos-p.php">Mis Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="chat.php?>">Chat</a>
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
                    <a class="nav-link" href="busqueda.php">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registro.php">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="login.php">Iniciar sesión</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
</header>

<section class="search-section">
    <div class="search-container">
        <form method="GET" style="display: inline;">
            <button class="btn-kardex" onclick="window.location.href='kardex.php';" type="button">Ver Kardex</button>
            <input 
                type="text" 
                name="busqueda" 
                placeholder="Buscar cursos..." 
                class="search-input" 
                value="<?php echo htmlspecialchars($busqueda); ?>">
            <button type="submit" class="search-button">Buscar</button>
        </form>
    </div>
</section>    

<section class="main-content">
    <div class="course-grid">
        <?php if (mysqli_num_rows($result_cursos) > 0): ?>
            <?php while ($curso = mysqli_fetch_assoc($result_cursos)): ?>
                <div class="course-card">
                    <img src="<?php echo $curso['imagen_curso'] ? 'data:image/jpeg;base64,' . base64_encode($curso['imagen_curso']) : 'https://via.placeholder.com/150'; ?>" alt="Imagen del curso">
                    <h3><?php echo htmlspecialchars($curso['titulo']); ?></h3>
                    <p><?php echo htmlspecialchars($curso['descripcion']); ?></p>
                    <a href="curso.php?id_curso=<?php echo $curso['id_curso']; ?>" class="btn-view">Ver</a>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No se encontraron cursos que coincidan con tu búsqueda.</p>
        <?php endif; ?>
    </div>
</section>



<footer>
    <p>&copy; 2025 Taskmaster. Todos los derechos reservados.</p>
</footer>

</body>

</html>