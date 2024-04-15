<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cotización - Galaxy Empire Software</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: lightgray;
            color: #333;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title">Formulario de Cotización</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="nombres" class="form-label">Nombres</label>
                                <input type="text" class="form-control" id="nombres" required>
                            </div>
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" required>
                            </div>
                            <div class="mb-3">
                                <label for="fecha-nacimiento" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="fecha-nacimiento" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" id="telefono" required>
                            </div>
                            <div class="mb-3">
                                <label for="direccion-empresa" class="form-label">Dirección de la Empresa</label>
                                <input type="text" class="form-control" id="direccion-empresa" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion-aplicacion" class="form-label">Descripción de la Aplicación</label>
                                <textarea class="form-control" id="descripcion-aplicacion" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Enviar Cotización</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>