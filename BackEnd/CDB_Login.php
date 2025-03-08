<?php
session_start();
include_once("../Conexion_DB/conexion.php");

// Crear una instancia de la clase Conexion
$Conexion = new Conexion();

// Usar la propiedad $Conn de la clase Conexion para la conexión
$Conn = $Conexion->Conn;


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    // Buscar el Usuario
    $sql = "SELECT ID_Usuario, Nombre, Email, Password FROM Usuarios WHERE Email = ?";
    $stmt = $Conn->prepare($sql);
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $Resultado = $stmt->get_result();

    if ($Resultado->num_rows === 1) {
        $Usuario = $Resultado->fetch_assoc();

        if (Password_verify($Password, $Usuario["Password"])) {
            // Guardar datos en sesión
            $_SESSION["Usuario"] = [
                "ID_Usuario" => $Usuario["ID_Usuario"],
                "Nombre" => $Usuario["Nombre"],
                "Email" => $Usuario["Email"]
            ];

            // Redirigir con mensaje de bienvenida
            header("Location: ../PHP/Inicio.php?mensaje=" . urlencode("Bienvenido, " . $Usuario["Nombre"]));
        } else {
            // Redirigir con error en contraseña
            header("Location: ../PHP/Login.php?mensaje=" . urlencode("Contraseña incorrecta."));
        }
    } else {
        // Redirigir con error de Usuario no encontrado
        header("Location: ../PHP/Login.php?mensaje=" . urlencode("Usuario no encontrado."));
    }
} else {
    header("Location: ../PHP/Login.php?mensaje=" . urlencode("Método no permitido."));
}

// Cerrar la declaración y la conexión
$stmt->close();
$conexion->cerrar();

?>