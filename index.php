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
            <p>In Vino Veritas</p>
            <a href="/acercade.html" class="boton">Leer más <i class="fas fa-angle-double-right"></i></a>
        </header>
        <!--Productos destacados-->
        <h3>Productos destacados: </h3>
        <div class="destacados">
            <div>
                <a href="/productos/vinos/malbecrutini.html">
                    <img src="/images/vDiapositiva2.JPG" alt="Vino Rutini Malbec">
                </a>
                <a href="/productos/vinos/malbecrutini.html">
                    <h4>Vino Rutini Malbec</h4>
                </a>
            </div>
            <div>
                <a href="/productos/vinos/malbectrumpeter.html">
                    <img src="/images/vDiapositiva4.JPG" alt="Vino Trumpeter Malbec">
                </a>
                <a href="/productos/vinos/malbectrumpeter.html">
                    <h4>Vino Trumpeter Malbec</h4>
                </a>
            </div>
            <div>
                <a href="/productos/vinos/malbecsanfelipe.html">
                    <img src="/images/vDiapositiva7.JPG" alt="Vino San Felipe">
                </a>
                <a href="/productos/vinos/malbecsanfelipe.html">
                    <h4>Vino San Felipe Malbec</h4>
                </a>
            </div>
            <div>
                <a href="/productos/espumantes/extrabrutsanfelipe.html">
                    <img src="/images/eDiapositiva2.JPG" alt="Espumante San Felipe Extra Brut">
                </a>
                <a href="/productos/espumantes/extrabrutsanfelipe.html">
                    <h4>Espumante San Felipe Extra Brut</h4>
                </a>
            </div>
        </div>
    </div>
    <!--Redes Sociales-->
    <section class="redes">
        <div class="footer-container">
            <div class="links">
                <h3>Seguinos en:</h3>
                <a href="https://www.facebook.com/Amphora-102135655627341" target="_blank" id="face">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/vinoamphora/" target="_blank" id="insta">
                    <i class="fab fa-instagram"></i>
                </a>
                <h3>Contáctenos por:</h3>
                <a href="https://api.whatsapp.com/send?phone=+5491159592071" target="_blank" id="whats">
                    <i class="fab fa-whatsapp-square"></i>
                </a>
                <a href="mailto:vinoamphora@gmail.com" target="_blank" id="mail">
                    <i class="fa fa-envelope"></i>
                </a>
                <h4>Prohibida su venta a menores de 18 años. Beba con moderación.</h4>
            </div>
        </div>
    </section>
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