<?php
$programador = $_POST['programador'];
$codigo = $_POST['codigo'];
$origen = $_POST['origen'];
$dia = $_POST['dia'];
$hora = $_POST['hora'];
$minuto = $_POST['minuto'];
$destino = $_POST['destino'];


include('db.php');

$consulta_insertar="INSERT INTO vuelos(programador,codigo,origen,dia,hora,minuto,destino) VALUES('$programador','$codigo','$origen','$dia','$hora','$minuto','$destino')";


$ejecucion = mysqli_query($connection,$consulta_insertar);

if ($ejecucion) {
    header("Location: home_admin.php");
} else {
    echo "No se registró";
}
?>