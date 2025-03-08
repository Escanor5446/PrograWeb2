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
    $Password = password_hash($_POST["Password"], PASSWORD_BCRYPT);
    $Fecha_Nacimiento = $_POST["Dob"];
    $Descripcion = $_POST['Description']; 

    // Procesar foto de perfil
    $Avatar = null;
    if (isset($_FILES["Avatar"]) && $_FILES["Avatar"]["tmp_name"] != "") {
        $Avatar = addslashes(file_get_contents($_FILES["Avatar"]["tmp_name"]));
    }

    // Insertar en la base de datos
    $sql = "INSERT INTO Usuarios (Nombre, Email, Contraseña, Fecha_Nac, Avatar, Descripcion)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $Conn->prepare($sql);
    $stmt->bind_param("ssssss", $Nombre, $Email, $Password, $Fecha_Nacimiento, $Avatar, $Descripcion);

    if ($stmt->execute()) {
        // Redirigir con mensaje de éxito
        header("Location: ../PHP/Login.php?mensaje=" . urlencode("Registro exitoso. Inicia sesión."));
    } else {
        // Redirigir con mensaje de error
        header("Location: ../PHP/Registro.php?mensaje=" . urlencode("Error al registrar: " . $stmt->error));
    }
} else {
    header("Location: ../PHP/Registro.php?mensaje=" . urlencode("Método no permitido."));
}

// Cerrar la declaración y la conexión
$stmt->Close();
$conexion->cerrar();

?>