<?php session_start();

include "../controladores/conexion.php";
include "../controladores/crud.php";
    $crud = new Crud();
    $id = $_POST['id'];

    $respuesta = $crud->eliminar($id);

    if($respuesta->getDeletedCount() > 0){
        $_SESSION['mensaje_crud'] = 'delete';
        header("location:../vistas/datos.php");
    } else {
        print_r($respuesta);
    }

?>