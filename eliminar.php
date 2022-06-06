<?php 
    include('db.php');

    $cod_vuelo=$_GET["id"];

    $consulta_eliminar = "DELETE FROM vuelos WHERE id = '$cod_vuelo'";
    $query=mysqli_query($connection,$consulta_eliminar);

    if ($query) {
        header("Location: home_admin.php");
    }
?>