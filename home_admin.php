<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
<table border="1">
    <h1>Vuelos</h1>
        <tr>
            <td>ID</td>
            <td>Programador</td>
            <td>Código</td>
            <td>Origen</td>
            <td>Día</td>
            <td>Hora</td>
            <td>Minuto</td>
            <td>Destino</td>
            <td>Acciones</td>
        </tr>
        <tr>
            <?php
                $sql_vuelos="Select * from vuelos";
                $resultado=mysqli_query($connection,$sql_vuelos);
                while($rowData = mysqli_fetch_array($resultado)){
            ?> 
        <tr>
            <td><?php echo $rowData['id'] ?></td>
            <td><?php echo $rowData['programador'] ?></td>
            <td><?php echo $rowData['codigo'] ?></td>
            <td><?php echo $rowData['origen'] ?></td>
            <td><?php echo $rowData['dia'] ?></td>
            <td><?php echo $rowData['hora'] ?></td>
            <td><?php echo $rowData['minuto'] ?></td>
            <td><?php echo $rowData['destino'] ?></td>
            <td><a href="actualizar_vuelo.php?id=<?php echo $rowData['id'] ?>">Editar</a></td>
            <td><a href="eliminar.php?id=<?php echo $rowData['id'] ?>">Eliminar</a></td>
        </tr>   
            <?php    
                }
            ?>
    </table>
    <hr>
    <a href="nuevo_vuelo.php" type="submit">Nuevo</a>
</body>
</html>