<?php
/*
 Template Name: bibliobanco_template
 Template Post Type: page
*/
?>
<?php get_header( 'bibliobanco' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
    <h1 style="margin-right: 242px;color: #E09396;font-size: 30px;font-family: gothic;"><?php echo get_theme_mod( 'bibliobanco', __( 'BIBLIOBANCO', 'sanbartolome_theme' ) ); ?></h1>
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
                                <th><a href="<?php echo get_theme_mod( 'link_bibliolaboratorio', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_bibliolaboratorio', esc_url( get_template_directory_uri() . '/assets/img/Bibliolaboratorio.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_cabor', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_cabor', esc_url( get_template_directory_uri() . '/assets/img/Cabor%20+%20Digital.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link-progrentis', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_progren', esc_url( get_template_directory_uri() . '/assets/img/Progrentis.png' ) ), 'medium' ) ?>"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_29', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_29' ), 'medium' ) ?>"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo get_theme_mod( 'link_30', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_30' ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_31', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_31' ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_32', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_32' ), 'medium' ) ?>"></a></td>
                                <td style="width: 150px;"><a href="<?php echo get_theme_mod( 'link_33', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_33' ), 'medium' ) ?>"></a></td>
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

<?php get_footer( 'bibliobanco' ); ?>