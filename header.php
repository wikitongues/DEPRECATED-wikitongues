<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Wikitongues</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- turn off caching - PRODUCTION ONLY -->
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />

        <link rel="apple-touch-icon" href="<?php bloginfo('url'); ?>/wp-content/themes/wikitongues/favicon.icns">
        <!-- figure out how to load this correctly in functions.php -->
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Roboto:300,900" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" href="<?php bloginfo('url'); ?>/wp-content/themes/wikitongues/favicon.ico">

        <script src="<?php bloginfo('url'); ?>/wp-content/themes/wikitongues/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="https://use.fontawesome.com/3cfe9e421f.js"></script>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- backwards compatibility TBD -->
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header id="header">
            <div class="inner-wrap">
                <!-- <div class="primary-nav"> -->
                    <div id="logo"><?php the_custom_logo(); ?></div>
                    <?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                <!-- </div> -->
                <?php //wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>
            </div>
        </header>
        <?php get_template_part('includes/component', 'banner'); ?>