<?php
include_once('../conexion/conexion.php');
$enviar = $_GET['enviar'];
$id = $_GET['nocliente'];
$result = pg_query($conexion, "SELECT * FROM usuarios.ccclien WHERE clinum = $id");
$arreglo = pg_fetch_all($result);
echo json_encode($arreglo);
