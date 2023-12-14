<?php

include "../controladores/conexion.php";
include "../controladores/crud.php";

$crud = new Crud();
$id = $_POST['id'];
$datos = $crud->obtenerDocumento($id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="../public/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="../public/fontawesome-free-6.5.1-web/css/all.css">
    <link rel="stylesheet" href="../assets/css/eliminar.css">
</head>
<body>
<div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card mt-4 fondoDelete">
                            <div class="card-body">

                                <a href="./datos.php" class="btn btn-outline-info"><i class="fa-solid fa-arrow-left-long"></i> Regresar</a>
                                <h2>Eliminar Registro</h2>

                                <table class="table table-bordered">
                                    <thead>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Email</th>
                                        <th>Vacuna</th>
                                        <th>Fecha</th>
                                        <th>Modulo</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $datos->nombre ?></td>
                                            <td><?php echo $datos->apellidp ?></td>
                                            <td><?php echo $datos->apellidom ?></td>
                                            <td><?php echo $datos->email ?></td>
                                            <td><?php echo $datos->vacuna ?></td>
                                            <td><?php echo $datos->fecha ?></td>
                                            <td><?php echo $datos->modulo ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <div class="alert alert-danger" role="alert">
                                    <p>Esta seguro de eliminar este registro?</p>
                                    <p>Una vez eliminado no podra ser recuperado</p>
                                </div>

                                <form action="../procesos/eliminar.php" method="post">
                                    <input type="text" name="id" value="<?php echo $datos->_id; ?>" hidden>
                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-user-xmark"></i> Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "../CRUD MONGO/scripts.php" ?>
</body>
</html>