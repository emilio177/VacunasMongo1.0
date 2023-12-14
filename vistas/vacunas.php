<?php session_start();
    require_once "../controladores/conexion.php";
    require_once "../controladores/crudVacunas.php";

    $crud = new Crud();
    $datos = $crud->mostrarDatos();

    //Alerta
    $mensaje = '';
    if(isset($_SESSION['mensaje_crud'])){
        $mensaje = $crud->mensajesCrud($_SESSION['mensaje_crud']);
        unset($_SESSION['mensaje_crud']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacunas</title>
    <link rel="stylesheet" href="../public/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="../public/fontawesome-free-6.5.1-web/css/all.css">
</head>
<body>
<div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card mt-4">
                        <div class="card-body"> <!-- Aqui empieza Vacunas  -->
                                <h2>Listado de vacunas disponibles</h2>
                                <a href="./registro.php" class="btn btn-primary">
                                <i class="fa-solid fa-user-plus"></i> Registrate Aqui
                                </a>
                                <a href="./regisVacuna.php" class="btn btn-primary">
                                <i class="fa-solid fa-shield-virus"></i> Ingresa una nueva vacuna
                                </a>
                                <a href="./modulo.php" class="btn btn-primary">
                                <i class="fa-solid fa-hospital"></i> Modulos Vacunacion
                                </a>
                                <a href="../index.html" class="btn btn-primary">
                                <i class="fa-solid fa-bars"></i> Menu Principal
                                </a>
                                <hr>
                                <table class="table table-sm table-hover table-bordered">
                                    <thead>
                                        <th>Vacuna</th>
                                        <th>Compañia</th>
                                        <th>Poblacion</th>
                                        <th>Administracion</th>
                                        <th>Eficacia</th>
                                        <!--<th>Fecha</th>
                                        <th>Modulo</th>
                                        <th>Editar</th> -->
                                        <th>Eliminar</th>
                                    </thead>
                                    <tbody>
                                    <?php   
                                        foreach($datos as $item):
                                    ?>
                                        <tr>
                                            <td><?php echo $item->nombrev; ?></td>
                                            <td><?php echo isset($item->compania) ? $item->compania : ''; ?></td>
                                            <td><?php echo isset($item->poblacion) ? $item->poblacion : ''; ?></td>
                                            <td><?php echo isset($item->administracion) ? $item->administracion : ''; ?></td>
                                            <td><?php echo isset($item->eficacia) ? $item->eficacia : ''; ?></td>
                                            <!--<td><?php //echo isset($item->fecha) ? $item->fecha : ''; ?></td>
                                            <td><?php //echo isset($item->modulo) ? $item->modulo : ''; ?></td>-->
                                            <!--<td class="text-center">
                                                <form action="./actualizar.php" method="POST">
                                                <input type="text" hidden value="<?php //echo $item->_id ?>" name="id">
                                                    <button class="btn btn-warning">
                                                        <i class="fa-solid fa-user-pen"></i> Editar
                                                    </button>
                                                </form>
                                            </td> -->
                                            <td class="text-center">
                                                <form action="./elimVacuna.php" method="POST">
                                                    <input type="text" hidden value="<?php echo $item->_id ?>" name="id">
                                                    <button class="btn btn-danger">
                                                    <i class="fa-solid fa-user-xmark"></i> Eliminar
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <!-- Aqui empieza Modulos  -->
                        </div>
                    </div>
                </div>
            </div>
        
    <?php include "../CRUD MONGO/scripts.php" ?>

    <script>
        let mensaje = <?php echo $mensaje; ?>;
        console.log(mensaje); //imprime el mensaje
    </script>   
</body>
</html>