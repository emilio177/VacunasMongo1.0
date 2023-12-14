<?php

include "../controladores/conexion.php";
include "../controladores/crud.php";

$crud = new Crud();
$id = $_POST['id'];
$datos = $crud->obtenerDocumento($id);
$idMongo = $datos->_id;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="../public/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="../public/fontawesome-free-6.5.1-web/css/all.css">
</head>
<body>
<div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card mt-4">
                            <div class="card-body">

                                <a href="./datos.php" class="btn btn-outline-info"><i class="fa-solid fa-arrow-left-long"></i> Regresar</a>
                                <h2>Actualiza los Registros</h2>

                                <form action="../procesos/actualizar.php" method="POST">
                                    <input type="text" hidden value="<?php echo $idMongo ?>" name="id">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datos->nombre ?>">
                                    <label for="nombre">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="paterno" name="paterno" value="<?php echo $datos->apellidp ?>">
                                    <label for="nombre">Apellido Materno</label>
                                    <input type="text" class="form-control" id="materno" name="materno" value="<?php echo $datos->apellidom ?>">
                                    <label for="nombre">Email</label>
                                    <input type="mail" class="form-control" id="correo" name="correo" value="<?php echo $datos->email ?>">
                                    <label for="nombre">Tipo Vacuna</label>
                                    <input type="text" class="form-control" id="vacuna" name="vacuna" value="<?php echo $datos->vacuna ?>">
                                    <label for="nombre">Fecha</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $datos->fecha ?>">
                                    <label for="nombre">Modulo</label>
                                    <input type="text" class="form-control" id="modulo" name="modulo" value="<?php echo $datos->modulo ?>">
                                    <button class="btn btn-warning mt-3"><i class="fa-solid fa-floppy-disk"></i> Actualizar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "../CRUD MONGO/scripts.php" ?>
</body>
</html>