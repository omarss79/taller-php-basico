<?php include_once('../config/database.php');?>

<?php 
if(isset($_POST['editar_articulo']) && $_POST['editar_articulo'] == "Editar Articulo"){
    
    if( $_POST['nombre'] != ""  &&
        $_POST['descripcion'] != "" 
        ) {
        
        // INSERTAR  
        $sql_articulo_update='UPDATE articulos SET
                                     nombre = "'.trim($_POST['nombre']).'", 
                                     descripcion = "'.addslashes(trim($_POST['descripcion'])).'" 
                            WHERE articulo_id = '.$_POST['articulo_id'];

        echo $sql_articulo_update;
        $update = mysqli_query($conexion, $sql_articulo_update);
        $articulo_orden = mysqli_insert_id ($conexion);
        
        if ($update == true) echo '<h1>Articulo modificado correctamente.</h1>';
        else  echo '<h1>Error, el articulo no se modifico.</h1>';

    } else echo '<h1>Error, faltan datos en la forma de captura</h1>';
} else echo "No entra";
?>

<div><a href="listado.php">Regresar</a></div>