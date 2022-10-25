<?php include_once('../config/database.php');?>

<?php 
if(isset($_POST['guardar_articulo']) && $_POST['guardar_articulo'] == "Guardar Nuevo Articulo"){
    
    if( $_POST['nombre'] != ""  &&
        $_POST['descripcion'] != "" 
        ) {
        
        // INSERTAR  
        $sql_articulo_insert='INSERT INTO articulos ( nombre, descripcion ) 
                            VALUES ( "'.trim($_POST['nombre']).'", 
                            "'.addslashes(trim($_POST['descripcion'])).'")';

        echo $sql_articulo_insert;
        $insert = mysqli_query($conexion, $sql_articulo_insert);
        $articulo_orden = mysqli_insert_id ($conexion);
        
        if ($insert == true) echo '<h1>Articulo guardado exitosamente.</h1>';
        else  echo '<h1>Error, el articulo no se guardo.</h1>';

    } else echo '<h1>Error, faltan datos en la forma de captura</h1>';
} else echo "No entra";
?>

<div><a href="listado.php">Regresar</a></div>