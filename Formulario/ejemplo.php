<?php
include_once('php/conexion/conexion.php');
$result = pg_query($conexion, "SELECT clinum, clinombre,  clidir FROM usuarios.ccclien");
$arreglo = pg_fetch_all($result);
print_r($arreglo);
