<?php
/*
 Template Name: academica_template
 Template Post Type: page
*/
?>
<?php get_header( 'academica' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
    <h1 style="margin-right: 242px;color: #E09396;font-size: 30px;font-family: gothic;"><?php echo get_theme_mod( 'academica', __( 'ACADÉMICA', 'sanbartolome_theme' ) ); ?></h1>
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
                                <th><a href="<?php echo get_theme_mod( 'link_decalogos', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'imagenen_decalogos', esc_url( get_template_directory_uri() . '/assets/img/Study%20Now.png' ) ), 'medium' ) ?>"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_progrentis', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'imagen_progrentis', esc_url( get_template_directory_uri() . '/assets/img/Progrentis.png' ) ), 'medium' ) ?>"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_sch', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'imagen_school', esc_url( get_template_directory_uri() . '/assets/img/school%20estudiantes.png' ) ), 'medium' ) ?>"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_meraki', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'imagen_meraki', esc_url( get_template_directory_uri() . '/assets/img/Revista%20Meraki.png' ) ), 'medium' ) ?>"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo get_theme_mod( 'link_trendi', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'imagen_trendi', esc_url( get_template_directory_uri() . '/assets/img/trendi.png' ) ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_proyectos', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'imagen_proyectos', esc_url( get_template_directory_uri() . '/assets/img/Proyectos%20de%20Investigaciòn.png' ) ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_periodico', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'imagen_periodico', esc_url( get_template_directory_uri() . '/assets/img/Periodico%20El%20Bartolino.png' ) ), 'medium' ) ?>"></a></td>
                                <td style="width: 150px;"><a href="<?php echo get_theme_mod( 'link_modelo' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'imagen_modelo', esc_url( get_template_directory_uri() . '/assets/img/Modelo%20Educativo.png' ) ), 'medium' ) ?>"></a></td>
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

<?php get_footer( 'academica' ); ?>