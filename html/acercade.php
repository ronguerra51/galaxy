<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de | Galaxy Empire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <style>
        body {
            color: #fff;
            background-color: lightgray;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            margin-top: 20px;
            /* Añade un margen superior */
        }

        h1,
        h2 {
            color: #fff;
            text-align: center;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        .team-member {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .team-member h3 {
            color: #fff;
        }

        .team-member img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .team-member-text {
            color: #fff;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <!-- Contenido principal -->
    <div class="container">
        <h1>Acerca de Galaxy Empire</h1>
        <p>Galaxy Empire es una empresa líder en el desarrollo de software innovador para empresas de todos los tamaños. Desde su fundación en 20XX, nos hemos especializado en proporcionar soluciones tecnológicas avanzadas que impulsan el éxito de nuestros clientes.</p>

        <div class="row">
            <div class="col-md-4">
                <div class="team-member">
                    <img src="../images/6" alt="Imagen 1">
                    <div class="team-member-text">
                        <h3>Misión</h3>
                        <p>Nuestra misión es ayudar a las empresas a alcanzar su máximo potencial a través de soluciones de software personalizadas y de calidad que satisfacen sus necesidades y desafíos únicos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <img src="../images/2" alt="Imagen 2">
                    <div class="team-member-text">
                        <h3>Valores</h3>
                        <ul>
                            <li>Innovación: Buscamos constantemente nuevas formas de mejorar y optimizar nuestros productos y servicios.</li>
                            <li>Calidad: Nos comprometemos a ofrecer soluciones de alta calidad que cumplan con los más altos estándares de la industria.</li>
                            <li>Colaboración: Trabajamos en estrecha colaboración con nuestros clientes para comprender sus necesidades y ofrecer soluciones a medida.</li>
                            <li>Ética: Operamos con integridad y transparencia en todas nuestras interacciones y decisiones.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <img src="../images/4" alt="Imagen 3">
                    <div class="team-member-text">
                        <h3>Visión</h3>
                        <p>Nuestra visión es ser reconocidos como líderes en la industria del desarrollo de software, brindando soluciones innovadoras que transformen la manera en que las empresas operan y crean valor para sus clientes.</p>
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