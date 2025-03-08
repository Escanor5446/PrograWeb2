<?php
class Conexion {
    private $Servidor = "localhost";
    private $Usuario = "root";
    private $Password = "";
    private $Base_Datos = "LinkUp";
    public $Conn;
    public function __construct() {
        $this->Conn = new mysqli(
            $this->Servidor,
            $this->Usuario,
            $this->Password,
            $this->Base_Datos
        );

        if ($this->Conn->connect_error) {
            die("Error de conexión: " . $this->Conn->connect_error);
        }
        $this->Conn->set_charset("utf8");
    }
    public function cerrar() {
        $this->Conn->close();
    }
}
?>