<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Publicaciones - Taskmaster</title>
    <link rel="stylesheet" href="../CSS/Mis_Publicaciones_P.css">
    <link rel="icon" href="../Imagenes/LinkUp.png" type="image/png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/Mis_Publicaciones_P.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="content-wrapper"></div>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../Imagenes/LinkUp.png" alt="Taskmaster Logo" style="height: 40px;">
            <img src="../Imagenes/LinkUp 2.png" alt="Taskmaster Logo" style="height: 40px;">
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

    <section class="search-section">
    <div class="search-container">
        <form method="GET" style="display: inline-block;">
            <input 
                type="text" 
                name="busqueda" 
                placeholder="Buscar Publicaciones..." 
                class="search-input" 
                value="">
            <button type="submit" class="search-button">Buscar</button>
        </form>
    </div>
</section>


<section class="main-content">
    <div class="course-grid">
                <div class="course-card">
                    <p>No se encontraron Publicaciones.</p>
                </div>
    </div>
</section>


    <footer>
        <p>&copy; 2025 Taskmaster. Todos los derechos reservados.</p>
    </footer>
</body>
</html>