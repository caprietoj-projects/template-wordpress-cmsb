<?php
/*
 Template Name: informacionppff_template
 Template Post Type: page
*/
?>
<?php get_header( 'informacionppff' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
    <h1 style="margin-right: 242px;color: #E09396;font-size: 30px;font-family: gothic;"><?php echo get_theme_mod( 'informacion', __( 'INFORMACIÓN PADRES DE FAMILIA&nbsp;', 'sanbartolome_theme' ) ); ?></h1>
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
                                <th><a href="<?php echo get_theme_mod( 'link_admisions', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_admisions', esc_url( get_template_directory_uri() . '/assets/img/Admisiones-padres.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_circulars', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_comunicados', esc_url( get_template_directory_uri() . '/assets/img/Circulares%20y%20Comunicados.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_schoolweb', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_schoolweb', esc_url( get_template_directory_uri() . '/assets/img/School%20Web.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_biblioteca', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_biblioteca', esc_url( get_template_directory_uri() . '/assets/img/biblioteca.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo get_theme_mod( 'link_pse', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_PSE', esc_url( get_template_directory_uri() . '/assets/img/Pagos%20en%20linea.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_pild', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_pild', esc_url( get_template_directory_uri() . '/assets/img/Pildoras%20Informativas.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_tardes', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_tardes', esc_url( get_template_directory_uri() . '/assets/img/tardes%20bartolinas%20estudiantes.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></td>
                                <td style="width: 150px;"><a href="<?php echo get_theme_mod( 'link_download', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_download', esc_url( get_template_directory_uri() . '/assets/img/descargar%20recibos.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></td>
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
</div>        

<?php get_footer( 'informacionppff' ); ?>