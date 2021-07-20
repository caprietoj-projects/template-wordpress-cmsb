<?php
/*
 Template Name: colegio_template
 Template Post Type: page
*/
?>
<?php get_header( 'colegio' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
    <h1 style="margin-right: 242px;color: #E09396;font-size: 30px;font-family: gothic;"><?php echo get_theme_mod( 'id_colegio', __( 'COLEGIO', 'sanbartolome_theme' ) ); ?></h1>
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
                                <th><a href="<?php echo get_theme_mod( 'link_alquiler', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_alquiler', esc_url( get_template_directory_uri() . '/assets/img/Alquiler%20de%20Espacio.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_recorridos', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_recorridos', esc_url( get_template_directory_uri() . '/assets/img/Recorridos%20Virtuales.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_informe', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_informes_gestion', esc_url( get_template_directory_uri() . '/assets/img/Informe%20de%20Gestion.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_tienda', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_tienda_bart', esc_url( get_template_directory_uri() . '/assets/img/Tienda%20Bartolina.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo get_theme_mod( 'link_nuestros_equi', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_nuestros_equipos', esc_url( get_template_directory_uri() . '/assets/img/Nuestros%20Equipos.png' ) ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_34', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_34' ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_35', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_35' ), 'medium' ) ?>"></a></td>
                                <td style="width: 150px;"><a href="<?php echo get_theme_mod( 'link_36', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_36' ), 'medium' ) ?>"></a></td>
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

<?php get_footer( 'colegio' ); ?>