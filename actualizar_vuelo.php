<?php 
include('db.php');

$cod_vuelo=$_GET["id"];

$sql = "SELECT * FROM vuelos WHERE id = '$cod_vuelo'";
$respuesta = mysqli_query($connection,$sql);

$rows=mysqli_fetch_array($respuesta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    
    <form action="actualizar.php" method="post">
        <input type="hidden" name="id_vuelo" value="<?php echo $rows['id']?>">


        <p>Programador: <input type="text" value="<?php echo $rows['programador']?>" name="programador_up"></p>
        <p>Código: <input type="text" value="<?php echo $rows['codigo']?>" name="codigo_up"></p>
        <p>Origen: <input type="text" value="<?php echo $rows['origen']?>" name="origen_up"></p>
        <p>Día: <input type="date" value="<?php echo $rows['dia']?>" name="dia_up"></p>
        <p>Hora: <input type="number" value="<?php echo $rows['hora']?>" name="hora_up"></p>
        <p>Minuto: <input type="number" value="<?php echo $rows['minuto']?>" name="minuto_up"></p>
        <p>Destino: <input type="text" value="<?php echo $rows['destino']?>" name="destino_up"></p>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>