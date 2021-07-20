<?php
/*
 Template Name: pastoral_exalumnos_template
 Template Post Type: page
*/
?>
<?php get_header( 'pastoral_exalumnos' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
    <h1 style="margin-right: 242px;color: #E09396;font-size: 30px;font-family: gothic;"><?php echo get_theme_mod( 'pastoral_exalumnos', __( 'EXALUMNOS PASTORAL', 'sanbartolome_theme' ) ); ?></h1>
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
                                <th><a href="<?php echo get_theme_mod( 'link_acompañamiento_espiritual', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_acompañamientos_espiritual', esc_url( get_template_directory_uri() . '/assets/img/Acompanamiento%20Espiritual.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_pastoral_sacram', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_ Pastoral Sacram', esc_url( get_template_directory_uri() . '/assets/img/Pastoral%20Sacramental.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_formacion_liderazgo', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_formacion_liderazgo', esc_url( get_template_directory_uri() . '/assets/img/Formacion%20en%20Liderazgo.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_sabados_espiritualidad', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_espiritualidad', esc_url( get_template_directory_uri() . '/assets/img/Sabados%20de%20Espiritualidad.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo get_theme_mod( 'link_78', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_78' ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_79', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_79' ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_80', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_80' ), 'medium' ) ?>"></a></td>
                                <td style="width: 150px;"><a href="<?php echo get_theme_mod( 'link_81', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_81' ), 'medium' ) ?>"></a></td>
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

<?php get_footer( 'pastoral_exalumnos' ); ?>