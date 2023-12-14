<?php session_start();
include "../controladores/conexion.php";
include "../controladores/crud.php";

    $Crud = new Crud();

    $id = $_POST['id'];

    $datos = array(
        //"_id" => $_POST['id'],
        "nombre" => $_POST['nombre'],
        "apellidp" => $_POST['paterno'],
        "apellidom" => $_POST['materno'],
        "email" => $_POST['email'],
        "vacuna" => $_POST['vacuna'],
        "fecha" => $_POST['fecha'],
        "modulo" => $_POST['modulo']
    );

    $respuesta = $Crud->actualizar($id,$datos);

    if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0){
        $_SESSION['mensaje_crud'] = 'update';
        header("location:../vistas/datos.php");
    } else {
        print_r($respuesta);
    }

?>