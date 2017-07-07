<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title><?php if( is_404() ) echo '404 page'; else echo 'Paparazoo - '.get_the_title() ?></title>

            <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
        	<link rel="icon" sizes="16x16 32x32 64x64" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
        	<link rel="icon" type="image/png" sizes="196x196" href="<?php bloginfo('template_directory'); ?>/favicon-192.png">
        	<link rel="icon" type="image/png" sizes="160x160" href="<?php bloginfo('template_directory'); ?>/favicon-160.png">
        	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/favicon-96.png">
        	<link rel="icon" type="image/png" sizes="64x64" href="<?php bloginfo('template_directory'); ?>/favicon-64.png">
        	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon-32.png">
        	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon-16.png">
        	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/favicon-57.png">
        	<link rel="apple-touch-icon" sizes="114x114" href="/<?php bloginfo('template_directory'); ?>favicon-114.png">
        	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/favicon-72.png">
        	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/favicon-144.png">
        	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/favicon-60.png">
        	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/favicon-120.png">
        	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/favicon-76.png">
        	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/favicon-152.png">
        	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/favicon-180.png">
        	<meta name="msapplication-TileColor" content="#FFFFFF">
        	<meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/favicon-144.png">
        	<meta name="msapplication-config" content="<?php bloginfo('template_directory'); ?>/browserconfig.xml">

            <!-- Bootstrap -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

            <link href="https://fonts.googleapis.com/css?family=Lato|Oswald|Bahiana" rel="stylesheet">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

            <!-- Our stuff -->
            <link href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" rel="stylesheet">

            <?php wp_head(); ?>
        </head>
        <body>
