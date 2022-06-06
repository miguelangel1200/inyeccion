<?php

$usuario = $_POST['usuario'];
$password = $_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;

include('db.php');

$consulta="SELECT*FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
$consulta_cantidad = "SELECT COUNT(*) FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";

$resultado = mysqli_query($connection,$consulta);
//$resultado_cantidad = mysqli_query($connection,$consulta_cantidad);

$filas=mysqli_num_rows($resultado);

if($filas){
    echo "Su usuario es: ", $usuario, "<br>";
    echo "Su contraseña es: ", $password, "<br>";
    echo "Cantidad encontrado: ", $consulta_cantidad;
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