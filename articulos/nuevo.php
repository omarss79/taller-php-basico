<?php include("../config/database.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Articulo</title>
</head>
<body>
    <h1>Nuevo Articulo</h1>
    <a href="listado.php">Regresar</a>
    <form action="nuevo_insert.php" method="POST">

    
        <p>Nombre: <input type="text" name="nombre" id="nombre1" value=""></p>
        <p>Descripción: <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea></p>
        <p><input type="submit" name="guardar_articulo" value="Guardar Nuevo Articulo"></p>
    

    </form>
</body>
</html>