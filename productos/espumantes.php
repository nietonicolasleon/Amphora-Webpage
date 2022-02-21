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
    <link rel="stylesheet" href="../estilos/styles.css"/>
    <!--Conexión con ícono Personalizado-->
    <link rel="shotcut icon" href="../images/Anforaico.ico"/>
    <title>Espumantes</title>
</head>
<body>
    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>
    <!--Header-->
    <div class="container">
        <?php
            require_once '../recursos/headeralt.php';
        ?>
        <hr/>
    </div>
    <div class="espumantes">
        <div class="esp2">
            <a href="../espumantes/extrabrutsanfelipe.php">
                <img src="../images/eDiapositiva2.JPG" alt="Espumante San Felipe Extra Brut">
            </a>
            <a href="../espumantes/extrabrutsanfelipe.php">
                <h4>Espumante San Felipe Extra Brut</h4>
            </a>
        </div>
        <div class="esp3">
            <a href="../espumantes/rosetrumpeter.php">
                <img src="../images/eDiapositiva3.JPG" alt="Espumante Trumpeter RB">
            </a>
            <a href="../espumantes/rosetrumpeter.php">
                <h4>Espumante Trumpeter Rosé de Malbec</h4>
            </a>
        </div>
        <div class="esp4">
            <a href="../espumantes/extrabruttrumpeter.php">
                <img src="../images/eDiapositiva4.JPG" alt="Espumante Trumpeter EB">
            </a>
            <a href="../espumantes/extrabruttrumpeter.php">
                <h4>Espumante Trumpeter Extra Brut</h4>
            </a>
        </div>
        <div class="esp5">
            <a href="../espumantes/pinotnoirencuentro.php">
                <img src="../images/eDiapositiva5.JPG" alt="Espumante Encuentro PN">
            </a>
            <a href="../espumantes/pinotnoirencuentro.php">
                <h4>Espumante Encuentro Brut Nature Pinot Noir Estuche</h4>
            </a>
        </div>
    </div>
    <!--Redes Sociales-->
    <?php
        require_once '../recursos/footer.php';
    ?>
    <!--Conexión con ScrollReveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--Conexión con el script principal del JavaScript-->
    <script src="../main.js"></script>
    <!--Conexión con SweetAlert 2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Conexión con sweetalert.js-->
    <?php
        if (!isset($_COOKIE['cookieVisitas'])){
            echo "<script src='../sweetalert.js'></script>";
        }
    ?>
</body>
</html>