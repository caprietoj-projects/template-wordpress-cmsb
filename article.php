<?php
/*
 Template Name: article_template
 Template Post Type: post
*/
?>
<?php get_header( 'article' ); ?>

<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container" style="padding-top: 29px;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<h1 style="margin-right: 242px; color: #E09396; font-size: 30px; font-family: gothic; text-align: right; margin-top: 36px; padding-right: 140px;"><?php the_title(); ?></h1>
<div style="padding-top: 70px;">
    <?php the_content(); ?>
</div>
<div class="footer-clean" style="background: #1c1364;padding: 0px;padding-top: 0px;">
    <?php get_template_part( 'footer', 'Footer' ); ?>
</div>        

<?php get_footer( 'article' ); ?>