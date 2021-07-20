<?php
/*
 Template Name: page_template_default
 Template Post Type: page
*/
?>
<?php get_header( 'single' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<div class="container-fluid text-center text-sm-left text-md-left text-lg-right text-xl-right" style="margin-bottom: 20px;margin-top: 30px;">
    <h1 style="margin-right: 242px; color: #E09396; font-size: 30px; font-family: gothic; text-align: right; margin-top: 36px; padding-right: 140px;"><?php the_title(); ?></h1>
</div>
<div style="padding-top: 70px;">
    <?php the_content(); ?>
</div>
<div class="footer-clean" style="background: #1c1364;padding: 0px;padding-top: 0px;">
    <?php get_template_part( 'footer', 'Footer' ); ?>
</div>        

<?php get_footer( 'single' ); ?>