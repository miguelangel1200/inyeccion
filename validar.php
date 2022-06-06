<?php

$usuario = $_POST['usuario'];
$password = $_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;

include('db.php');

$consulta="SELECT*FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
$consulta_cantidad = "SELECT COUNT(*) AS cantidad FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
$consulta_privilegio = "SELECT type FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";


$resultado = mysqli_query($connection,$consulta);
$resultado_cantidad = mysqli_query($connection,$consulta_cantidad);
$resultado_privilegio = mysqli_query($connection,$consulta_privilegio);




$filas=mysqli_num_rows($resultado);

if($filas){
    while($rowData = mysqli_fetch_array($resultado)){
        echo "<br>Su usuario es: ", $rowData["usuario"].'<br>';
        echo "Su contraseña es: ", $rowData["password"].'<br>';
        echo "Su privilegio es: ", $rowData["type"].'<br>';
    }

    while ($row= $resultado_cantidad->fetch_array()) {
        echo "<br>Cantidad encontrado: ", $row["cantidad"].'<br><br>';
    }
    
    ?>
    <input type="button" value="Seguir" onClick=" window.location.href='home.php' ">
    <?php


    while ($rows= $resultado_privilegio->fetch_array()) {
        if ($rows["type"]=="admin") {
            ?>
            <input type="button" value="CRUD" onClick=" window.location.href='home_admin.php' ">
            <?php
        }
    }
    

    //header("location:home.php");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR al autenticar datos</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($connection);