<?php
// $conexion = new mysqli('localhost', 'root', '', 'formulario');
// if(!$conexion){
//     echo 'hola hola :)' ;
// }
// pg_connect("host=$host, port=$port, user=$user, password=$pass, dbname=$dbname");
// $conexion = pg_connect("host=localhost; port=5432; dbname=gedas1; user=postgres; password=P@ssw0rd;");
// $host = "localhost";
// $port = "5432";
// $user = "postgres";
// $pass = "P@ssw0rd";
// $dbname = "gedas1";

// $conexion = pg_connect("host=$host, port=$port, user=$user, password=$pass, dbname=$dbname");


$conn_string = "host=localhost port=5432 dbname=gedas1 user=postgres password=P@ssw0rd";
$conexion = pg_connect($conn_string);
if (!$conexion) {
    echo 'error';
} else {
    // echo 'Bien';
}
