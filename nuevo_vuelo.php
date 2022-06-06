<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Vuelo</title>
</head>
<body>
    <h1>Nuevo Vuelo</h1>
    <form action="insertar.php" method="post">
        <p>Programador: <input type="text" placeholder="Ingrese su Programador" name="programador"></p>
        <p>Código: <input type="text" placeholder="Ingrese su Código" name="codigo"></p>
        <p>Origen: <input type="text" placeholder="Ingrese su Origen" name="origen"></p>
        <p>Día: <input type="date" placeholder="Ingrese su Día" name="dia"></p>
        <p>Hora: <input type="number" placeholder="Ingrese su Hora" name="hora"></p>
        <p>Minuto: <input type="number" placeholder="Ingrese su Minuto" name="minuto"></p>
        <p>Destino: <input type="text" placeholder="Ingrese su Destino" name="destino"></p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>