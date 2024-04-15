<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy Empire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color:lightgray;
            color: #333;
        }

        .container {
            padding-top: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .welcome-section {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .welcome-text {
            font-size: 18px;
            line-height: 1.6;
        }

        .welcome-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 20px; /* Espacio entre la imagen y el texto */
        }

        .btn-primary {
            background-color: #17a2b8;
            border-color: #17a2b8;
            margin-top: 20px; /* Espacio entre el texto y el botón */
        }

        .btn-primary:hover {
            background-color: #138496;
            border-color: #138496;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <!-- Contenido principal -->
    <div class="container">
        <div class="welcome-section">
            <h1>¡Bienvenido a Galaxy Empire!</h1>
            <p class="welcome-text">En Galaxy Empire, nos dedicamos a ofrecer soluciones de software de vanguardia para empresas de todos los tamaños. Nuestra pasión por la tecnología y el compromiso con la excelencia nos impulsan a crear aplicaciones y sistemas personalizados que se adaptan a las necesidades específicas de nuestros clientes.</p>
            <img src="../images/5" alt="Imagen de bienvenida" class="welcome-image">
        </div>
        <a href="acercade.php" class="btn btn-primary">Acerca de Galaxy Empire</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <?php include 'footer.php'; ?>

</body>

</html>
