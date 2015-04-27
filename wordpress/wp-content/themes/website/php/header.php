<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <title>PuntOog</title>

    <meta name="description" content="beschrijfing" />
    <meta name="keywords" content="Noeel, Moeskops, eye care foundation, eye, care, foundation, goedendoel, facebook, doneren" />
    <meta name="author" content="Noeël Moeskops" />

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/main.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/mobiel.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/sheet.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/changes.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style/wp.css" type="text/css" />
    <link rel="icon" href="media/icon.png" />

    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-2.0.2.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/javascript.js"></script>

    <noscript>
        <div id="noscript">Deze site werkt het best met Javascript aan!</div>
    </noscript>

</head>

<body>
    <header>

        <a href="index.php">
            <img src="<?php bloginfo('template_directory'); ?>/media/svg/logoOogpuntTrans.svg" alt="Eye care foundation">
        </a>
        <nav>
            <a href="../">Home</a>
            <div>
                <a class="zoek" onclick="zoeken()">Zoeken</a>
                <form class="fZoek" action="dit is een zoek">
                    <input type="text" placeholder="zoeken">
                    <input type="submit" value="Zoeken!">
                </form>
            </div>
            <a href="<?php bloginfo('template_directory'); ?>/aanmelden">Aanmelden</a>
            <a href="<?php bloginfo('template_directory'); ?>/profiel">Profiel</a>
        </nav>
    </header>

    <main>

        <nav id="mainNav_mobiel">
            <img src="media/svg/menu.svg">
            <section>
                <a href="index.php">Home</a>
                
                <div>
                    <a class="zoek" onclick="zoeken()">Zoeken</a>
                    
                    <form class="fZoek" action="dit is een zoek">           
                        <input type="text" placeholder="zoek dan!">
                    </form>
                    
                </div>
                
                <a href="lijst.php">Alle topics</a>
                <a href="#">Maak topic</a>
                <section>
                    <a href="aanmelden.php">Aanmelden</a>
                    <a href="profiel.php">Profiel</a>
                </section>
            </section>
        </nav>

        <!--
        <nav id="mainNav_normaal">
            <a href="#">Like</a>
            <a href="#">Deel</a>
            <a href="#">Doneer</a>
        </nav>
-->


        <section>