<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo - Galaxy Empire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        body {
            background-color: lightgray;
            color: #333;
        }

        .card {
            background-color: #fff;
            border-color: #17a2b8;
        }

        .card-header {
            background-color: #17a2b8;
            color: #fff;
        }
        h1 {
            text-align: center;
        }
        h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h1 class="mb-4">NUESTRO EQUIPO</h1>

        <!-- Propietario y Vicepresidente -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        PROPIETARIO
                    </div>
                    <img src="../images/velorio" class="card-img-top" alt="Foto Propietario">
                    <div class="card-body">
                        <h5 class="card-title">Francisco Daniel Rivas "VELORIO"</h5>
                        <p class="card-text">El propietario de Galaxy Empire tiene una vasta experiencia en desarrollo de software y liderazgo de equipos. Su visión estratégica ha llevado a la empresa al éxito.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        VICEPRESIDENTE
                    </div>
                    <img src="../images/roger" class="card-img-top" alt="Foto Vicepresidente">
                    <div class="card-body">
                        <h5 class="card-title">Roger Ronaldo Carpio "CARPIOLA"</h5>
                        <p class="card-text">El vicepresidente de Galaxy Empire es un experto en desarrollo de software con un enfoque especial en tecnologías emergentes. Ha liderado múltiples proyectos exitosos.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trabajadores -->
        <h3 class="mt-5 mb-3">TRABAJADORES</h3>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        INGENIERO EN SISTEMAS
                    </div>
                    <img src="../images/moran" class="card-img-top" alt="Foto Ingeniero en Sistemas">
                    <div class="card-body">
                        <h5 class="card-title">Edgar Daniel Moran "PROXO"</h5>
                        <p class="card-text">El ingeniero en sistemas de Galaxy Empire es experto en el diseño y desarrollo de sistemas complejos, garantizando la eficiencia y calidad de nuestras soluciones.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        PROGRAMADOR
                    </div>
                    <img src="../images/mencos" class="card-img-top" alt="Foto Programador">
                    <div class="card-body">
                        <h5 class="card-title">Luis Alejandro Mencos "MICKI O"</h5>
                        <p class="card-text">El programador de Galaxy Empire es un especialista en el desarrollo de código eficiente y funcional, contribuyendo al éxito de nuestros proyectos tecnológicos.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        ATENCIÓN AL CLIENTE
                    </div>
                    <img src="../images/vargas" class="card-img-top" alt="Foto Atención al Cliente">
                    <div class="card-body">
                        <h5 class="card-title">Jean Paul Fuentes "EL GORRA"</h5>
                        <p class="card-text">El encargado de atención al cliente de Galaxy Empire se dedica a garantizar la satisfacción y excelencia en el servicio para nuestros clientes, estableciendo relaciones sólidas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
