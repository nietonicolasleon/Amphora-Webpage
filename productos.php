<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Conexión con Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <!--Fuente Playfair Display-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    <!--Conexión CSS-->
    <link rel="stylesheet" href="/estilos/styles.css"/>
    <!--Conexión con ícono Personalizado-->
    <link rel="shotcut icon" href="/images/Anforaico.ico"/>
    <title>Productos</title>
</head>
<body>
    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>
    <!--Header-->
    <div class="container">
        <?php
            require_once('recursos/header.php');
        ?>
        <hr/>
    </div>
    <h1 class="titular">Nuestros productos: </h1>
    <div class="prodcontainer">
        <div class="pvino">
            <a href="/productos/vinos.php">
                <img src="/images/vinosproductos.jpg" alt="Vinos">
            </a>
            <a href="/productos/vinos.php">
                <h3>Vinos</h3>
            </a>
        </div>
        <div class="pespumante">
            <a href="/productos/espumantes.php">
                <img src="/images/espumantesproductos.jpg" alt="Espumantes">
            </a>
            <a href="/productos/espumantes.php">
                <h3>Espumantes</h3>
            </a>
        </div>
        <div class="pcombo">
            <a href="/productos/promociones.php">
                <img src="/images/combosproductos.jpg" alt="Combos">
            </a>
            <a href="/productos/promociones.php">
                <h3>Promociones</h3>
            </a>
        </div>
    </div>
    <!--Redes Sociales-->
    <?php
        require_once('recursos/footer.php');
    ?>
    <!--Conexión con ScrollReveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--Conexión con el script principal del JavaScript-->
    <script src="/main.js"></script>
    <!--Conexión con SweetAlert 2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Conexión con sweetalert.js-->
    <script src="/sweetalert.js"></script>
</body>
</html>