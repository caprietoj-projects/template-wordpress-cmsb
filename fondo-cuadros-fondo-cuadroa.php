<body style="background: url("<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/fondoiconos.png");background-size: cover;background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'fondo_cuadros' ), 'full' ).')' ?>;" class="<?php echo implode(' ', get_body_class()); ?>">
    <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>____WP_END_HEADER____
    <?php get_template_part( 'redes_sociales', 'Redes' ); ?>
    <?php get_template_part( 'header_logo', 'Header logo' ); ?>
    <div class="container" style="padding-top: 29px;">
        <?php get_template_part( 'menu', 'menu' ); ?>
    </div>
    <div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
        <h1 style="margin-right: 242px;color: #E09396;font-size: 30px;font-family: gothic;"><?php echo get_theme_mod( 'admisiones', __( 'ADMISIONES', 'sanbartolome_theme' ) ); ?></h1>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <?php get_template_part( 'actores', 'actores' ); ?>
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><a href="<?php echo get_theme_mod( 'link_contacto', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'actores_contactos', esc_url( get_template_directory_uri() . '/assets/img/Contactenos-Wattsapp.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                    <th><a href="<?php echo get_theme_mod( 'link_costos', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'actores_costos', esc_url( get_template_directory_uri() . '/assets/img/Costos%20educativos.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                    <th><a href="<?php echo get_theme_mod( 'link_preguntas', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'actores_preguntas', esc_url( get_template_directory_uri() . '/assets/img/Preguntas%20frecuentes.png' ) ), 'medium' ) ?>"></a></th>
                                    <th><a href="<?php echo get_theme_mod( 'link_pago', 'pagos_admisiones.html' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'actores_pagos', esc_url( get_template_directory_uri() . '/assets/img/Pagos%20admisiones.png' ) ), 'medium' ) ?>"></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="<?php echo get_theme_mod( 'link_preescolar', 'admisiones_preescolar.html' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'actores_preescolar', esc_url( get_template_directory_uri() . '/assets/img/proceso%20de%20admisiones%20preesoclar.png' ) ), 'medium' ) ?>"></a></td>
                                    <td><a href="<?php echo get_theme_mod( 'link_primaria', 'admisiones_primaria.html' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'actores_primaria', esc_url( get_template_directory_uri() . '/assets/img/proceso%20de%20admisiones%20primaria.png' ) ), 'medium' ) ?>"></a></td>
                                    <td><a href="<?php echo get_theme_mod( 'link_bachillerato', 'admisiones_bachillerato.html' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'actores_bachillerato', esc_url( get_template_directory_uri() . '/assets/img/proceso%20de%20admisiones%20bachillerato.png' ) ), 'medium' ) ?>"></a></td>
                                    <td style="width: 150px;"><a href="<?php echo get_theme_mod( 'link_28', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_28' ), 'medium' ) ?>"></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-clean" style="background: #1c1364;padding: 0px;padding-top: 0px;">
        <?php get_template_part( 'footer', 'Footer' ); ?>
    </div>    ____WP_START_FOOTER____
    <?php wp_footer(); ?>
</body>