<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Publicación</title>
    <link rel="stylesheet" href="../CSS/Crear_Publicacion.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="../Imagenes/LinkUp.png" type="image/png">

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="../Imagenes/LinkUp.png" alt="LinkUp Logo" style="height: 40px;">
        <img src="../Imagenes/LinkUp 2.png" alt="LinkUp Logo" style="height: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="../PHP/Busqueda.php">Regresar</a>
                </li>
        </ul>
    </div>
    </nav>
    </header>

    <div class="contenedor-formulario">
        <div class="formulario-publicacion">
            <h1 class="text-center">Crear nueva publicación</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="ID_User" value="">

                <!-- Título del Publicación -->
                <div class="form-group">
                    <label for="titulo">Título de la publicación</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Introduce el título de la publicación" required>
                </div>

                <!-- Descripción del Publicación -->
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="5" placeholder="Escribe la descripción de la publicación" required></textarea>
                </div>

                <!-- Imagen de Publicación -->
                <div class="form-group">
                    <label for="imagen">Subir la imagen de la publicación</label>
                    <input type="file" name="imagen" required accept="image/*">
                </div>
                <div class="form-group">
                <label for="categoria">Categoría</label>
                <select class="form-control" id="categoria" name="categoria" required>
                    <option value="" disabled selected>Selecciona una categoría</option>
                </select>
            </div>
            </form>
        </div>
    </div>

    <button type="submit" class="btn btn-success">Publicar</button>

    <footer>
        <p>© 2025 LinkUp. Todos los derechos reservados.</p>
    </footer>

</body>

</html>