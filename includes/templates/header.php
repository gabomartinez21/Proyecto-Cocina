<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Proyecto cocina</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shorcut icon" href="cooks-logo.ico">
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/lightbox.css">
        <link rel="stylesheet" href="css/colorbox.css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Patua+One|Ubuntu+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton|Krona+One|PT+Serif" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
        <?php
            $archivo = basename($_SERVER['PHP_SELF']);
            $pagina = str_replace(".php", "", $archivo);

        ?>
    </head>
    <body class="<?php echo $pagina ?>">
       
        <header class="cabecera clearfix">
            <div>
                <img src="img/cooks-logo.png" alt="Cooks Logo">
            </div>
            
        </header>
        <div class="barra-nav clearfix">
            <div class="menu-movil">
                    <span></span>
                    <span></span>
                    <span></span>
            </div>
            <nav class="menu-principal clearfix">
                <a href="index.php">Inicio</a>
                <a href="recetario.php">Recetario</a>
                <a href="curso.php">Cursos</a>
                <a href="chefs.php">Chefs</a>
                <a href="blog.php">Blog</a>
            </nav>
        </div>
        <!-- fin .barra-nav -->