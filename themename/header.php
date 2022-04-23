<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta property="og:type" content="website">
        <title>
            <?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?>
        </title>
        <meta name="description" content="***">
        <meta name="keywords" content="***">
        <?php wp_head(); ?>

    </head>
    <body>

    <?php get_template_part("partials/section", "header"); ?>