<?php
include_once('../conexion/conexion.php');
$campo = $_POST['campo'];
$new = json_encode($campo);
$true = true;
$n = rand(1, 99999);
#Se va agregar el ID con el rand, hasta cuando se configure bien la bd con el auto_increment en postgrest
while ($true) {
    $consulta = "SELECT * FROM usuarios.form WHERE id = $n ";
    $comprobar = pg_query($conexion, $consulta);
    $arreglo = pg_fetch_all($comprobar);
    if (count($arreglo) == 0) {
        $true = false;
    }
}
$consulta = "INSERT INTO usuarios.form (id, campo) VALUES ($n, '$new' )";
$insertarDatos = pg_query($conexion, $consulta);
if ($insertarDatos) {
    // echo 'Paso';
    header('Location: ../../index.php', true);
    exit();
} else {
    die('No paso ERROR');
}
