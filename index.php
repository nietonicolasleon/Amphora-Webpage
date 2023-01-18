<?php
    $cooky = 'cookieVisitas';
    if (!isset($_COOKIE[$cooky])) {
        $expiracion = time() + (60 * 60 * 24);
        setcookie($cooky, true, $expiracion, '/');
    }
?>
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
    <link rel="stylesheet" href='estilos/styles.css'/>
    <!--Conexión con ícono Personalizado-->
    <link rel="shotcut icon" href='images/Anforaico.ico'/>
    <title>Página Web Oficial de Amphora</title>
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
        <!--Imagen Principal-->
        <header class="principal">
            <h2>Vinoteca Amphora</h2>
            <p>In Vino Veritas, porque creemos en el vino.</p>
            <a href="./acercade.php" class="boton">Leer más <i class="fas fa-angle-double-right"></i></a>
        </header>
        <!--Productos destacados-->
        <h3>Productos destacados: </h3>
        <div class="destacados">
            <div>
                <a href="./vinos/malbecrutini.php">
                    <img src="./images/vDiapositiva2.JPG" alt="Vino Rutini Malbec">
                </a>
                <a href="./vinos/malbecrutini.php">
                    <h4>Vino Rutini Malbec</h4>
                </a>
            </div>
            <div>
                <a href="./vinos/aaocabernetfranc.php">
                    <img src="./images/vDiapositiva23.JPG" alt="Vino AAO Cabernet Franc">
                </a>
                <a href="./vinos/aaocabernetfranc.php">
                    <h4>Vino Aguij&oacute;n de Abeja Obrera Cabernet Franc</h4>
                </a>
            </div>
            <div>
                <a href="./vinos/malbecsanfelipe.php">
                    <img src="./images/vDiapositiva7.JPG" alt="Vino San Felipe">
                </a>
                <a href="./vinos/malbecsanfelipe.php">
                    <h4>Vino San Felipe Malbec</h4>
                </a>
            </div>
            <div>
                <a href="./espumantes/extrabrutsanfelipe.php">
                    <img src="./images/eDiapositiva2.JPG" alt="Espumante San Felipe Extra Brut">
                </a>
                <a href="./espumantes/extrabrutsanfelipe.php">
                    <h4>Espumante San Felipe Extra Brut</h4>
                </a>
            </div>
        </div>
    </div>
    <!--Redes Sociales-->
    <?php
        require_once('recursos/footer.php');
    ?>
    <!--Conexión con ScrollReveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--Conexión con el script principal del JavaScript-->
    <script src="main.js"></script>
    <!--Conexión con SweetAlert 2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Conexión con sweetalert.js-->
    <?php
        if (!isset($_COOKIE['cookieVisitas'])){
            echo "<script src='sweetalert.js'></script>";
        }
    ?>
</body>
</html>