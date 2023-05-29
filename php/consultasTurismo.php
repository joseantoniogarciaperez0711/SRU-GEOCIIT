<?php
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $poblacion = $_POST['poblacion'];
    $inversion = $_POST['inversion'];
    $seguridad = $_POST['seguridad'];
    $pib = $_POST['pib'];
    $infraestructura = $_POST['infraestructura'];
    $obrasPublicas = $_POST['obrasPublicas'];
    $rezagoSocial = $_POST['rezagoSocial'];
    $visitantes = $_POST['visitantes'];
    $alojamiento = $_POST['alojamiento'];
    $ofertaTuristica = $_POST['ofertaTuristica'];


    // Haz lo que necesites con el cultivo recibido
    // por ejemplo, puedes almacenarlo en una base de datos o realizar alguna acción basada en ello
    // Si deseas enviar una respuesta al cliente, puedes hacerlo con echo
    echo '¡Cultivo recibido correctamente!';

    // Vaciar la tabla RecibirPonderaciones antes de insertar nuevos datos
    Consultas::vaciarTablaRecibirPonderaciones();

    Consultas::insertarPonderaciones($poblacion, $inversion, $seguridad, $pib, $infraestructura, $obrasPublicas, $rezagoSocial, $visitantes, $alojamiento, $ofertaTuristica);
}

class Consultas {

    public static function insertarPonderaciones($poblacion, $inversion, $seguridad, $pib, $infraestructura, $obrasPublicas, $rezagoSocial, $visitantes, $alojamiento, $ofertaTuristica) {
        try {
            $conn = ConexionBD::obtenerConexion();
            $query = "INSERT INTO RecibirPonderacionesTurista(Pond_Poblacion, Pond_Inversion, Pond_Seguridad, Pond_PIB, Pond_Infraestructura, Pond_Obras, Pond_Rezago, Pond_Visitantes, Pond_Alojamiento, Pond_Turismo) VALUES ('$poblacion', '$inversion', '$seguridad', '$pib', '$infraestructura', '$obrasPublicas', '$rezagoSocial', '$visitantes', '$alojamiento', '$ofertaTuristica')";
            $stmt = $conn->query($query);
            return true;
        } catch (PDOException $error) {
            echo "Error al realizar la inserción: " . $error->getMessage();
            return false;
        }
    }

    public static function obtenerResultadoPonderacionTurismo() {
        try {
            $conn = ConexionBD::obtenerConexion();
            $query = "SELECT * FROM ResultadoPonderacionTurismo";
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
            $query = "DELETE FROM RecibirPonderacionesTurista";
            $stmt = $conn->query($query);
            return true;
        } catch (PDOException $error) {
            echo "Error al vaciar la tabla: " . $error->getMessage();
            return false;
        }
    }
}

?>

