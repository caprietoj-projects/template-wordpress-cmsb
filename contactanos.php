<?php
/*
 Template Name: contact_theme
 Template Post Type: page
*/
?>
<?php get_header( 'contactanos' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<section class="contact-clean" style="background: url("<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Fondo%20iconos%20Opacidad%2060.png") top no-repeat;">
    <form class="text-sm-center text-md-left text-lg-left text-xl-left" style="border-bottom-style: none;" data-bss-recipient="9dd8454281b1a4d268bf15bef53a2f53" data-bss-subject="Colegio Mayor San Bartolome">
        <h2 class="text-center"><?php _e( 'Contáctanos', 'sanbartolome_theme' ); ?></h2>
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Nombre:" style="font-family: gothic;border-color: rgb(80, 94, 108);border-top-color: rgb(80,;border-right-color: 94,;border-bottom-color: 108);border-left-color: 94,;" required="">
        </div>
        <div class="form-group">
            <input class="form-control is-invalid" type="email" name="email" placeholder="Email:" style="font-family: gothic;border-color: rgb(80,94,108);background: rgba(255,255,255,0);" required="">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" placeholder="Asunto.." rows="14" style="font-family: gothic;border-color: rgb(80,94,108);" required=""></textarea>
        </div>
        <div class="form-group" style="text-align: center;">
            <div>
                <!-- google maps -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.9828632734757!2d-74.07797278529566!3d4.597092443827421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99a7e1050199%3A0xddd4fdc0e3feb28!2sColegio%20Mayor%20de%20San%20Bartolom%C3%A9!5e0!3m2!1ses!2sco!4v1618626978576!5m2!1ses!2sco" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <!--fin google maps -->
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">
                <?php _e( 'ENVIAR&nbsp;', 'sanbartolome_theme' ); ?>
            </button>
        </div>
    </form>
</section>
<div class="footer-clean" style="background: #1c1364;padding: 0px;padding-top: 0px;">
    <?php get_template_part( 'footer', 'Footer' ); ?>
</div>        

<?php get_footer( 'contactanos' ); ?>