<?php
/*
 Template Name: administracion_template
 Template Post Type: page
*/
?>
<?php get_header( 'administracion' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
    <h1 style="margin-right: 242px;color: #E09396;font-size: 30px;font-family: gothic;"><?php echo get_theme_mod( 'administracion', __( 'ADMINISTRACIÓN', 'sanbartolome_theme' ) ); ?></h1>
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
                                <th><a href="<?php echo get_theme_mod( 'link_alquiler', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'imagen_alquiler', esc_url( get_template_directory_uri() . '/assets/img/Alquiler%20de%20Espacio.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_recorrido', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'imagen_recorrido', esc_url( get_template_directory_uri() . '/assets/img/Recorridos%20Virtuales.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_informe', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'imagen_informe', esc_url( get_template_directory_uri() . '/assets/img/Informe%20de%20Gestion.png' ) ), 'medium' ) ?>"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_tienda', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'imagen_tienda', esc_url( get_template_directory_uri() . '/assets/img/Tienda%20Bartolina.png' ) ), 'medium' ) ?>"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo get_theme_mod( 'link_1', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_1' ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_2', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_2' ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_3', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_3' ), 'medium' ) ?>"></a></td>
                                <td style="width: 150px;"><a href="<?php echo get_theme_mod( 'link_4', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_4' ), 'medium' ) ?>"></a></td>
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

<?php get_footer( 'administracion' ); ?>