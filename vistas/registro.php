

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
                                <a href="../index.html" class="btn btn-primary">
                                <i class="fa-solid fa-bars"></i> Menu Principal
                                </a>
                                <h2>Añade los datos correspondientes</h2>

                                <form action="../procesos/insertar.php" method="post">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    <label for="nombre">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="paterno" name="paterno">
                                    <label for="nombre">Apellido Materno</label>
                                    <input type="text" class="form-control" id="materno" name="materno">
                                    <label for="nombre">Email</label>
                                    <input type="email" class="form-control" id="correo" name="correo">
                                    <label for="nombre">Tipo Vacuna</label>
                                    <input type="text" class="form-control" id="vacuna" name="vacuna" required>
                                    <label for="nombre">Fecha</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                                    <label for="nombre">Modulo</label>
                                    <input type="text" class="form-control" id="modulo" name="modulo" required>
                                    <button class="btn btn-primary mt-3"><i class="fa-solid fa-floppy-disk"></i> Agregar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "../CRUD MONGO/scripts.php" ?>
</body>
</html>