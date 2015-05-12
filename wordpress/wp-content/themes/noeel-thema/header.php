<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('title') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>\style.css" type="text/css" />
</head>

<body>

    
    
        <header>
            <h1><?php bloginfo('title') ?></h1>
            <nav>
        <?php wp_nav_menu( array( 'theme_location'=>'primary' ) ); ?>
         <?php wp_nav_menu() ?>

    </nav>

        </header>
        <!-- .header -->
