<?php
/*
 Template Name: pastoral_ppff_template
 Template Post Type: page
*/
?>
<?php get_header( 'pastoral_ppff' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
    <h1 style="margin-right: 242px;color: #E09396;font-size: 30px;font-family: gothic;"><?php echo get_theme_mod( 'padres_pastoral', __( 'PADRES DE FAMILIA PASTORAL', 'sanbartolome_theme' ) ); ?></h1>
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
                                <th><a href="<?php echo get_theme_mod( 'link_esprit_acom', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_espirit_acom', esc_url( get_template_directory_uri() . '/assets/img/Acompanamiento%20Espiritual.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_past_sacram', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_past_sacram', esc_url( get_template_directory_uri() . '/assets/img/Pastoral%20Sacramental.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_circ', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_circ', esc_url( get_template_directory_uri() . '/assets/img/Circulares.png' ) ), 'medium' ) ?>"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_saturday', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_saturday', esc_url( get_template_directory_uri() . '/assets/img/Sabados%20de%20Espiritualidad.png' ) ), 'medium' ) ?>"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo get_theme_mod( 'link_81', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_81' ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_82', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_82' ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_83', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_83' ), 'medium' ) ?>"></a></td>
                                <td style="width: 150px;"><a href="<?php echo get_theme_mod( 'link_84', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_84' ), 'medium' ) ?>"></a></td>
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

<?php get_footer( 'pastoral_ppff' ); ?>