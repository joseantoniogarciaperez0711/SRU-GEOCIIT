<?php

require_once 'consultasTurismo.php';

$resultados = Consultas::obtenerResultadoPonderacionTurismo();
if ($resultados) {
    foreach ($resultados as $resultado) {
      foreach ($resultado as $campo => $valor) {
        echo $campo . ': ' . $valor . '<br>';
      }
      echo '<br>';
    }
  } else {
    echo 'No se encontraron resultados.';
  }
  
?>

