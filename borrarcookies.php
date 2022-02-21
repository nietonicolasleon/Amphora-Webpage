<?php
    if (isset($_COOKIE['cookieVisitas'])) {
        unset($_COOKIE['cookieVisitas']);
        setcookie('cookieVisitas', '', time() - 3600, '/');
    }
    header("location: https://www.google.com/");
    die();
?>