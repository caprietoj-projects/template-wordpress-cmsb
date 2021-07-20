<?php
/*
 Template Name: responsabilidad_social_template
 Template Post Type: page
*/
?>
<?php get_header( 'responsabilidad_social' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
    <h1 style="margin-right: 242px;color: #E09396;font-size: 30px;font-family: gothic;"><?php echo get_theme_mod( 'responsabilidad_page', __( 'RESPONSABILIDAD SOCIAL', 'sanbartolome_theme' ) ); ?></h1>
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
                                <th><a href="<?php echo get_theme_mod( 'link_whatsapp_responsabilidad', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_whatsapp_responsabilidad', esc_url( get_template_directory_uri() . '/assets/img/Contactenos-Wattsapp.png' ) ), 'medium' ) ?>"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_donaciones', 'items_donaciones.html' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_donaciones', esc_url( get_template_directory_uri() . '/assets/img/Donaciones.png' ) ), 'medium' ) ?>"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_politica', 'items_politica.html' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_politica', esc_url( get_template_directory_uri() . '/assets/img/Politica.png' ) ), 'medium' ) ?>"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_project', 'items_proyectos_responsabilidad_social.html' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_project', esc_url( get_template_directory_uri() . '/assets/img/Proyectos.png' ) ), 'medium' ) ?>"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo get_theme_mod( 'link_98', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_98' ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_99', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_99' ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_100', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_100' ), 'medium' ) ?>"></a></td>
                                <td style="width: 150px;"><a href="<?php echo get_theme_mod( 'link_101', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_101' ), 'medium' ) ?>"></a></td>
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

<?php get_footer( 'responsabilidad_social' ); ?>