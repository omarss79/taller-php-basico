<?php include("../config/database.php");?>

<?php
    $sql_articulo = "SELECT * FROM articulos WHERE articulo_id = " . $_GET['articulo_id'];
    echo $sql_articulo;
    $datos_articulo = mysqli_query($conexion, $sql_articulo);
    $num_articulo = mysqli_num_rows($datos_articulo); 
    $reg_articulo = mysqli_fetch_array($datos_articulo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Articulo</title>
</head>
<body>
    <h1>Editar Articulo</h1>
    <a href="listado.php">Regresar</a>
    <form action="editar_update.php" method="POST">

    
        <p>Nombre: <input type="text" name="nombre" id="nombre1" value="<?php echo $reg_articulo['nombre'];?>"></p>
        <p>Descripción: <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?php echo $reg_articulo['descripcion'];?></textarea></p>
        <p><input type="submit" name="editar_articulo" value="Editar Articulo"></p>
        <input type="hidden" name="articulo_id" value="<?php echo $reg_articulo['articulo_id'];?>">

    </form>
</body>
</html>