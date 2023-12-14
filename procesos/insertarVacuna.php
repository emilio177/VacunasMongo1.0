<?php session_start();
include "../controladores/conexion.php";
include "../controladores/crudVacunas.php";

    $Crud = new Crud();


    $datos = array(
        "nombrev" => $_POST['nombrev'],
        "compania" => $_POST['compania'],
        "poblacion" => $_POST['poblacion'],
        "administracion" => $_POST['administracion'],
        "eficacia" => $_POST['eficacia']
    );

    $respuesta = $Crud->insertarDatos($datos);

    if($respuesta->getInsertedId() > 0){
        $_SESSION['mensaje_crud'] = 'insert';
        header("location:../vistas/vacunas.php");
    } else {
        print_r($respuesta);
    }
?>