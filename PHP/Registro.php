<?php include_once("../Conexion/conexion.php"); ?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - LinkUp</title>
    <link rel="stylesheet" href="../CSS/Registro.css">
    <link rel="icon" href="../Imagenes/LinkUp.png" type="image/png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/Registro.css">

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

    </br></br>

    <div class="main-container">

    
        <section class="register">
            <div class="register-container">
                <form action="../BackEnd/CDB_Registro.php" method="POST" enctype="multipart/form-data">
                    
                    <h1>Registro de Usuario</h1>
                    <div id="alert-container"></div> 
                    <div class="form-group">
                        <label for="Name">Nombre Completo:</label>
                        <input type="Text" id="Name" name="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Correo Electrónico:</label>
                        <input type="Email" id="Email" name="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="Password">Contraseña:</label>
                        <input type="Password" id="Password" name="Password" required>
                        <span id="passwordHelp" style="color: red;"></span>
                    </div>

                    <div class="form-group">
                        <label for="Dob">Fecha de Nacimiento:</label>
                        <input type="Date" id="Dob" name="Dob" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="Avatar">Foto de Perfil:</label>
                        <input type="File" id="Avatar" name="Avatar" accept=".png, .jpg, .jpeg" required>
                    </div>

                    <div class="form-group">
                        <label for="Description">Descripción:</label>
                        <textarea id="Description" name="Description" rows="4" cols="40" ></textarea>
                    </div>

                    <button type="submit" class="btn-primary">Registrar</button>
                </form>

                </br></br>
            </div>
        </section>
        <div class="image-container">
            <img src="https://cdni.iconscout.com/illustration/premium/thumb/empleado-trabaja-en-registro-pagina-11021018-8869761.png?f=webp" alt="Imagen de Taskmaster">
        </div>
    </div>


    <footer>
        <p>&copy; 2025 LinkUp. Todos los derechos reservados.</p>
    </footer>
    <script src="../BackEnd/Registro.js"></script>
</body>
</html>