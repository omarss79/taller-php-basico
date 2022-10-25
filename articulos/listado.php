<?php include("../config/database.php");?>

<?php
    $sql_articulos = "SELECT * FROM articulos ORDER BY articulo_id ASC";
    $datos_articulos = mysqli_query($conexion, $sql_articulos);
    $num_articulos = mysqli_num_rows($datos_articulos); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Articulos</title>
</head>
<body>
    <h1>Listado de Articulos</h1>
    <hr>
    <a href="nuevo.php">Nuevo</a>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Descripción</td>
            <td colspan="2">Acciones</td>
        </tr>
        
        
        <?php while($reg_articulos = mysqli_fetch_array($datos_articulos)){ ?>
            <tr>
                <td><?php echo $reg_articulos['articulo_id'];?></td>
                <td><?php echo $reg_articulos['nombre'];?></td>
                <td><?php echo $reg_articulos['descripcion'];?></td>
                <td><a href="editar.php?articulo_id=<?php echo $reg_articulos['articulo_id'];?>">Editar</a></td>
                <td>Eliminar</td>
            </tr>
        <?php }?>

    </table>
</body>
</html>