<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Curso</title>
    <link rel="stylesheet" href="Crear_Publicacion.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="https://i.ibb.co/MM1tkPn/Logo2.png" type="image/png">

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
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

    <div class="formulario-curso-container">
    <div class="formulario-curso">
        <h1 class="text-center">Crear Nuevo Curso</h1>
        <form action="BackEnd/guardar-curso.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

            <!-- Título del Curso -->
            <div class="form-group">
                <label for="titulo">Título del Curso</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Introduce el título del curso" required>
            </div>

            <!-- Descripción del Curso -->
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="5" placeholder="Escribe la descripción del curso" required></textarea>
            </div>

            <!-- Imagen de Curso -->
            <div class="form-group">
                <label for="imagen">Subir Imagen de curso</label>
                <input type="file" name="imagen" required accept="image/*">
            </div>

            <!-- Video del Curso -->
            <div class="form-group">
                <label for="video">Subir Video</label>
                <input type="file" name="video_curso" required accept="video/*">
            </div>

            <!-- Costo del Curso -->
            <div class="form-group">
                <label for="costo">Costo del Curso</label>
                <input type="number" class="form-control" id="costo" name="costo" placeholder="Introduce el costo del curso" required>
            </div>

            <!-- Categoría del Curso -->
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <select class="form-control" id="categoria" name="categoria" required>
                    <option value="" disabled selected>Selecciona una categoría</option>
                    <?php 
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id_categoria = htmlspecialchars($row['id_categoria']);
                        $nombre_categoria = htmlspecialchars($row['nombre']);
                        echo "<option value='$id_categoria'>$nombre_categoria</option>";
                    }
                    mysqli_close($conexion);
                    ?>
                </select>
            </div>

            <div class="form-group">
    <label for="niveles">Niveles del Curso</label>
    <div id="niveles-container">
        <!-- Primer nivel (estático) -->
        <div class="nivel" id="nivel-1">
            <label for="nivel_1_titulo">Título del Nivel 1</label>
            <input type="text" class="form-control" id="nivel_1_titulo" name="niveles[0][titulo]" placeholder="Introduce el título del nivel" required>

            <input type="hidden" name="niveles[0][numero_nivel]" value="1"> <!-- Número del nivel -->

            <label for="nivel_1_video">Video del Nivel 1</label>
            <input type="file" class="form-control-file" id="nivel_1_video" name="niveles[0][video]" accept="video/*" required>

            <label for="nivel_1_imagen">Imagen del Nivel 1</label>
            <input type="file" class="form-control-file" id="nivel_1_imagen" name="niveles[0][imagen]" accept="image/*" required>
        </div>
    </div>
    <button type="button" class="btn btn-primary" id="agregar-nivel">Agregar Nivel</button>
</div>

<button type="submit" class="btn btn-success">Guardar Curso</button>

<script>
    let nivelCount = 1;

    // Agregar un nuevo nivel dinámicamente
    document.getElementById('agregar-nivel').addEventListener('click', function () {
        nivelCount++;
        const nuevoNivel = document.createElement('div');
        nuevoNivel.classList.add('nivel');
        nuevoNivel.id = `nivel-${nivelCount}`;

        nuevoNivel.innerHTML = `
            <label for="nivel_${nivelCount}_titulo">Título del Nivel ${nivelCount}</label>
            <input type="text" class="form-control" id="nivel_${nivelCount}_titulo" name="niveles[${nivelCount - 1}][titulo]" placeholder="Introduce el título del nivel" required>

            <input type="hidden" name="niveles[${nivelCount - 1}][numero_nivel]" value="${nivelCount}"> <!-- Número del nivel -->

            <label for="nivel_${nivelCount}_video">Video del Nivel ${nivelCount}</label>
            <input type="file" class="form-control-file" id="nivel_${nivelCount}_video" name="niveles[${nivelCount - 1}][video]" accept="video/*" required>

            <label for="nivel_${nivelCount}_imagen">Imagen del Nivel ${nivelCount}</label>
            <input type="file" class="form-control-file" id="nivel_${nivelCount}_imagen" name="niveles[${nivelCount - 1}][imagen]" accept="image/*" required>

            <button type="button" class="btn btn-danger btn-sm eliminar-nivel">Eliminar Nivel</button>
        `;

        document.getElementById('niveles-container').appendChild(nuevoNivel);

        // Eliminar un nivel dinámico
        nuevoNivel.querySelector('.eliminar-nivel').addEventListener('click', function () {
            nuevoNivel.remove();
            nivelCount--;
        });
    });
</script>


    <footer>
        <p>© 2025 Taskmaster. Todos los derechos reservados.</p>
    </footer>

</body>

</html>