<?php
class ConexionBD {
    public static function obtenerConexion() {
        $host = 'localhost';
        $dbname = 'proyecto_SRUDos';
        $username = 'sa';
        $password = '071120';
        $puerto = 1433;

        try {
            $conn = new PDO ("sqlsrv:Server=$host,$puerto;Database=$dbname", $username, $password);
            return $conn;
        } catch (PDOException $exp) {
            echo "No se pudo conectar a: $dbname, error: " . $exp->getMessage();
            return null;
        }
    }
}
?>
