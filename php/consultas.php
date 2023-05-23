<?php
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cultivo = $_POST['cultivo'];
    $produccion = $_POST['produccion'];
    $suelo = $_POST['suelo'];
    $vegetacion = $_POST['vegetacion'];
    $clima = $_POST['clima'];
    $lluvia = $_POST['lluvia'];

    // Haz lo que necesites con el cultivo recibido
    // por ejemplo, puedes almacenarlo en una base de datos o realizar alguna acción basada en ello
    // Si deseas enviar una respuesta al cliente, puedes hacerlo con echo
    echo '¡Cultivo recibido correctamente!';

    // Vaciar la tabla RecibirPonderaciones antes de insertar nuevos datos
    Consultas::vaciarTablaRecibirPonderaciones();

    Consultas::insertarPonderaciones($cultivo, $produccion, $suelo, $vegetacion, $clima, $lluvia);
}

class Consultas {
    public static function obtenerNombresCultivos() {
        $result = '';
        $nombresCultivos = '';

        try {
            $conn = ConexionBD::obtenerConexion();
            $query = "SELECT Nombre_Cultivo FROM productos";
            $stmt = $conn->query($query);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $nombresCultivos = implode(", ", array_column($result, 'Nombre_Cultivo'));

            return $nombresCultivos;
        } catch (PDOException $error) {
            echo "Error al realizar la consulta: " . $error->getMessage();
            return 'Algo salió mal';
        }
    }

    public static function insertarPonderaciones($cultivo, $produccion, $suelo, $vegetacion, $clima, $lluvia) {
        try {
            $conn = ConexionBD::obtenerConexion();
            $query = "INSERT INTO RecibirPonderaciones VALUES ('$cultivo', '$produccion', '$suelo', '$vegetacion', '$clima', '$lluvia', '40')";
            $stmt = $conn->query($query);
            return true;
        } catch (PDOException $error) {
            echo "Error al realizar la inserción: " . $error->getMessage();
            return false;
        }
    }

    public static function obtenerResultadoPonderacionAgricultor() {
        try {
            $conn = ConexionBD::obtenerConexion();
            $query = "SELECT * FROM ResultadoPonderacionAgricultor";
            $stmt = $conn->query($query);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Aquí puedes hacer algo con el resultado obtenido, como mostrarlo o procesarlo
            return $result;
        } catch (PDOException $error) {
            echo "Error al realizar la consulta: " . $error->getMessage();
            return false;
        }
    }

    public static function vaciarTablaRecibirPonderaciones() {
        try {
            $conn = ConexionBD::obtenerConexion();
            $query = "DELETE FROM RecibirPonderaciones";
            $stmt = $conn->query($query);
            return true;
        } catch (PDOException $error) {
            echo "Error al vaciar la tabla: " . $error->getMessage();
            return false;
        }
    }
}

$nombresCultivos = Consultas::obtenerNombresCultivos();
?>

