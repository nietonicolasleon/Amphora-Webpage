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
    <title>Vino Rutini Malbec Estuche</title>
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
    <h2 class="titular">Vino Rutini Malbec Estuche</h2>
    <div class="producto">
        <div class="imagen">
            <img src="../images/vDiapositiva10.JPG" alt="Vino Rutini Malbec Estuche">
        </div>
        <div>
            <p class="desc">
                Variedades: 100% Malbec.<br>
                <br>
                Crianza: Se conservó durante 12 meses en barricas 20% de roble francés nuevo y 80% de segundo uso.<br>
                <br>
                Enólogo: Lic. Mariano Di Paola<br>
                <br>
                Comentarios del enólogo:<br>
                Color rojo violáceo muy intenso. En nariz presenta aroma a frutas rojas y especias, con notas de vainilla y tabaco que le confiere el roble nuevo.
                En la boca es un vino de gran cuerpo y concentración, algo frutado con taninos bien dulces.<br>
                <br>
                Contenido: 750 ml.<br>
                <br>
                Descargá la lista de precios:<br>
                <a href="../downloads/Amphora Lista de Precios Vinos Feb 2022.pdf" class="boton" download="AmphoraLPVinosFeb2022.pdf">Descargar</a>
            </p>
            <h3 class="titular" id="titucontacto">Pedilo mandando un mensaje a través de:</h3>
            <div class="mcontacto">
                <div class="item1">
                    <a href="https://www.facebook.com/Amphora-102135655627341" target="_blank" id="facebig">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
                <div class="item2">
                    <a href="https://www.instagram.com/vinoamphora/" target="_blank" id="instabig">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="item3">
                    <a href="https://api.whatsapp.com/send?phone=+5491159592071" target="_blank" id="whatsbig">
                        <i class="fab fa-whatsapp-square"></i>
                    </a>
                </div>
                <div class="item4">
                    <a href="mailto:vinoamphora@gmail.com" target="_blank" id="mailbig">
                        <i class="fa fa-envelope"></i>
                    </a>
                </div>
            </div>
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
</body>
</html>