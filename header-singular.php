<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body style="background: url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/fondoiconos.png");background-size: cover;background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'fondo_circulares' ), 'large' ).')' ?>; class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>