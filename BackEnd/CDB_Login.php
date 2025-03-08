<?php
session_start();
include_once("../Conexion_DB/Conexion.php");

// Crear una instancia de la clase Conexion
$Conexion = new Conexion();

// Usar la propiedad $Conn de la clase Conexion para la conexión
$Conn = $Conexion->Conn;


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    // Buscar el Usuario
    $sql = "SELECT ID_Usuario, Nombre, Email, Contraseña FROM Usuarios WHERE Email = ?";
    $stmt = $Conn->prepare($sql);
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $Resultado = $stmt->get_result();

    $Usuario = $Resultado->fetch_assoc();

    // Guardar datos en sesión
    $_SESSION["Usuario"] = [
        "ID_Usuario" => $Usuario["ID_Usuario"],
        "Nombre" => $Usuario["Nombre"],
        "Email" => $Usuario["Email"]
    ];

    // Redirigir con mensaje de bienvenida
    header("Location: ../PHP/Busqueda.php?Mensaje=" . urlencode("Bienvenido, " . $Usuario["Nombre"]));
    
} else {
    header("Location: ../PHP/Login.php?Mensaje=" . urlencode("Método no permitido."));
}

// Cerrar la declaración y la conexión
$stmt->close();
$conexion->cerrar();

?>