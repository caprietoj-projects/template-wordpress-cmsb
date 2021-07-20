<?php
/*
 Template Name: padres_familia_template
 Template Post Type: page
*/
?>
<?php get_header( 'padres_familia' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
    <h1 style="margin-right: 242px;color: #E09396;font-size: 30px;font-family: gothic;"><?php echo get_theme_mod( 'page_padres_familia', __( 'PADRES DE FAMILIA', 'sanbartolome_theme' ) ); ?></h1>
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
                                <th><a href="<?php echo get_theme_mod( 'link_pastoral', 'pastoral_ppff.html' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_pastoral', esc_url( get_template_directory_uri() . '/assets/img/Pastoral.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_school_web', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_school_web', esc_url( get_template_directory_uri() . '/assets/img/School%20Web.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_circulares_comunicados', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_circulares_comunicados', esc_url( get_template_directory_uri() . '/assets/img/Circulares%20y%20Comunicados.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_pildoras', 'https://sites.google.com/view/pldorasinformativas/class-room' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_pildoras', esc_url( get_template_directory_uri() . '/assets/img/Pildoras%20Informativas.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo get_theme_mod( 'link_pse', 'https://www.avalpaycenter.com/wps/portal/portal-de-pagos/web/pagos-aval/resultado-busqueda/realizar-pago?idConv=00008332' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_pse', esc_url( get_template_directory_uri() . '/assets/img/Pagos%20en%20linea.png' ) ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_admisiones', 'admisiones_bachillerato.html' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_admisiones', esc_url( get_template_directory_uri() . '/assets/img/Admisiones-padres.png' ) ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_documentos', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_documentos', esc_url( get_template_directory_uri() . '/assets/img/documentos-ppff.png' ) ), 'medium' ) ?>"></a></td>
                                <td style="width: 150px;"><a href="<?php echo get_theme_mod( 'link_asomayor', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_asomayor', esc_url( get_template_directory_uri() . '/assets/img/AsomayorPadres.png' ) ), 'medium' ) ?>"></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-clean" style="background: #1c1364;padding: 0px;padding-top: 0px;">
    <footer style="background: rgb(28,19,100);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 col-xl-2 item">
                    <a href="http://sitio.acodesi.org/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ACODESI.png" style="margin-left: -15px;"></a>
                    <a href="https://jesuitas.co/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/JESUITAS%20COLOMBIA.png" style="margin-top: 17px;margin-left: -44px;"></a>
                </div>
                <div class="col-sm-4 col-md-3 col-xl-2 item">
                    <a href="https://www.asia-abba.org/2018/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo%20ASIA%20ABBA.png" style="margin-left: 26px;"></a>
                    <a href="https://www.flacsi.net/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/FLACSI.png" style="margin-top: 47px;margin-left: -18px;width: 191px;"></a>
                    <a href="https://www.flacsi.net/" target="_blank"></a>
                </div>
                <div class="col-sm-4 col-md-3 col-xl-2 item">
                    <a href="https://tomasruedavargas.org/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/TOMAS%20RUEDA%20VARGAS.png" style="margin-left: 28px;"></a>
                    <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/ASOMAYOR.png" style="margin-top: 30px;margin-left: 26px;"></a>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <ul>
                        <li style="margin-top: 10px;font-family: gothic;">
                            <a href="#" style="color: rgb(255,255,255);"></a>
                        </li>
                        <li></li>
                        <li style="margin-top: 11px;">
                            <a href="#"></a>
                            <a href="#"></a>
                        </li>
                    </ul>
                    <p style="font-family: gothic;"><strong><?php _e( 'Sede Bachillerato:', 'sanbartolome_theme' ); ?></strong><br><strong><?php _e( 'Dirección: Carrera 7 No. 9-96 Plaza de Bolívar.', 'sanbartolome_theme' ); ?></strong><br><strong><?php _e( 'PBX: 9191990', 'sanbartolome_theme' ); ?></strong></p>
                    <p style="font-family: gothic;"><strong><?php _e( 'Sede Preescolar y Primaria:', 'sanbartolome_theme' ); ?></strong><br><strong><?php _e( 'Dirección: Carrera 23 No. 28-55 Sur.', 'sanbartolome_theme' ); ?></strong><br><strong><?php _e( 'PBX: 9191990.', 'sanbartolome_theme' ); ?></strong><br><strong><?php _e( 'Bogotá D.C. - Colombia', 'sanbartolome_theme' ); ?></strong><br></p>
                </div>
                <div class="col-lg-3 item social" style="text-align: center;">
                    <a href="#" style="color: rgb(255,255,255);"><i class="icon ion-social-facebook"></i></a>
                    <a href="#"><i class="icon ion-social-twitter" style="color: rgb(255,255,255);"></i></a>
                    <a href="#" style="color: rgb(255,255,255);"><i class="icon ion-social-whatsapp-outline"></i></a>
                    <a href="#" style="color: rgb(255,255,255);"><i class="icon ion-social-youtube-outline"></i></a>
                    <p class="copyright" style="color: #ffffff;font-family: gothic;"><br><strong><?php _e( 'Consulte&nbsp;&nbsp;', 'sanbartolome_theme' ); ?></strong><a href="http://www.sanbartolome.edu.co/uploads/documentos/2018/politica-datos.pdf"><?php _e( 'aqui', 'sanbartolome_theme' ); ?></a><strong><?php _e( '&nbsp;nuestra Politica de Proteccion de Datos Personales', 'sanbartolome_theme' ); ?></strong><br><br><strong><?php _e( 'Diseño y Desarrollo: Departamento de Sistemas y Promoción Institucional Colegio Mayor de San Bartolomé © 2021', 'sanbartolome_theme' ); ?></strong><br><br></p>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Icontec%20Actualizado%20Footer.png" style="width: 107px;">
                </div>
            </div>
        </div>
    </footer>
</div>        

<?php get_footer( 'padres_familia' ); ?>