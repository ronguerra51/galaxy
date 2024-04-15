<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Galaxy Empire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .footer {
            background-color: #17a2b8;
            color: #fff;
            padding: 20px 0;
        }
        body {
            background-color: lightgray;
        }

        .footer a {
            color: #fff;
        }

        .footer a:hover {
            color: #f8f9fa;
        }

        .footer .social-icons a {
            display: inline-block;
            margin-right: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .footer .social-icons a:hover {
            transform: scale(1.2);
        }

        .contact-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background-color: #f8f9fa;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .contact-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .contact-container p {
            margin-bottom: 20px;
        }

        .centered-image {
            display: block;
            margin: 0 auto;
            width: 50%;
            max-width: 400px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        #map-container {
            max-width: 800px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            margin-bottom: 30px;
        }

        #map {
            width: 100%;
            height: 400px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <div class="contact-container">
            <h2>¡Comunícate con nosotros!</h2>
            <p>Puedes contactarnos de las siguientes maneras:</p>
            <ul>
                <li><strong>Dirección:</strong></li>
                <li>
                    <i class="fas fa-map-marker-alt"></i> Zona 5, Ciudad de Guatemala, Servicio de Intendencia de Guatemala
                </li>
                <li><strong>Teléfonos:</strong></li>
                <li>
                    <i class="fas fa-phone-alt"></i> 78554422 - 784422211
                </li>
            </ul>
        </div>
    </div>

    <div id="map-container" class="container mt-5 mb-5">
        <h2 class="text-center">DIRECCIÓN <i class="fas fa-map-marker-alt"></i></h2>
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7721.418167633918!2d-90.5055757!3d14.615641200000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sgt!4v1712867923736!5m2!1ses!2sgt" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <?php include 'footer.php'; ?>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
