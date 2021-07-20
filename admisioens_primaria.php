<?php
/*
 Template Name: admisiones_primaria_template
 Template Post Type: page
*/
?>
<?php get_header( 'admisioens_primaria' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <nav class="navbar navbar-light navbar-expand-md text-sm-center text-md-center navigation-clean">
        <div class="container">
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only"><?php _e( 'Toggle navigation', 'sanbartolome_theme' ); ?></span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1" style="font-family: gothic;color: rgb(27,20,100);">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link border-left" href="admisiones.html" style="color: rgb(27,20,100);"><?php _e( 'Admisiones', 'sanbartolome_theme' ); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#" style="color: rgb(27,20,100);/*border-right: 1px;*/"><?php _e( 'Recorrido Histórico', 'sanbartolome_theme' ); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-left" href="responsabilidad_social.html" style="color: rgb(27,20,100);"><?php _e( 'Responsabilidad Social', 'sanbartolome_theme' ); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border-left" href="contactanos.html" style="color: rgb(27,20,100);"><?php _e( 'Contacto', 'sanbartolome_theme' ); ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
    <h1 style="margin-right: 242px;color: #E09396;font-size: 30px;font-family: gothic;"><?php echo get_theme_mod( 'admisiones_primaria', __( 'ADMISIONES PRIMARIA', 'sanbartolome_theme' ) ); ?></h1>
</div>
<div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 text-sm-center text-md-center">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><a href="index.html"><i class="fa fa-home" data-toggle="tooltip" data-bss-tooltip="" data-bss-hover-animate="rubberBand" style="font-size: 80px;color: rgb(212,104,108);" title="Inicio"></i></a></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="padres_de_familia.html"><img data-bss-hover-animate="rubberBand" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/padres%20de%20familia%20azul.png"></a></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="estudiantes.html"><img data-bss-hover-animate="rubberBand" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/New%20Estudiantes.png" style="width: 57px;"></a></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="colegio.html"><img data-bss-hover-animate="rubberBand" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Recurso%2094.png"></a></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="exalumnos.html"><img data-bss-hover-animate="rubberBand" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/exalumnos.png"></a></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="profes_administrativos.html"><img data-bss-hover-animate="rubberBand" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/profes%20rojo.png"></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><a href="<?php echo get_theme_mod( 'link_documentos_requeridos_primaria', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_documentos_requeridos_primaria', esc_url( get_template_directory_uri() . '/assets/img/Documentos%20requeridos.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_paso_primaria', '#' ); ?>"><img data-bss-hover-animate="tada" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_paso_primaria', esc_url( get_template_directory_uri() . '/assets/img/Paso%20a%20paso%20proceso.png' ) ), 'medium' ) ?>" style="width: 150px;"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_16' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_16' ), 'medium' ) ?>"></a></th>
                                <th><a href="<?php echo get_theme_mod( 'link_17', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_17' ), 'medium' ) ?>"></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="<?php echo get_theme_mod( 'link_18', 'pagos_admisiones.html' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_18' ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_19', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_19' ), 'medium' ) ?>"></a></td>
                                <td><a href="<?php echo get_theme_mod( 'link_20', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_20' ), 'medium' ) ?>"></a></td>
                                <td style="width: 150px;"><a href="<?php echo get_theme_mod( 'link_21', '#' ); ?>"><img data-bss-hover-animate="tada" style="width: 150px;" src="<?php echo PG_Image::getUrl( get_theme_mod( 'id_21' ), 'medium' ) ?>"></a></td>
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

<?php get_footer( 'admisioens_primaria' ); ?>