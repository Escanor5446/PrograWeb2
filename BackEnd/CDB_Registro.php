<?php

// Incluir el archivo de conexión
include_once("../Conexion_DB/Conexion.php");

// Crear una instancia de la clase Conexion
$Conexion = new Conexion();

// Usar la propiedad $conn de la clase Conexion para la conexión
$Conn = $Conexion->Conn;


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Nombre = $_POST["Name"];
    $Email = $_POST["Email"];
    $password = password_hash($_POST["Password"], PASSWORD_BCRYPT);
    $Fecha_Nacimiento = $_POST["Dob"];
    $Descripcion = $_POST['Description']; 

    // Procesar foto de perfil
    $Foto_Perfil = null;
    if (isset($_FILES["Avatar"]) && $_FILES["Avatar"]["tmp_name"] != "") {
        $Foto_Perfil = addslashes(file_get_contents($_FILES["Avatar"]["tmp_name"]));
    }

    // Insertar en la base de datos
    $sql = "INSERT INTO usuarios (Name, Email, Password, Fecha_Nac, Foto_Perfil, Descripcion)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $Nombre, $Email, $Password, $Fecha_Nacimiento, $Foto_Perfil, $Descripcion);

    if ($stmt->execute()) {
        // Redirigir con mensaje de éxito
        header("Location: ../PHP/login.php?mensaje=" . urlencode("Registro exitoso. Inicia sesión."));
    } else {
        // Redirigir con mensaje de error
        header("Location: ../PHP/registro.php?mensaje=" . urlencode("Error al registrar: " . $stmt->error));
    }
} else {
    header("Location: ../PHP/registro.php?mensaje=" . urlencode("Método no permitido."));
}

// Cerrar la declaración y la conexión
$stmt->close();
$conexion->cerrar();

?>