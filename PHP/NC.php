<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
    <link rel="stylesheet" href="NC.css">
    <link rel="icon" href="LinkUp.png" type="image/png">
    <!-- Agregar Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/NC.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>


 <div class="content-wrapper"></div>
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
                         <a class="nav-link btn btn-primary text-white" href="../PHP/Login.php">Regresar</a>
                     </li>
                 </ul>
             </div>
         </nav>
     </header>

    <main>
        <div class="form-container">
            <h1>Cambiar Contraseña</h1>
            <form id="change-password-form" action="#" method="post">
                <label for="password">Nueva Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <label for="confirm-password">Confirmar Contraseña:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
                <button type="button" onclick="window.location.href='../PHP/Login.php'">Cambiar Contraseña</button>

            </form>
            <p id="message"></p>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 LinkUp. Todos los derechos reservados.</p>
    </footer>
</body>
</html>