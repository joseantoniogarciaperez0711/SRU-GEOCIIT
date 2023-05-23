<?php
require_once 'consultas.php';

$resultados = Consultas::obtenerResultadoPonderacionAgricultor();
echo json_encode($resultados);
?>

