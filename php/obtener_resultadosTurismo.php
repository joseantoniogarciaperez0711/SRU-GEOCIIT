<?php
require_once 'consultasTurismo.php';

$resultados = Consultas::obtenerResultadoPonderacionTurismo();
echo json_encode($resultados);
?>
