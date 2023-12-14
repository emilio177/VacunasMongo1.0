<?php session_start();
include "../controladores/conexion.php";
include "../controladores/crud.php";

    $Crud = new Crud();


    $datos = array(
        "nombre" => $_POST['nombre'],
        "apellidp" => $_POST['paterno'],
        "apellidom" => $_POST['materno'],
        "email" => $_POST['email'],
        "vacuna" => $_POST['vacuna'],
        "fecha" => $_POST['fecha'],
        "modulo" => $_POST['modulo']
    );

    $respuesta = $Crud->insertarDatos($datos);

    if($respuesta->getInsertedId() > 0){
        $_SESSION['mensaje_crud'] = 'insert';
        header("location:../vistas/datos.php");
    } else {
        print_r($respuesta);
    }
?>