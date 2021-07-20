<?php
/*
 Template Name: items_politica_template
 Template Post Type: page
*/
?>
<?php get_header( 'items_politica' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
    <h1 style="margin-right: 242px;color: #E09396;font-size: 30px;font-family: gothic;"><?php echo get_theme_mod( 'politica', __( 'RESPONSABILIDAD SOCIAL POLÍTICAS', 'sanbartolome_theme' ) ); ?></h1>
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
                                <th><a href="<?php echo get_theme_mod( 'link_nuestrahistoria', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_nuestrahistoria', esc_url( get_template_directory_uri() . '/assets/img/Nuestra%20Historia.png' ) ), 'medium' ) ?>"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_territortio', 'items_donaciones.html' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_territorio', esc_url( get_template_directory_uri() . '/assets/img/Nuestro%20Territorio.png' ) ), 'medium' ) ?>"></a></th>
                                <th><a href="#"><img data-bss-hover-animate="tada" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_60', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_60' ), 'medium' ) ?>"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo get_theme_mod( 'link_61', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_61' ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_62', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_62' ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_63', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_63' ), 'medium' ) ?>"></a></td>
                                <td style="width: 150px;"><a href="<?php echo get_theme_mod( 'link_64', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_64' ), 'medium' ) ?>"></a></td>
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

<?php get_footer( 'items_politica' ); ?>