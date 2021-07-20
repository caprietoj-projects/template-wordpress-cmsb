<?php
/*
 Template Name: estudiantes_template
 Template Post Type: page
*/
?>
<?php get_header( 'estudiantes' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
    <h1 style="margin-right: 242px;color: #E09396;font-size: 30px;font-family: gothic;"><?php echo get_theme_mod( 'title_estudiantes', __( 'ESTUDIANTES', 'sanbartolome_theme' ) ); ?></h1>
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
                                <th><a href="<?php echo get_theme_mod( 'link_blogs', 'bibliobanco.html' ); ?>" style="color: rgba(0,123,255,0);"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_blogs', esc_url( get_template_directory_uri() . '/assets/img/Blogs.png' ) ), 'medium' ) ?>" style="width: 150px;color: rgba(0,123,255,0);"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_school_web_estudiantes_new', 'http://colegiosanbartolome.infinite.com.co/schoolweb/ingreso.aspx' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_school_web_estudiantes_new', esc_url( get_template_directory_uri() . '/assets/img/School%20Web.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_bibliobank', 'bibliobanco.html' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_bibli', esc_url( get_template_directory_uri() . '/assets/img/Bibliobanco.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_past', 'pastoral.html' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_past', esc_url( get_template_directory_uri() . '/assets/img/Pastoral.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo get_theme_mod( 'link_bienest', 'bienestar.html' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_bien', esc_url( get_template_directory_uri() . '/assets/img/Bienestar%20Estudiantil.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_prot', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_prot', esc_url( get_template_directory_uri() . '/assets/img/Protocolos%20de%20Bioseguridad.png' ) ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_acac', 'academica.html' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_aca', esc_url( get_template_directory_uri() . '/assets/img/Académica.png' ) ), 'medium' ) ?>"></a></td>
                                <td style="width: 150px;"><a href="<?php echo get_theme_mod( 'link_sae', 'sae.html' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_sae', esc_url( get_template_directory_uri() . '/assets/img/SAE.png' ) ), 'medium' ) ?>"></a></td>
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

<?php get_footer( 'estudiantes' ); ?>