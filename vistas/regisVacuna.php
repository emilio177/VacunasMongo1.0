

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Vacuna</title>
    <link rel="stylesheet" href="../public/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="../public/fontawesome-free-6.5.1-web/css/all.css">
</head>
<body>
<div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card mt-4">
                            <div class="card-body">

                                <a href="./vacunas.php" class="btn btn-outline-info"><i class="fa-solid fa-arrow-left-long"></i> Regresar</a>
                                <a href="../index.html" class="btn btn-primary">
                                <i class="fa-solid fa-bars"></i> Menu Principal
                                </a>
                                <h2>Agrega una vacuna</h2>

                                <form action="../procesos/insertarVacuna.php" method="post">
                                    <label for="nombre">Nombre Vacuna</label>
                                    <input type="text" class="form-control" id="nombrev" name="nombrev" required>
                                    <label for="nombre">Compañia</label>
                                    <input type="text" class="form-control" id="compania" name="compania" required>
                                    <label for="nombre">Poblacion</label>
                                    <input type="text" class="form-control" id="poblacion" name="poblacion" required>
                                    <label for="nombre">Administracion</label>
                                    <input type="text" class="form-control" id="administracion" name="administracion" required>
                                    <label for="nombre">Eficacia</label>
                                    <input type="number" class="form-control" id="eficacia" name="eficacia" required>
                                    
                                    <button class="btn btn-primary mt-3"><i class="fa-solid fa-floppy-disk"></i> Agregar Vacuna</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "../CRUD MONGO/scripts.php" ?>
</body>
</html>