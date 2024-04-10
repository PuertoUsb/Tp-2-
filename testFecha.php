<?php
include ("fecha.php");
$fecha = new Fecha(16, 07, 2000);
echo "Fecha abreviada: " . $fecha->abreviada(). "\n";
echo "Fecha extendida: " . $fecha->extendida();
?> 
