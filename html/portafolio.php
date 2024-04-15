<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio de Trabajo | Galaxy Empire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <style>
        body {
            background-color:lightgray;
            color: #333;
        }

        .carousel-caption {
            background-color: rgba(255, 255, 255, 0.7); /* Fondo gris claro */
            padding: 20px;
            border-radius: 5px;
        }

        .project-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #000; /* Color de texto negro */
        }

        .project-description {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 10px;
            color: #000; /* Color de texto negro */
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <!-- Contenido principal -->
    <div class="container">
        <h1 class="mb-4 text-center">Portafolio de Trabajo</h1>
        <!-- Carousel -->
        <div id="projectCarousel" class="carousel slide mb-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#projectCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#projectCarousel" data-slide-to="1"></li>
                <li data-target="#projectCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="../inf.personal/index.html">
                        <img src="../images/info" alt="Proyecto 1" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="project-title">INFORMACION PERSONAL</h2>
                        </div>
                    </a>
                </div>
                <!-- Proyecto 2 -->
                <div class="carousel-item">
                    <a href="../TAREA GRID/index.html">
                        <img src="../images/ktm" alt="Proyecto 2" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="project-title">MOTOCICLETAS KTM</h2>
                        </div>
                    </a>
                </div>
                <!-- Proyecto 3 -->
                <div class="carousel-item">
                    <a href="../parcial/index.php">
                        <img src="../images/brigadas" alt="Proyecto 3" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="project-title">BRIGADAS MILITARES</h2>
                        </div>
                    </a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#projectCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#projectCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
