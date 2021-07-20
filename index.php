<?php get_header(); ?>

<!--Ventana Modal -->
<input type="checkbox" id="cerrar">
<?php if ( get_theme_mod( 'boton_cierre' ) ) : ?>
    <label for="cerrar" id="btn-cerrar" style="text-align: center;">
        <?php _e( 'X', 'sanbartolome_theme' ); ?>
    </label>
<?php endif; ?>
<?php if ( get_theme_mod( 'video_modal' ) ) : ?>
    <div class="modal">
        <?php echo get_theme_mod( 'link_video_intro' ); ?>
    </div>
<?php endif; ?>
<!-- Fin Ventana Modal -->
<?php get_template_part( 'redes_sociales', 'Redes' ); ?>
<?php get_template_part( 'header_logo', 'Header logo' ); ?>
<div class="container-fluid text-right" style="padding-top: 29px;text-align: right;">
    <?php get_template_part( 'menu', 'menu' ); ?>
</div>
<div class="container-fluid" style="margin-top: 6px;">
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="<?php echo get_theme_mod( 'url_img_1' ); ?>" target="_blank"/>
                <img class="img-fluid w-100 d-block" src="<?php echo PG_Image::getUrl( get_theme_mod( 'img_1', esc_url( get_template_directory_uri() . '/assets/img/admisiones%202021.jpg' ) ), 'large' ) ?>" alt="Slide Image">
            </div>
            <div class="carousel-item">
                <a href="<?php echo get_theme_mod( 'url_img_2' ); ?>" target="_blank"/>
                <img class="img-fluid w-100 d-block" src="<?php echo PG_Image::getUrl( get_theme_mod( 'img_2', esc_url( get_template_directory_uri() . '/assets/img/banner1.jpg' ) ), 'large' ) ?>" alt="Slide Image" style="width: 100%;height: auto;">
            </div>
            <div class="carousel-item">
                <a href="<?php echo get_theme_mod( 'url_img_3' ); ?>" target="_blank"/>
                <img class="img-fluid w-100 d-block" src="<?php echo PG_Image::getUrl( get_theme_mod( 'img_3', esc_url( get_template_directory_uri() . '/assets/img/banner2.jpg' ) ), 'large' ) ?>" alt="Slide Image">
            </div>
            <div class="carousel-item">
                <a href="<?php echo get_theme_mod( 'url_img_4' ); ?>" target="_blank"/>
                <img class="img-fluid w-100 d-block" src="<?php echo PG_Image::getUrl( get_theme_mod( 'img_4', esc_url( get_template_directory_uri() . '/assets/img/banner3.jpg' ) ), 'large' ) ?>" alt="Slide Image">
            </div>
            <div class="carousel-item">
                <a href="<?php echo get_theme_mod( 'url_img_5' ); ?>" target="_blank"/>
                <img class="img-fluid w-100 d-block" src="<?php echo PG_Image::getUrl( get_theme_mod( 'img_5', esc_url( get_template_directory_uri() . '/assets/img/banner4.jpg' ) ), 'large' ) ?>" alt="Slide Image">
            </div>
            <div class="carousel-item">
                <a href="<?php echo get_theme_mod( 'url_img_6' ); ?>" target="_blank"/>
                <img class="img-fluid w-100 d-block" src="<?php echo PG_Image::getUrl( get_theme_mod( 'img_6', esc_url( get_template_directory_uri() . '/assets/img/banner5.jpg' ) ), 'large' ) ?>" alt="Slide Image">
            </div>
            <div class="carousel-item">
                <a href="<?php echo get_theme_mod( 'url_img_7' ); ?>" target="_blank"/>
                <img class="img-fluid w-100 d-block" src="<?php echo PG_Image::getUrl( get_theme_mod( 'img_7', esc_url( get_template_directory_uri() . '/assets/img/banner6.jpg' ) ), 'large' ) ?>" alt="Slide Image">
            </div>
            <div class="carousel-item">
                <a href="<?php echo get_theme_mod( 'url_img_8' ); ?>" target="_blank"/>
                <img class="img-fluid w-100 d-block" src="<?php echo PG_Image::getUrl( get_theme_mod( 'img_8', esc_url( get_template_directory_uri() . '/assets/img/banner7.jpg' ) ), 'large' ) ?>" alt="Slide Image">
            </div>
        </div>
        <div>
            <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev" style="background-color: rgba(255,255,255,0);color: rgba(255,255,255,0);"><span class="carousel-control-prev-icon"></span><span class="sr-only"><?php _e( 'Previous', 'sanbartolome_theme' ); ?></span></a>
            <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next" style="background-color: rgba(255,255,255,0);color: rgba(255,255,255,0);"><span class="carousel-control-next-icon"></span><span class="sr-only"><?php _e( 'Next', 'sanbartolome_theme' ); ?></span></a>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            <li data-target="#carousel-1" data-slide-to="3"></li>
            <li data-target="#carousel-1" data-slide-to="4"></li>
            <li data-target="#carousel-1" data-slide-to="5"></li>
            <li data-target="#carousel-1" data-slide-to="6"></li>
            <li data-target="#carousel-1" data-slide-to="7"></li>
        </ol>
    </div>
</div>
<h2 class="text-center text-sm-center text-md-center text-lg-center text-xl-center" style="font-family: gothic;padding: 14px;font-style: italic;font-size: 30px;"><?php echo get_theme_mod( 'lema', __( '"417 Años formando ciudadanos para un mejor pais"', 'sanbartolome_theme' ) ); ?></h2>
<div class="container-fluid shadow-lg" style="margin-top: 50px;">
    <div class="row">
        <div class="col-sm-6 col-md-2 col-lg-2 text-center border-left" style="margin-top: 5px;">
            <a href="<?php echo get_theme_mod( 'link_colegio', 'colegio.html' ); ?>" style="background-color: rgba(255,255,255,0);"><img data-bss-hover-animate="bounce" src="<?php echo PG_Image::getUrl( get_theme_mod( 'img_actor_colegio', esc_url( get_template_directory_uri() . '/assets/img/Colegio2021.png' ) ), 'medium' ) ?>" style="background-color: rgba(255,255,255,0);width: 90px;"></a>
        </div>
        <div class="col-sm-6 col-md-2 col-lg-2 text-center" style="margin-top: 5px;">
            <a href="<?php echo get_theme_mod( 'link_estudiantes', 'estudiantes.html' ); ?>" style="background-color: rgba(255,255,255,0);"><img data-bss-hover-animate="bounce" src="<?php echo PG_Image::getUrl( get_theme_mod( 'img_estudiantes', esc_url( get_template_directory_uri() . '/assets/img/Estudiantes2021.png' ) ), 'medium' ) ?>" style="background-color: rgba(255,255,255,0);width: 67px;"></a>
        </div>
        <div class="col-sm-6 col-md-2 col-lg-3 text-center border-left" style="margin-top: 5px;">
            <a href="<?php echo get_theme_mod( 'link_padres', 'padres_de_familia.html' ); ?>" style="background-color: rgba(255,0,0,0);"><img data-bss-hover-animate="bounce" src="<?php echo PG_Image::getUrl( get_theme_mod( 'img_padres', esc_url( get_template_directory_uri() . '/assets/img/padresdefamilia2021.png' ) ), 'medium' ) ?>" style="width: 90px;margin: 4px;"></a>
        </div>
        <div class="col-sm-6 col-md-2 col-lg-2 text-center border-left" style="margin-top: 5px;">
            <a href="<?php echo get_theme_mod( 'link_exalumnos', 'exalumnos.html' ); ?>" style="background-color: rgba(255,255,255,0);"><img data-bss-hover-animate="bounce" src="<?php echo PG_Image::getUrl( get_theme_mod( 'img_exalumnos', esc_url( get_template_directory_uri() . '/assets/img/Exalumnos2021.png' ) ), 'medium' ) ?>" style="width: 65px;"></a>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 text-center border-left" style="margin-top: 5px;">
            <a href="<?php echo get_theme_mod( 'link_profes', 'profes_administrativos.html' ); ?>" style="background-color: rgba(255,255,255,0);"><img data-bss-hover-animate="bounce" src="<?php echo PG_Image::getUrl( get_theme_mod( 'img_profes', esc_url( get_template_directory_uri() . '/assets/img/Profesadministrativos2021.png' ) ), 'medium' ) ?>" style="padding-top: 12px;width: 90px;"></a>
        </div>
    </div>
</div>
<div class="article-list">
    <div class="container-fluid" style="margin-top: 19px;">
        <div class="intro">
            <h1 class="display-1 text-center" style="font-size: 50px;color: rgb(193,39,45);font-family: gothic;margin-top: 36px;"><?php echo get_theme_mod( 'noticias', __( 'Noticias', 'sanbartolome_theme' ) ); ?></h1>
        </div>
        <div class="row articles">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 item">
                        <a href="#"><?php if ( is_singular() ) : ?><?php echo PG_Image::getPostImage( null, 'large', array(
                                        'class' => 'img-fluid'
                                ), 'both', null ) ?><?php elseif ( has_post_thumbnail( get_the_ID() ) ) : ?><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo PG_Image::getPostImage( null, 'large', array(
                                            'class' => 'img-fluid'
                                    ), 'both', null ) ?></a><?php endif; ?></a>
                        <h3 class="name" style="font-family: gothic;"><?php the_title(); ?></h3>
                        <p class="text-justify description" style="font-family: gothic;"><?php echo get_the_excerpt(); ?></p>
                        <a class="action" href="#"><a class="btn btn-primary-outline" href="<?php echo esc_url( get_permalink() ); ?>" role="button"><?php _e( 'Ver Más..', 'sanbartolome_theme' ); ?></a></a>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'sanbartolome_theme' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th style="font-family: gothic;color: rgb(193,39,45);border-color: rgba(193,39,45,0);border-top-color: rgb(33,;border-right-color: 37,;border-bottom-color: 41);border-left-color: 37,;padding: 0px;"><a href="#" style="color: rgb(193,39,45);"> </a></th>
                <th class="text-right" style="font-family: gothic;color: rgb(193,39,45);border-color: rgba(33,37,41,0);padding: 0px;"><a href="#" style="color: rgb(193,39,45);"> <p style="margin-right: 70px; color: rgb(193,39,45); text-align: center; margin-left: 71px;"><br><?php posts_nav_link( null, '<< Noticias Actuales >> ', '<< Anteriores Noticias >>' ); ?><br><br></p> </a></th>
            </tr>
        </thead>
        <tbody>
            <tr></tr>
        </tbody>
    </table>
</div>
<div class="row articles" style="box-shadow: inset 0px 0px 5px 2px;">
    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center item">
        <?php echo get_theme_mod( 'institucional' ); ?>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center item" style="margin-top: 20px;">
        <a href="<?php echo get_theme_mod( 'link_blog', '#' ); ?>"><img class="img-fluid" data-bss-hover-animate="pulse" src="<?php echo PG_Image::getUrl( get_theme_mod( 'mayor_bienestar', esc_url( get_template_directory_uri() . '/assets/img/new2021.png' ) ), 'medium' ) ?>" style="height: 182px;"></a>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center item">
        <a href="<?php echo get_theme_mod( 'link_emprend', '#' ); ?>"><img class="img-fluid" data-bss-hover-animate="pulse" src="<?php echo PG_Image::getUrl( get_theme_mod( 'emprendimiento', esc_url( get_template_directory_uri() . '/assets/img/emprendimiento.png' ) ), 'medium' ) ?>" style="margin-top: 79px;margin-bottom: 20px;"></a>
    </div>
</div>
<div class="footer-clean" style="background: #1c1364;padding: 0px;padding-top: 0px;">
    <?php get_template_part( 'footer', 'Footer' ); ?>
</div>        

<?php get_footer(); ?>