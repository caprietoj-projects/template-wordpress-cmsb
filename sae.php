<?php
/*
 Template Name: sae_template
 Template Post Type: page
*/
?>
<?php get_header( 'sae' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
    <h1 style="margin-right: 242px;color: #E09396;font-size: 30px;font-family: gothic;"><?php echo get_theme_mod( 'page_sae', __( 'SAE', 'sanbartolome_theme' ) ); ?></h1>
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
                                <th><a href="<?php echo get_theme_mod( 'link_106', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_106', esc_url( get_template_directory_uri() . '/assets/img/documentos-ppff.png' ) ), 'medium' ) ?>"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_107', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_107', esc_url( get_template_directory_uri() . '/assets/img/school%20estudiantes.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_108', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_108', esc_url( get_template_directory_uri() . '/assets/img/guias%20de%20trabajo.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_109', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_109', esc_url( get_template_directory_uri() . '/assets/img/biblioteca.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo get_theme_mod( 'link_110', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_110', esc_url( get_template_directory_uri() . '/assets/img/Filarmonica.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_111', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_111', esc_url( get_template_directory_uri() . '/assets/img/acompanamiento.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_112', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_112', esc_url( get_template_directory_uri() . '/assets/img/tardes%20bartolinas%20estudiantes.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></td>
                                <td style="width: 150px;"><a href="<?php echo get_theme_mod( 'link_113', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_113', esc_url( get_template_directory_uri() . '/assets/img/descargar%20recibos.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></td>
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

<?php get_footer( 'sae' ); ?>