<?php session_start();
    require_once "../controladores/conexion.php";
    require_once "../controladores/crud.php";

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
    <title>Datos Actuales</title>
    <link rel="stylesheet" href="../public/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="../public/fontawesome-free-6.5.1-web/css/all.css">
    
</head>
<body>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card mt-4">
                            <div class="card-body">
                                <h2>Pacientes</h2>
                                <a href="./registro.php" class="btn btn-primary">
                                <i class="fa-solid fa-user-plus"></i> Agregar un nuevo registro
                                </a>
                                <a href="./vacunas.php" class="btn btn-primary">
                                <i class="fa-solid fa-shield-virus"></i> Vacunas
                                </a>
                                <a href="./modulo.php" class="btn btn-primary">
                                <i class="fa-solid fa-hospital"></i> Modulos Vacunacion
                                </a>
                                <a href="./estados.php" class="btn btn-primary">
                                <i class="fa-solid fa-map-location"></i> Estados
                                </a>
                                <a href="../index.html" class="btn btn-primary">
                                <i class="fa-solid fa-bars"></i> Menu Principal
                                </a>
                                <hr>
                                <table class="table table-sm table-hover table-bordered">
                                    <thead>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>email</th>
                                        <th>vacuna</th>
                                        <th>Fecha</th>
                                        <th>Modulo</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </thead>
                                    <tbody>
                                    <?php   
                                        foreach($datos as $item):
                                    ?>
                                        <tr>
                                            <td><?php echo $item->nombre; ?></td>
                                            <td><?php echo isset($item->apellidp) ? $item->apellidp : ''; ?></td>
                                            <td><?php echo isset($item->apellidom) ? $item->apellidom : ''; ?></td>
                                            <td><?php echo isset($item->email) ? $item->email : ''; ?></td>
                                            <td><?php echo isset($item->vacuna) ? $item->vacuna : ''; ?></td>
                                            <td><?php echo isset($item->fecha) ? $item->fecha : ''; ?></td>
                                            <td><?php echo isset($item->modulo) ? $item->modulo : ''; ?></td>
                                            <td class="text-center">
                                                <form action="./actualizar.php" method="POST">
                                                <input type="text" hidden value="<?php echo $item->_id ?>" name="id">
                                                    <button class="btn btn-warning">
                                                        <i class="fa-solid fa-user-pen"></i> Editar
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="text-center">
                                                <form action="./eliminar.php" method="POST">
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
