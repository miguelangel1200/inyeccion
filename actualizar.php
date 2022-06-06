<?php

include('db.php');

$cod_vuelo=$_POST["id_vuelo"];

$programador_up = $_POST['programador_up'];
$codigo_up = $_POST['codigo_up'];
$origen_up = $_POST['origen_up'];
$dia_up = $_POST['dia_up'];
$hora_up = $_POST['hora_up'];
$minuto_up = $_POST['minuto_up'];
$destino_up = $_POST['destino_up'];

$consulta_actualizar = "UPDATE vuelos SET programador='$programador_up', codigo='$codigo_up', origen='$origen_up', dia='$dia_up', 
hora='$hora_up', minuto='$minuto_up', destino='$destino_up' WHERE id = '$cod_vuelo'";
$query=mysqli_query($connection,$consulta_actualizar);

if ($query) {
    header("Location: home_admin.php");
}

?>