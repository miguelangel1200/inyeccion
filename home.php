<?php


include('db.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Posicionamiento</title>
</head>
<body>
    <h1>Datos Obtenidos</h1>
    <table border="1">
        <tr>
            <td>x</td><td>y</td><td>z</td><td>ubicacion</td>
        </tr>
        <tr>
            <?php
                $sql="Select * from posicion";
                $result=mysqli_query($connection,$sql);
                while($rowData = mysqli_fetch_array($result)){
            ?> 
        <tr>
            <td><?php echo $rowData['x'] ?></td>
            <td><?php echo $rowData['y'] ?></td>
            <td><?php echo $rowData['z'] ?></td>
            <td><?php echo $rowData['ubicacion'] ?></td>
        </tr>   
            <?php    
                }
            ?>
    </table>
    <br>

</body>
</html>
<table>