<?php
if ( ! function_exists( 'sanbartolome_theme_setup' ) ) :

function sanbartolome_theme_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'sanbartolome_theme', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'sanbartolome_theme' ),
        'social'  => __( 'Social Links Menu', 'sanbartolome_theme' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    register_nav_menu(  'primary', __( 'Menu_Mayor', 'sanbartolome_theme' )  );

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // sanbartolome_theme_setup

add_action( 'after_setup_theme', 'sanbartolome_theme_setup' );


if ( ! function_exists( 'sanbartolome_theme_init' ) ) :

function sanbartolome_theme_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // sanbartolome_theme_setup

add_action( 'init', 'sanbartolome_theme_init' );


if ( ! function_exists( 'sanbartolome_theme_custom_image_sizes_names' ) ) :

function sanbartolome_theme_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'sanbartolome_theme_custom_image_sizes_names' );
endif;// sanbartolome_theme_custom_image_sizes_names



if ( ! function_exists( 'sanbartolome_theme_widgets_init' ) ) :

function sanbartolome_theme_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'sanbartolome_theme_widgets_init' );
endif;// sanbartolome_theme_widgets_init



if ( ! function_exists( 'sanbartolome_theme_customize_register' ) ) :

function sanbartolome_theme_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'pagina_academica', array(
        'title' => __( 'Pagina Academica', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'pagina_administracion', array(
        'title' => __( 'Pagina Administracion', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'pastoral_profesores_admin', array(
        'title' => __( 'Pagina Pastoral Profesores y Administrativos', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'pagina_admisiones', array(
        'title' => __( 'Pagina Admisiones', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'admisiones_bachillerato', array(
        'title' => __( 'Pagina Admisiones Bachillerato', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'pagina_admisiones_preescolar', array(
        'title' => __( 'Pagina Admisiones Preescolar', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'admisiones_primaria', array(
        'title' => __( ' Pagina Admisiones Primaria', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'bibliobanco', array(
        'title' => __( 'Pagina Bibliobanco', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'colegio', array(
        'title' => __( 'Pagina Colegio', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'page_bienestar', array(
        'title' => __( 'Pagina Bienestar', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'page_contactanos', array(
        'title' => __( 'Pagina Contáctanos', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'estudiantes', array(
        'title' => __( 'Pagina Estudiantes', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'exalumnos', array(
        'title' => __( 'Pagina Exalumnos', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'gestion_humana', array(
        'title' => __( 'Pagina Gestión Humana', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'video_promocional', array(
        'title' => __( 'Video Intro CMSB', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'redes', array(
        'title' => __( 'Redes Sociales', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'frontend', array(
        'title' => __( 'Front End Index', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'frontend_footer', array(
        'title' => __( 'Front End Footer', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'items_calidad', array(
        'title' => __( 'Items Calidad', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'pagina_informacion_padres_familia', array(
        'title' => __( 'Pagina Info. Padres de Familia', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'convenios', array(
        'title' => __( 'Pagina Gestión Humana Convenios', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'items_donaciones', array(
        'title' => __( 'Items Donaciones', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'items-politica', array(
        'title' => __( 'Items Politica', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'items_programas_patoral', array(
        'title' => __( 'Items Programas', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'items_proyectos_pastoral', array(
        'title' => __( 'Items Proyectos Pastoral', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'padres_familia', array(
        'title' => __( 'Pagina Padres de Familia', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'page_pastoral', array(
        'title' => __( 'Pagina Pastoral', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'pagina_pago_admisiones', array(
        'title' => __( 'Pagina Pago Admisiones', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'pagina_pastoral_exalumnos', array(
        'title' => __( 'Pagina Pastoral Exalumnos', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'pagina_padres_familia_pastoral', array(
        'title' => __( 'Pagina Pastoral Padres de Familia', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'pagina_profesores_administrativos', array(
        'title' => __( 'Pagina Profesores y Administrativos', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'items_profes_administrativos', array(
        'title' => __( 'Items Profesores y Administrativos', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'pagina_responsabilidad', array(
        'title' => __( 'Pagina Responsabilidad Social', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'pagina_sae', array(
        'title' => __( 'Pagina SAE', 'sanbartolome_theme' )
    ));

    $wp_customize->add_section( 'items_proyectos_responsabilidad_social', array(
        'title' => __( 'Items Proyectos Responsabilidad Social', 'sanbartolome_theme' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'fondo_academica', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_academica', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_academica'
    ) ) );

    $wp_customize->add_setting( 'academica', array(
        'type' => 'theme_mod',
        'default' => __( 'ACADÉMICA', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'academica', array(
        'label' => __( 'Academica', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'pagina_academica'
    ));

    $wp_customize->add_setting( 'link_decalogos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_decalogos', array(
        'label' => __( 'Link Decálogos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_academica'
    ));

    $wp_customize->add_setting( 'imagenen_decalogos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'imagenen_decalogos', array(
        'label' => __( 'Imagen Decálogos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_academica'
    ) ) );

    $wp_customize->add_setting( 'link_progrentis', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_progrentis', array(
        'label' => __( 'Link Progrentis', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_academica'
    ));

    $wp_customize->add_setting( 'imagen_progrentis', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'imagen_progrentis', array(
        'label' => __( 'Progrentis', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_academica'
    ) ) );

    $wp_customize->add_setting( 'link_sch', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_sch', array(
        'label' => __( 'Link School Web', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_academica'
    ));

    $wp_customize->add_setting( 'imagen_school', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'imagen_school', array(
        'label' => __( 'School Web', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_academica'
    ) ) );

    $wp_customize->add_setting( 'link_meraki', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_meraki', array(
        'label' => __( 'Link Meraki', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_academica'
    ));

    $wp_customize->add_setting( 'imagen_meraki', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'imagen_meraki', array(
        'label' => __( 'Meraki', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_academica'
    ) ) );

    $wp_customize->add_setting( 'link_trendi', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_trendi', array(
        'label' => __( 'Link Trendi', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_academica'
    ));

    $wp_customize->add_setting( 'imagen_trendi', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'imagen_trendi', array(
        'label' => __( 'Trendi', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_academica'
    ) ) );

    $wp_customize->add_setting( 'link_proyectos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_proyectos', array(
        'label' => __( 'Link Proyectos Investigacion', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_academica'
    ));

    $wp_customize->add_setting( 'imagen_proyectos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'imagen_proyectos', array(
        'label' => __( 'Proyectos de Investigacion', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_academica'
    ) ) );

    $wp_customize->add_setting( 'link_periodico', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_periodico', array(
        'label' => __( 'Link Periodico', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_academica'
    ));

    $wp_customize->add_setting( 'imagen_periodico', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'imagen_periodico', array(
        'label' => __( 'Periodico Bartolino', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_academica'
    ) ) );

    $wp_customize->add_setting( 'link_modelo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_modelo', array(
        'label' => __( 'Link Modelo Educativo', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_academica'
    ));

    $wp_customize->add_setting( 'imagen_modelo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'imagen_modelo', array(
        'label' => __( 'Modelo Educativo', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_academica'
    ) ) );

    $wp_customize->add_setting( 'fondo_administracion', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_administracion', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_administracion'
    ) ) );

    $wp_customize->add_setting( 'administracion', array(
        'type' => 'theme_mod',
        'default' => __( 'ADMINISTRACIÓN', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'administracion', array(
        'label' => __( 'Administración', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'pagina_administracion'
    ));

    $wp_customize->add_setting( 'link_alquiler', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_alquiler', array(
        'label' => __( 'Link Alquiler Espacios', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_administracion'
    ));

    $wp_customize->add_setting( 'imagen_alquiler', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'imagen_alquiler', array(
        'label' => __( 'Imagen Alquiler Espacios', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_administracion'
    ) ) );

    $wp_customize->add_setting( 'link_recorrido', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_recorrido', array(
        'label' => __( 'Link Recorrido Virtual', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_administracion'
    ));

    $wp_customize->add_setting( 'imagen_recorrido', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'imagen_recorrido', array(
        'label' => __( 'Imagen Recorrido Virtual', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_administracion'
    ) ) );

    $wp_customize->add_setting( 'link_informe', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_informe', array(
        'label' => __( 'Link Informe de Gestion', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_administracion'
    ));

    $wp_customize->add_setting( 'imagen_informe', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'imagen_informe', array(
        'label' => __( 'Imagen Informe Gestion', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_administracion'
    ) ) );

    $wp_customize->add_setting( 'link_tienda', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_tienda', array(
        'label' => __( 'Link Tienda Bartolina', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_administracion'
    ));

    $wp_customize->add_setting( 'imagen_tienda', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'imagen_tienda', array(
        'label' => __( 'Imagen Tienda Virtual', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_administracion'
    ) ) );

    $wp_customize->add_setting( 'link_1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_1', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_administracion'
    ));

    $wp_customize->add_setting( 'id_1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_1', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_administracion'
    ) ) );

    $wp_customize->add_setting( 'link_2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_2', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_administracion'
    ));

    $wp_customize->add_setting( 'id_2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_2', array(
        'label' => __( 'Imagen Nuevo Item 2 ', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_administracion'
    ) ) );

    $wp_customize->add_setting( 'link_3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_3', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_administracion'
    ));

    $wp_customize->add_setting( 'id_3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_3', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_administracion'
    ) ) );

    $wp_customize->add_setting( 'link_4', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_4', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_administracion'
    ));

    $wp_customize->add_setting( 'id_4', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_4', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_administracion'
    ) ) );

    $wp_customize->add_setting( 'fondo_pastoral_profes_administrativos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_pastoral_profes_administrativos', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pastoral_profesores_admin'
    ) ) );

    $wp_customize->add_setting( 'profesores_administrativos', array(
        'type' => 'theme_mod',
        'default' => __( 'PASTORAL PROFESORES Y ADMINISTRATIVOS', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'profesores_administrativos', array(
        'label' => __( 'Profesores y Administrativos', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'pastoral_profesores_admin'
    ));

    $wp_customize->add_setting( 'link_acompañamiento', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_acompañamiento', array(
        'label' => __( 'Link Acompañamiento', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pastoral_profesores_admin'
    ));

    $wp_customize->add_setting( 'imagen_acompañamiento', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'imagen_acompañamiento', array(
        'label' => __( 'Imagen Acompañamiento', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pastoral_profesores_admin'
    ) ) );

    $wp_customize->add_setting( 'link_ejercicios', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_ejercicios', array(
        'label' => __( 'Link Ejercicios Espirituales', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pastoral_profesores_admin'
    ));

    $wp_customize->add_setting( 'imagen_ejercicios', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'imagen_ejercicios', array(
        'label' => __( 'Imagen Ejercicios Espirituales', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pastoral_profesores_admin'
    ) ) );

    $wp_customize->add_setting( 'link_pastoral_sacra', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_pastoral_sacra', array(
        'label' => __( 'Link Pastoral Sacramental', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pastoral_profesores_admin'
    ));

    $wp_customize->add_setting( 'imagen_sacramental', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'imagen_sacramental', array(
        'label' => __( 'Imagen Pastoral Sacramental', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pastoral_profesores_admin'
    ) ) );

    $wp_customize->add_setting( 'link_5', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_5', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pastoral_profesores_admin'
    ));

    $wp_customize->add_setting( 'id_5', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_5', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pastoral_profesores_admin'
    ) ) );

    $wp_customize->add_setting( 'link_6', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_6', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pastoral_profesores_admin'
    ));

    $wp_customize->add_setting( 'id_6', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_6', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pastoral_profesores_admin'
    ) ) );

    $wp_customize->add_setting( 'link_7', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_7', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pastoral_profesores_admin'
    ));

    $wp_customize->add_setting( 'id_7', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_7', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pastoral_profesores_admin'
    ) ) );

    $wp_customize->add_setting( 'link_8', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_8', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pastoral_profesores_admin'
    ));

    $wp_customize->add_setting( 'id_8', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_8', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pastoral_profesores_admin'
    ) ) );

    $wp_customize->add_setting( 'link_9', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_9', array(
        'label' => __( 'Link Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pastoral_profesores_admin'
    ));

    $wp_customize->add_setting( 'id_9', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_9', array(
        'label' => __( 'Imagen Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pastoral_profesores_admin'
    ) ) );

    $wp_customize->add_setting( 'fondo_admisiones', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_admisiones', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones'
    ) ) );

    $wp_customize->add_setting( 'nombre_institucional', array(
        'type' => 'theme_mod',
        'default' => __( 'COLEGIO MAYOR SAN BARTOLOMÉ', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'nombre_institucional', array(
        'label' => __( 'Nombre Institucional', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'admisiones', array(
        'type' => 'theme_mod',
        'default' => __( 'ADMISIONES', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'admisiones', array(
        'label' => __( 'Admisiones', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'pagina_admisiones'
    ));

    $wp_customize->add_setting( 'link_actor_lateral_familia', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_actor_lateral_familia', array(
        'label' => __( 'Link Actor Padres de Familia', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones'
    ));

    $wp_customize->add_setting( 'actor_lateral_padres', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'actor_lateral_padres', array(
        'label' => __( 'Actor Lateral Padres de Familia', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_actor_estudiantes', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_actor_estudiantes', array(
        'label' => __( 'Link Actor Estudiantes', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones'
    ));

    $wp_customize->add_setting( 'actor_lateral_estudiantes', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'actor_lateral_estudiantes', array(
        'label' => __( 'Actor Lateral Estudiantes', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_actor_colegio', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_actor_colegio', array(
        'label' => __( 'Link Actor Colegio', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones'
    ));

    $wp_customize->add_setting( 'actor_lateral_colegio', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'actor_lateral_colegio', array(
        'label' => __( 'Actor Lateral Colegio', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_actor_exalumnos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_actor_exalumnos', array(
        'label' => __( 'Link Actor Exalumnos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones'
    ));

    $wp_customize->add_setting( 'actor_lateral_exalumnos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'actor_lateral_exalumnos', array(
        'label' => __( 'Actor Lateral Exalumnos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_actor_profesores_administrativos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_actor_profesores_administrativos', array(
        'label' => __( 'Link Actor Profesores y Administrativos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones'
    ));

    $wp_customize->add_setting( 'actor_lateral_profes_admin', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'actor_lateral_profes_admin', array(
        'label' => __( 'Actor Lateral Profesores Administrativos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_contacto', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_contacto', array(
        'label' => __( 'Link Contactanos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones'
    ));

    $wp_customize->add_setting( 'actores_contactos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'actores_contactos', array(
        'label' => __( 'Contactenos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_costos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_costos', array(
        'label' => __( 'Link Costos Educativos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones'
    ));

    $wp_customize->add_setting( 'actores_costos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'actores_costos', array(
        'label' => __( 'Costos Educativos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_preguntas', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_preguntas', array(
        'label' => __( 'Link Preguntas Frecuentes', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones'
    ));

    $wp_customize->add_setting( 'actores_preguntas', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'actores_preguntas', array(
        'label' => __( 'Preguntas Frecuentes', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_pago', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_pago', array(
        'label' => __( 'Link Pago Admisiones', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones'
    ));

    $wp_customize->add_setting( 'actores_pagos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'actores_pagos', array(
        'label' => __( 'Pagos Admisiones', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_preescolar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_preescolar', array(
        'label' => __( 'Link Preescolar', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones'
    ));

    $wp_customize->add_setting( 'actores_preescolar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'actores_preescolar', array(
        'label' => __( 'Proceso Preescolar', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_primaria', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_primaria', array(
        'label' => __( 'Link Primaria', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones'
    ));

    $wp_customize->add_setting( 'actores_primaria', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'actores_primaria', array(
        'label' => __( 'Proceso Primaria', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_bachillerato', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_bachillerato', array(
        'label' => __( 'Link Bachillerato', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones'
    ));

    $wp_customize->add_setting( 'actores_bachillerato', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'actores_bachillerato', array(
        'label' => __( 'Proceso Bachillerato', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_28', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_28', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones'
    ));

    $wp_customize->add_setting( 'id_28', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_28', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones'
    ) ) );

    $wp_customize->add_setting( 'fondo_admisiones_bto', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_admisiones_bto', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_bachillerato'
    ) ) );

    $wp_customize->add_setting( 'admisiones_bachillerato', array(
        'type' => 'theme_mod',
        'default' => __( 'ADMISIONES BACHILLERATO', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'admisiones_bachillerato', array(
        'label' => __( 'Admisiones Bachillerato', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'admisiones_bachillerato'
    ));

    $wp_customize->add_setting( 'link_documentos_requeridos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_documentos_requeridos', array(
        'label' => __( 'Link Documentos Requeridos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_bachillerato'
    ));

    $wp_customize->add_setting( 'id_documentos_requeridos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_documentos_requeridos', array(
        'label' => __( 'Imagen Documentos Requerdos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_bachillerato'
    ) ) );

    $wp_customize->add_setting( 'link_paso_bachillerato', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_paso_bachillerato', array(
        'label' => __( 'Link Paso a Paso Bachillerato', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_bachillerato'
    ));

    $wp_customize->add_setting( 'id_paso_bacillerato', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_paso_bacillerato', array(
        'label' => __( 'Paso a Paso Bachillerato', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_bachillerato'
    ) ) );

    $wp_customize->add_setting( 'link_10', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_10', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_bachillerato'
    ));

    $wp_customize->add_setting( 'id_10', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_10', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_bachillerato'
    ) ) );

    $wp_customize->add_setting( 'link_11', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_11', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_bachillerato'
    ));

    $wp_customize->add_setting( 'id_11', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_11', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_bachillerato'
    ) ) );

    $wp_customize->add_setting( 'link_12', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_12', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_bachillerato'
    ));

    $wp_customize->add_setting( 'id_12', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_12', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_bachillerato'
    ) ) );

    $wp_customize->add_setting( 'link_13', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_13', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_bachillerato'
    ));

    $wp_customize->add_setting( 'id_13', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_13', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_bachillerato'
    ) ) );

    $wp_customize->add_setting( 'link_14', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_14', array(
        'label' => __( 'Link Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_bachillerato'
    ));

    $wp_customize->add_setting( 'id_14', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_14', array(
        'label' => __( 'Imagen Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_bachillerato'
    ) ) );

    $wp_customize->add_setting( 'link_15', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_15', array(
        'label' => __( 'Link Nuevo Item 6', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_bachillerato'
    ));

    $wp_customize->add_setting( 'id_15', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_15', array(
        'label' => __( 'Imagen Nuevo Item 6', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_bachillerato'
    ) ) );

    $wp_customize->add_setting( 'fondo_admisiones_preescolar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_admisiones_preescolar', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones_preescolar'
    ) ) );

    $wp_customize->add_setting( 'admisiones_preeescolar', array(
        'type' => 'theme_mod',
        'default' => __( 'ADMISIONES PREESCOLAR', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'admisiones_preeescolar', array(
        'label' => __( 'Admisiones Preescolar', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'pagina_admisiones_preescolar'
    ));

    $wp_customize->add_setting( 'link_documentos_requeridos_preescolar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_documentos_requeridos_preescolar', array(
        'label' => __( 'Link Documentos Requeridos Preescolar', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones_preescolar'
    ));

    $wp_customize->add_setting( 'id_documentos_requeridos_preescolar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_documentos_requeridos_preescolar', array(
        'label' => __( 'Imagen Documentos Requeridos Preescolar', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones_preescolar'
    ) ) );

    $wp_customize->add_setting( 'link_paso_preescolar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_paso_preescolar', array(
        'label' => __( 'Link Paso a Paso Preescolar', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones_preescolar'
    ));

    $wp_customize->add_setting( 'id_paso_preescolar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_paso_preescolar', array(
        'label' => __( 'Imagen Paso a Paso Preescolar', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones_preescolar'
    ) ) );

    $wp_customize->add_setting( 'link_22', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_22', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones_preescolar'
    ));

    $wp_customize->add_setting( 'id_22', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_22', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones_preescolar'
    ) ) );

    $wp_customize->add_setting( 'link_23', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_23', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones_preescolar'
    ));

    $wp_customize->add_setting( 'id_23', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_23', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones_preescolar'
    ) ) );

    $wp_customize->add_setting( 'link_24', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_24', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones_preescolar'
    ));

    $wp_customize->add_setting( 'id_24', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_24', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones_preescolar'
    ) ) );

    $wp_customize->add_setting( 'link_25', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_25', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones_preescolar'
    ));

    $wp_customize->add_setting( 'id_25', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_25', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones_preescolar'
    ) ) );

    $wp_customize->add_setting( 'link_26', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_26', array(
        'label' => __( 'Link Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones_preescolar'
    ));

    $wp_customize->add_setting( 'id_26', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_26', array(
        'label' => __( 'Imagen Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones_preescolar'
    ) ) );

    $wp_customize->add_setting( 'link_27', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_27', array(
        'label' => __( 'Link Nuevo Item 6', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_admisiones_preescolar'
    ));

    $wp_customize->add_setting( 'id_27', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_27', array(
        'label' => __( 'Imagen Nuevo Item 6', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_admisiones_preescolar'
    ) ) );

    $wp_customize->add_setting( 'fondo_admisiones_primaria', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_admisiones_primaria', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_primaria'
    ) ) );

    $wp_customize->add_setting( 'admisiones_primaria', array(
        'type' => 'theme_mod',
        'default' => __( 'ADMISIONES PRIMARIA', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'admisiones_primaria', array(
        'label' => __( 'Admisiones Primaria', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'admisiones_primaria'
    ));

    $wp_customize->add_setting( 'link_documentos_requeridos_primaria', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_documentos_requeridos_primaria', array(
        'label' => __( 'Link Documentos Requeridos Primaria', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_primaria'
    ));

    $wp_customize->add_setting( 'id_documentos_requeridos_primaria', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_documentos_requeridos_primaria', array(
        'label' => __( 'Imagen Documentos Requeridos Primaria', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_primaria'
    ) ) );

    $wp_customize->add_setting( 'link_paso_primaria', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_paso_primaria', array(
        'label' => __( 'Link Paso a Paso Primaria', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_primaria'
    ));

    $wp_customize->add_setting( 'id_paso_primaria', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_paso_primaria', array(
        'label' => __( 'Imagen Paso a Paso Primaria', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_primaria'
    ) ) );

    $wp_customize->add_setting( 'link_16', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_16', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_primaria'
    ));

    $wp_customize->add_setting( 'id_16', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_16', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_primaria'
    ) ) );

    $wp_customize->add_setting( 'link_17', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_17', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_primaria'
    ));

    $wp_customize->add_setting( 'id_17', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_17', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_primaria'
    ) ) );

    $wp_customize->add_setting( 'link_18', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_18', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_primaria'
    ));

    $wp_customize->add_setting( 'id_18', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_18', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_primaria'
    ) ) );

    $wp_customize->add_setting( 'link_19', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_19', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_primaria'
    ));

    $wp_customize->add_setting( 'id_19', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_19', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_primaria'
    ) ) );

    $wp_customize->add_setting( 'link_20', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_20', array(
        'label' => __( 'Link Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_primaria'
    ));

    $wp_customize->add_setting( 'id_20', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_20', array(
        'label' => __( 'Imagen Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_primaria'
    ) ) );

    $wp_customize->add_setting( 'link_21', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_21', array(
        'label' => __( 'Link Nuevo Item 6', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'admisiones_primaria'
    ));

    $wp_customize->add_setting( 'id_21', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_21', array(
        'label' => __( 'Imagen Nuevo Item 6', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'admisiones_primaria'
    ) ) );

    $wp_customize->add_section( 'sanbartolome_theme_default_cs', array('title' => 'Default section'));

    $wp_customize->add_setting( 'fondo_article_template', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_article_template', array(
        'label' => __( 'Fondo Cuadros Article', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'sanbartolome_theme_default_cs'
    ) ) );

    $wp_customize->add_setting( 'fondo_bibliobanco', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_bibliobanco', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'bibliobanco'
    ) ) );

    $wp_customize->add_setting( 'bibliobanco', array(
        'type' => 'theme_mod',
        'default' => __( 'BIBLIOBANCO', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'bibliobanco', array(
        'label' => __( 'Bibliobanco', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'bibliobanco'
    ));

    $wp_customize->add_setting( 'link_bibliolaboratorio', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_bibliolaboratorio', array(
        'label' => __( 'Link Bibliolaboratorio', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'bibliobanco'
    ));

    $wp_customize->add_setting( 'id_bibliolaboratorio', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_bibliolaboratorio', array(
        'label' => __( 'Imagen Bibliolaboratorio', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'bibliobanco'
    ) ) );

    $wp_customize->add_setting( 'link_cabor', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_cabor', array(
        'label' => __( 'Link Cabor+Digital', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'bibliobanco'
    ));

    $wp_customize->add_setting( 'id_cabor', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_cabor', array(
        'label' => __( 'Imagen Cabor+Digital', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'bibliobanco'
    ) ) );

    $wp_customize->add_setting( 'link-progrentis', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link-progrentis', array(
        'label' => __( 'Link Progrentis', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'bibliobanco'
    ));

    $wp_customize->add_setting( 'id_progren', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_progren', array(
        'label' => __( 'Imagen Progrentis', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'bibliobanco'
    ) ) );

    $wp_customize->add_setting( 'link_29', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_29', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'bibliobanco'
    ));

    $wp_customize->add_setting( 'id_29', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_29', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'bibliobanco'
    ) ) );

    $wp_customize->add_setting( 'link_30', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_30', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'bibliobanco'
    ));

    $wp_customize->add_setting( 'id_30', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_30', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'bibliobanco'
    ) ) );

    $wp_customize->add_setting( 'link_31', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_31', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'bibliobanco'
    ));

    $wp_customize->add_setting( 'id_31', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_31', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'bibliobanco'
    ) ) );

    $wp_customize->add_setting( 'link_32', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_32', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'bibliobanco'
    ));

    $wp_customize->add_setting( 'id_32', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_32', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'bibliobanco'
    ) ) );

    $wp_customize->add_setting( 'link_33', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_33', array(
        'label' => __( 'Link Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'bibliobanco'
    ));

    $wp_customize->add_setting( 'id_33', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_33', array(
        'label' => __( 'Imagen Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'bibliobanco'
    ) ) );

    $wp_customize->add_setting( 'fondo_colegio', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_colegio', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'colegio'
    ) ) );

    $wp_customize->add_setting( 'id_colegio', array(
        'type' => 'theme_mod',
        'default' => __( 'COLEGIO', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'id_colegio', array(
        'label' => __( 'Colegio', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'colegio'
    ));

    $wp_customize->add_setting( 'link_alquiler', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_alquiler', array(
        'label' => __( 'Link Alquiler Espacios', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'colegio'
    ));

    $wp_customize->add_setting( 'id_alquiler', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_alquiler', array(
        'label' => __( 'Imagen Alquiler Espacios', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'colegio'
    ) ) );

    $wp_customize->add_setting( 'link_recorridos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_recorridos', array(
        'label' => __( 'Link Recorridos Virtualales', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'colegio'
    ));

    $wp_customize->add_setting( 'id_recorridos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_recorridos', array(
        'label' => __( 'Imagen Recorridos Virtuales', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'colegio'
    ) ) );

    $wp_customize->add_setting( 'link_informe', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_informe', array(
        'label' => __( 'Link Informe de Gestion', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'colegio'
    ));

    $wp_customize->add_setting( 'id_informes_gestion', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_informes_gestion', array(
        'label' => __( 'Imagen Informe de Gestion', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'colegio'
    ) ) );

    $wp_customize->add_setting( 'link_tienda', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_tienda', array(
        'label' => __( 'Link Tienda Bartolina', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'colegio'
    ));

    $wp_customize->add_setting( 'id_tienda_bart', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_tienda_bart', array(
        'label' => __( 'Imagen Tienda Bartolina', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'colegio'
    ) ) );

    $wp_customize->add_setting( 'link_nuestros_equi', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_nuestros_equi', array(
        'label' => __( 'Link Nuestros Equipos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'colegio'
    ));

    $wp_customize->add_setting( 'id_nuestros_equipos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_nuestros_equipos', array(
        'label' => __( 'Imagen Nuestros Equipos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'colegio'
    ) ) );

    $wp_customize->add_setting( 'link_34', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_34', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'colegio'
    ));

    $wp_customize->add_setting( 'id_34', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_34', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'colegio'
    ) ) );

    $wp_customize->add_setting( 'link_35', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_35', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'colegio'
    ));

    $wp_customize->add_setting( 'id_35', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_35', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'colegio'
    ) ) );

    $wp_customize->add_setting( 'link_36', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_36', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'colegio'
    ));

    $wp_customize->add_setting( 'id_36', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_36', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'colegio'
    ) ) );

    $wp_customize->add_setting( 'fondo_bienestar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_bienestar', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_bienestar'
    ) ) );

    $wp_customize->add_setting( 'bienestar', array(
        'type' => 'theme_mod',
        'default' => __( 'BIENESTAR', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'bienestar', array(
        'label' => __( 'Bienestar', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'page_bienestar'
    ));

    $wp_customize->add_setting( 'link_circul', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_circul', array(
        'label' => __( 'Link Circulares', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_bienestar'
    ));

    $wp_customize->add_setting( 'id_circul', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_circul', array(
        'label' => __( 'Imagen Circulares', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_bienestar'
    ) ) );

    $wp_customize->add_setting( 'link_protocolos_desinfec', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_protocolos_desinfec', array(
        'label' => __( 'Link Protocolos Estudiantiles', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_bienestar'
    ));

    $wp_customize->add_setting( 'id_protocolos_desinfec', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_protocolos_desinfec', array(
        'label' => __( 'Imagen Protocolos Estudiantiles', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_bienestar'
    ) ) );

    $wp_customize->add_setting( 'link_manual', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_manual', array(
        'label' => __( 'Link Manual de Convivencia', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_bienestar'
    ));

    $wp_customize->add_setting( 'id_manual', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_manual', array(
        'label' => __( 'Imagen Manual de Convivencia', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_bienestar'
    ) ) );

    $wp_customize->add_setting( 'link_torneo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_torneo', array(
        'label' => __( 'Link Torneo de Comunidad', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_bienestar'
    ));

    $wp_customize->add_setting( 'id_torneo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_torneo', array(
        'label' => __( 'Imagen Torneo de Comunidad', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_bienestar'
    ) ) );

    $wp_customize->add_setting( 'link_102', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_102', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_bienestar'
    ));

    $wp_customize->add_setting( 'id_102', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_102', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_bienestar'
    ) ) );

    $wp_customize->add_setting( 'link_103', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_103', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_bienestar'
    ));

    $wp_customize->add_setting( 'id_103', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_103', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_bienestar'
    ) ) );

    $wp_customize->add_setting( 'link_104', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_104', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_bienestar'
    ));

    $wp_customize->add_setting( 'id_104', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_104', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_bienestar'
    ) ) );

    $wp_customize->add_setting( 'link_105', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_105', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_bienestar'
    ));

    $wp_customize->add_setting( 'id_105', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_105', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_bienestar'
    ) ) );

    $wp_customize->add_setting( 'fondo_contactos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_contactos', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_contactanos'
    ) ) );

    $wp_customize->add_setting( 'nombre_institucional', array(
        'type' => 'theme_mod',
        'default' => __( 'COLEGIO MAYOR SAN BARTOLOMÉ', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'nombre_institucional', array(
        'label' => __( 'Nombre Institucional', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'fondo_estudiantes', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_estudiantes', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'estudiantes'
    ) ) );

    $wp_customize->add_setting( 'title_estudiantes', array(
        'type' => 'theme_mod',
        'default' => __( 'ESTUDIANTES', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'title_estudiantes', array(
        'label' => __( 'Estudiantes', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'estudiantes'
    ));

    $wp_customize->add_setting( 'link_blogs', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_blogs', array(
        'label' => __( 'Link Blogs', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'estudiantes'
    ));

    $wp_customize->add_setting( 'id_blogs', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_blogs', array(
        'label' => __( 'Imagen Blogs', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'estudiantes'
    ) ) );

    $wp_customize->add_setting( 'link_school_web_estudiantes_new', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_school_web_estudiantes_new', array(
        'label' => __( 'Link School Web', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'estudiantes'
    ));

    $wp_customize->add_setting( 'id_school_web_estudiantes_new', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_school_web_estudiantes_new', array(
        'label' => __( 'Imagen School Web', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'estudiantes'
    ) ) );

    $wp_customize->add_setting( 'link_bibliobank', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_bibliobank', array(
        'label' => __( 'Link Bibliobanco', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'estudiantes'
    ));

    $wp_customize->add_setting( 'id_bibli', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_bibli', array(
        'label' => __( 'Imagen Bibliobanco', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'estudiantes'
    ) ) );

    $wp_customize->add_setting( 'link_past', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_past', array(
        'label' => __( 'Link Patoral', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'estudiantes'
    ));

    $wp_customize->add_setting( 'id_past', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_past', array(
        'label' => __( 'Imagen Pastoral', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'estudiantes'
    ) ) );

    $wp_customize->add_setting( 'link_bienest', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_bienest', array(
        'label' => __( 'Link  Bienestar Estudiantil', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'estudiantes'
    ));

    $wp_customize->add_setting( 'id_bien', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_bien', array(
        'label' => __( 'Imagen Bienestar Estudiantil', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'estudiantes'
    ) ) );

    $wp_customize->add_setting( 'link_prot', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_prot', array(
        'label' => __( 'Link Protocolos de Bioseguridad', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'estudiantes'
    ));

    $wp_customize->add_setting( 'id_prot', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_prot', array(
        'label' => __( 'Imagen Protocolos de Bioseguridad', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'estudiantes'
    ) ) );

    $wp_customize->add_setting( 'link_acac', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_acac', array(
        'label' => __( 'Link Academica', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'estudiantes'
    ));

    $wp_customize->add_setting( 'id_aca', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_aca', array(
        'label' => __( 'Imagen Academica', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'estudiantes'
    ) ) );

    $wp_customize->add_setting( 'link_sae', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_sae', array(
        'label' => __( 'Link  S.A.E', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'estudiantes'
    ));

    $wp_customize->add_setting( 'id_sae', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_sae', array(
        'label' => __( 'Imagen S.A.E', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'estudiantes'
    ) ) );

    $wp_customize->add_setting( 'fondo_exalumnos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_exalumnos', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'exalumnos'
    ) ) );

    $wp_customize->add_setting( 'id_exalumnos', array(
        'type' => 'theme_mod',
        'default' => __( 'EXALUMNOS', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'id_exalumnos', array(
        'label' => __( 'Exalumnos', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'exalumnos'
    ));

    $wp_customize->add_setting( 'link_pastoral_exalumnos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_pastoral_exalumnos', array(
        'label' => __( 'Link Pastoral Exalumnos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'exalumnos'
    ));

    $wp_customize->add_setting( 'id_pastoral_exalumnos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_pastoral_exalumnos', array(
        'label' => __( 'Imagen Pastoral Exalumnos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'exalumnos'
    ) ) );

    $wp_customize->add_setting( 'link_regresa', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_regresa', array(
        'label' => __( 'Link Regresa', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'exalumnos'
    ));

    $wp_customize->add_setting( 'id_regresa', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_regresa', array(
        'label' => __( 'Imagen Regresa', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'exalumnos'
    ) ) );

    $wp_customize->add_setting( 'link_38', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_38', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'exalumnos'
    ));

    $wp_customize->add_setting( 'id_38', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_38', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'exalumnos'
    ) ) );

    $wp_customize->add_setting( 'link_39', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_39', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'exalumnos'
    ));

    $wp_customize->add_setting( 'id_39', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_39', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'exalumnos'
    ) ) );

    $wp_customize->add_setting( 'link_40', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_40', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'exalumnos'
    ));

    $wp_customize->add_setting( 'id_40', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_40', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'exalumnos'
    ) ) );

    $wp_customize->add_setting( 'link_41', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_41', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'exalumnos'
    ));

    $wp_customize->add_setting( 'id_41', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_41', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'exalumnos'
    ) ) );

    $wp_customize->add_setting( 'link_42', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_42', array(
        'label' => __( 'Link Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'exalumnos'
    ));

    $wp_customize->add_setting( 'id_42', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_42', array(
        'label' => __( 'Imagen Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'exalumnos'
    ) ) );

    $wp_customize->add_setting( 'link_43', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_43', array(
        'label' => __( 'Link Nuevo Item 6', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'exalumnos'
    ));

    $wp_customize->add_setting( 'id_43', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_43', array(
        'label' => __( 'Imagen Nuevo Item 6', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'exalumnos'
    ) ) );

    $wp_customize->add_setting( 'fondo_gestion_humana', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_gestion_humana', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'gestion_humana'
    ) ) );

    $wp_customize->add_setting( 'id_gestion', array(
        'type' => 'theme_mod',
        'default' => __( 'GESTIÓN HUMANA', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'id_gestion', array(
        'label' => __( 'Gestión Humana', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'gestion_humana'
    ));

    $wp_customize->add_setting( 'link_conve', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_conve', array(
        'label' => __( 'Link Convenios', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'gestion_humana'
    ));

    $wp_customize->add_setting( 'id_conven', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_conven', array(
        'label' => __( 'Imagen Convenios', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'gestion_humana'
    ) ) );

    $wp_customize->add_setting( 'link_trabaja_mayor', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_trabaja_mayor', array(
        'label' => __( 'Link Trabaja Con el Mayor', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'gestion_humana'
    ));

    $wp_customize->add_setting( 'id_trabaja_con_mayor', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_trabaja_con_mayor', array(
        'label' => __( 'Imagen Trabaja con el Mayor', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'gestion_humana'
    ) ) );

    $wp_customize->add_setting( 'link_plan', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_plan', array(
        'label' => __( 'Link Plan de Formación', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'gestion_humana'
    ));

    $wp_customize->add_setting( 'id_formacion', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_formacion', array(
        'label' => __( 'Imagen Plan de Formación', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'gestion_humana'
    ) ) );

    $wp_customize->add_setting( 'link_44', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_44', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'gestion_humana'
    ));

    $wp_customize->add_setting( 'id_44', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_44', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'gestion_humana'
    ) ) );

    $wp_customize->add_setting( 'link_45', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_45', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'gestion_humana'
    ));

    $wp_customize->add_setting( 'id_45', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_45', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'gestion_humana'
    ) ) );

    $wp_customize->add_setting( 'link_46', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_46', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'gestion_humana'
    ));

    $wp_customize->add_setting( 'id_46', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_46', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'gestion_humana'
    ) ) );

    $wp_customize->add_setting( 'link_47', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_47', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'gestion_humana'
    ));

    $wp_customize->add_setting( 'id_47', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_47', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'gestion_humana'
    ) ) );

    $wp_customize->add_setting( 'link_48', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_48', array(
        'label' => __( 'Link Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'gestion_humana'
    ));

    $wp_customize->add_setting( 'id_48', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_48', array(
        'label' => __( 'Imagen Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'gestion_humana'
    ) ) );

    $wp_customize->add_setting( 'boton_cierre', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'boton_cierre', array(
        'label' => __( 'Botón X', 'sanbartolome_theme' ),
        'type' => 'checkbox',
        'section' => 'video_promocional'
    ));

    $wp_customize->add_setting( 'video_modal', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'video_modal', array(
        'label' => __( 'Video CMSB', 'sanbartolome_theme' ),
        'type' => 'checkbox',
        'section' => 'video_promocional'
    ));

    $wp_customize->add_setting( 'link_video_intro', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_video_intro', array(
        'label' => __( 'Video Modal', 'sanbartolome_theme' ),
        'type' => 'textarea',
        'section' => 'video_promocional'
    ));

    $wp_customize->add_setting( 'link_whatsapp', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_whatsapp', array(
        'label' => __( 'Link Whatsapp', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'redes'
    ));

    $wp_customize->add_setting( 'icono_whatsapp', array(
        'type' => 'theme_mod',
        'default' => __( 'fa-whatsapp', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'icono_whatsapp', array(
        'label' => __( 'Icono  Whatsapp', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'redes'
    ));

    $wp_customize->add_setting( 'link_youtube', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_youtube', array(
        'label' => __( 'Link Youtube', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'redes'
    ));

    $wp_customize->add_setting( 'icono_youtube', array(
        'type' => 'theme_mod',
        'default' => __( 'fa-youtube-play', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'icono_youtube', array(
        'label' => __( 'Icono Youtube', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'redes'
    ));

    $wp_customize->add_setting( 'link_twiter', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_twiter', array(
        'label' => __( 'Link  Twitter', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'redes'
    ));

    $wp_customize->add_setting( 'icono_twiter', array(
        'type' => 'theme_mod',
        'default' => __( 'fa-twitter', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'icono_twiter', array(
        'label' => __( 'Icono Twitter', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'redes'
    ));

    $wp_customize->add_setting( 'link_facebook', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_facebook', array(
        'label' => __( 'Link Facebook', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'redes'
    ));

    $wp_customize->add_setting( 'icono_facebook', array(
        'type' => 'theme_mod',
        'default' => __( 'fa-facebook', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'icono_facebook', array(
        'label' => __( 'Icono Facebook', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'redes'
    ));

    $wp_customize->add_setting( 'link_instagram', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_instagram', array(
        'label' => __( 'Link Instagram', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'redes'
    ));

    $wp_customize->add_setting( 'icono_instagram', array(
        'type' => 'theme_mod',
        'default' => __( 'fa-instagram', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'icono_instagram', array(
        'label' => __( 'Icono Instagram', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'redes'
    ));

    $wp_customize->add_setting( 'fondo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo', array(
        'label' => __( 'Fondo Logo', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'index_inicio', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'index_inicio', array(
        'label' => __( 'Link Index', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'logo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'logo', array(
        'label' => __( 'Logo', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'nombre_institucional', array(
        'type' => 'theme_mod',
        'default' => __( 'COLEGIO MAYOR DE SAN BARTOLOMÉ', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'nombre_institucional', array(
        'label' => __( 'Nombre Institucional', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'url_img_1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'url_img_1', array(
        'label' => __( 'URL IMAGEN 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'img_1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img_1', array(
        'label' => __( 'Imagen No 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'url_img_2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'url_img_2', array(
        'label' => __( 'URL IMAGEN 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'img_2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img_2', array(
        'label' => __( 'Imagen No 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'url_img_3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'url_img_3', array(
        'label' => __( 'URL IMAGEN 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'img_3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img_3', array(
        'label' => __( 'Imagen No 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'url_img_4', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'url_img_4', array(
        'label' => __( 'URL IMAGEN 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'img_4', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img_4', array(
        'label' => __( 'Imagen No 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'url_img_5', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'url_img_5', array(
        'label' => __( 'URL IMAGEN 5', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'img_5', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img_5', array(
        'label' => __( 'Imagen No 5', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'url_img_6', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'url_img_6', array(
        'label' => __( 'URL IMAGEN 6', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'img_6', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img_6', array(
        'label' => __( 'Imagen No 6', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'url_img_7', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'url_img_7', array(
        'label' => __( 'URL IMAGEN 7', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'img_7', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img_7', array(
        'label' => __( 'Imagen No 7', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'url_img_8', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'url_img_8', array(
        'label' => __( 'URL IMAGEN 8', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'img_8', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img_8', array(
        'label' => __( 'Imagen No 8', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'lema', array(
        'type' => 'theme_mod',
        'default' => __( '"417 Años formando ciudadanos para un mejor pais"', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'lema', array(
        'label' => __( 'Lema Institucional', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'link_colegio', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_colegio', array(
        'label' => __( 'Link Colegio', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'img_actor_colegio', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img_actor_colegio', array(
        'label' => __( 'Imagen Colegio', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'link_estudiantes', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_estudiantes', array(
        'label' => __( 'Link Estudiantes', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'img_estudiantes', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img_estudiantes', array(
        'label' => __( 'Imagen Estudiantes', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'link_padres', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_padres', array(
        'label' => __( 'Link Padres de Familia', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'img_padres', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img_padres', array(
        'label' => __( 'Imagen Padres de Familia', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'link_exalumnos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_exalumnos', array(
        'label' => __( 'Link ExAlumnos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'img_exalumnos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img_exalumnos', array(
        'label' => __( 'Imagen ExAlumnos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'link_profes', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_profes', array(
        'label' => __( 'Link Profesores Administrativos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'img_profes', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'img_profes', array(
        'label' => __( 'Imagen Profesores y Administrativos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'noticias', array(
        'type' => 'theme_mod',
        'default' => __( 'Noticias', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'noticias', array(
        'label' => __( 'Noticias', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'institucional', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'institucional', array(
        'label' => __( 'Video Institucional', 'sanbartolome_theme' ),
        'type' => 'textarea',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'link_blog', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_blog', array(
        'label' => __( 'Link Blog Mayor', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'mayor_bienestar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'mayor_bienestar', array(
        'label' => __( 'Imagen Blog Mayor', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'link_emprend', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_emprend', array(
        'label' => __( 'Link Emprendimiento', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend'
    ));

    $wp_customize->add_setting( 'emprendimiento', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'emprendimiento', array(
        'label' => __( 'Imagen Emprendimiento', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend'
    ) ) );

    $wp_customize->add_setting( 'link_acodesi', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_acodesi', array(
        'label' => __( 'Link Acodesi', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'id_acodesi', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_acodesi', array(
        'label' => __( 'Imagen Acodesi', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend_footer'
    ) ) );

    $wp_customize->add_setting( 'link_jesuitas', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_jesuitas', array(
        'label' => __( 'Link Jesuitas', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'id_jesuitas', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_jesuitas', array(
        'label' => __( 'Imagen Jesuitas', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend_footer'
    ) ) );

    $wp_customize->add_setting( 'link_abba', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_abba', array(
        'label' => __( 'Link Abba', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'id_abba', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_abba', array(
        'label' => __( 'Imagen Abba', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend_footer'
    ) ) );

    $wp_customize->add_setting( 'link_flacsi', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_flacsi', array(
        'label' => __( 'Link Flacsi', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'id_flacsi', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_flacsi', array(
        'label' => __( 'Imagen Flacsi', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend_footer'
    ) ) );

    $wp_customize->add_setting( 'link_tomas', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_tomas', array(
        'label' => __( 'Link Tomas Rueda', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'id_tomas', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_tomas', array(
        'label' => __( 'Imagen Tomas Rueda', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend_footer'
    ) ) );

    $wp_customize->add_setting( 'link_asomay', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_asomay', array(
        'label' => __( 'Link Asomayor', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'id_asomay', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_asomay', array(
        'label' => __( 'Imagen Asomayor', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'frontend_footer'
    ) ) );

    $wp_customize->add_setting( 'datos_colegio', array(
        'type' => 'theme_mod',
        'default' => '<strong>Sede Bachillerato:</strong><br><strong>Dirección: Carrera 7 No. 9-96 Plaza de Bolívar.</strong><br><strong>PBX: 9191990</strong>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'datos_colegio', array(
        'label' => __( 'Informacion Sede Bachillerato', 'sanbartolome_theme' ),
        'type' => 'textarea',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'informacion_infantiles', array(
        'type' => 'theme_mod',
        'default' => '<strong>Sede Preescolar y Primaria:</strong><br><strong>Dirección: Carrera 23 No. 28-55 Sur.</strong><br><strong>PBX: 9191990.</strong><br><strong>Bogotá D.C. - Colombia</strong><br>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'informacion_infantiles', array(
        'label' => __( 'Informacion Sede Infantiles', 'sanbartolome_theme' ),
        'type' => 'textarea',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'link_redes_facebok', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_redes_facebok', array(
        'label' => __( 'Link Facebook', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'id_icono_facebook', array(
        'type' => 'theme_mod',
        'default' => __( 'ion-social-facebook', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'id_icono_facebook', array(
        'label' => __( 'Icono Facebook', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'link_redes_twter', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_redes_twter', array(
        'label' => __( 'Link Twiter', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'id_icono_twiter', array(
        'type' => 'theme_mod',
        'default' => __( 'ion-social-twitter', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'id_icono_twiter', array(
        'label' => __( 'Icono Twiter', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'link_redes_wattsap', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_redes_wattsap', array(
        'label' => __( 'Link Wattsap', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'id_icono_whatsapp', array(
        'type' => 'theme_mod',
        'default' => __( 'ion-social-whatsapp-outline', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'id_icono_whatsapp', array(
        'label' => __( 'Icono Whatsapp', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'link_redes_youtube', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_redes_youtube', array(
        'label' => __( 'Link Youtube', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'id_icono_youtube', array(
        'type' => 'theme_mod',
        'default' => __( 'ion-social-youtube-outline', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'id_icono_youtube', array(
        'label' => __( 'Icono Youtube', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'creadores', array(
        'type' => 'theme_mod',
        'default' => '<br><strong>Consulte&nbsp;&nbsp;</strong><a href="http://www.sanbartolome.edu.co/uploads/documentos/2018/politica-datos.pdf">aqui</a><strong>&nbsp;nuestra Politica de Proteccion de Datos Personales</strong><br><br><strong>Diseño y Desarrollo: Departamento de Sistemas y Promoción Institucional Colegio Mayor de San Bartolomé © 2021</strong><br><br>',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'creadores', array(
        'label' => __( 'Link Pdf Tratamiento de datos Personales', 'sanbartolome_theme' ),
        'type' => 'textarea',
        'section' => 'frontend_footer'
    ));

    $wp_customize->add_setting( 'fondo_items_calidad', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_items_calidad', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_calidad'
    ) ) );

    $wp_customize->add_setting( 'id_calidad-items', array(
        'type' => 'theme_mod',
        'default' => __( 'CALIDAD', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'id_calidad-items', array(
        'label' => __( 'Calidad Items', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'items_calidad'
    ));

    $wp_customize->add_setting( 'link_calidad', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_calidad', array(
        'label' => __( 'Link Calidad', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_calidad'
    ));

    $wp_customize->add_setting( 'id_calidad', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_calidad', array(
        'label' => __( 'Imagen Calidad', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_calidad'
    ) ) );

    $wp_customize->add_setting( 'link_sg', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_sg', array(
        'label' => __( 'Link SG-SST', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_calidad'
    ));

    $wp_customize->add_setting( 'id_sg', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_sg', array(
        'label' => __( 'Imagen SG-SST', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_calidad'
    ) ) );

    $wp_customize->add_setting( 'link_protocolos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_protocolos', array(
        'label' => __( 'Link Protocolos de biosegurirdad', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_calidad'
    ));

    $wp_customize->add_setting( 'id_protocolos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_protocolos', array(
        'label' => __( 'Imagen Protocolos de Bioseguridad', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_calidad'
    ) ) );

    $wp_customize->add_setting( 'link_49', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_49', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_calidad'
    ));

    $wp_customize->add_setting( 'id_49', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_49', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_calidad'
    ) ) );

    $wp_customize->add_setting( 'link_50', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_50', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_calidad'
    ));

    $wp_customize->add_setting( 'id_50', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_50', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_calidad'
    ) ) );

    $wp_customize->add_setting( 'link_51', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_51', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_calidad'
    ));

    $wp_customize->add_setting( 'id_51', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_51', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_calidad'
    ) ) );

    $wp_customize->add_setting( 'link_52', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_52', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_calidad'
    ));

    $wp_customize->add_setting( 'id_52', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_52', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_calidad'
    ) ) );

    $wp_customize->add_setting( 'link_53', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_53', array(
        'label' => __( 'Link Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_calidad'
    ));

    $wp_customize->add_setting( 'id_53', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_53', array(
        'label' => __( 'Imagen Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_calidad'
    ) ) );

    $wp_customize->add_setting( 'fondo_info_padres_familia', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_info_padres_familia', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_informacion_padres_familia'
    ) ) );

    $wp_customize->add_setting( 'informacion', array(
        'type' => 'theme_mod',
        'default' => __( 'INFORMACIÓN PADRES DE FAMILIA&nbsp;', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'informacion', array(
        'label' => __( 'Informacón Padres de Familia', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'pagina_informacion_padres_familia'
    ));

    $wp_customize->add_setting( 'link_admisions', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_admisions', array(
        'label' => __( 'Link Admisiones', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_informacion_padres_familia'
    ));

    $wp_customize->add_setting( 'id_admisions', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_admisions', array(
        'label' => __( 'Imagen Admisiones', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_informacion_padres_familia'
    ) ) );

    $wp_customize->add_setting( 'link_circulars', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_circulars', array(
        'label' => __( 'Link Circulares y Comunicados', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_informacion_padres_familia'
    ));

    $wp_customize->add_setting( 'id_comunicados', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_comunicados', array(
        'label' => __( 'Imagen Circulares y Comunicados', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_informacion_padres_familia'
    ) ) );

    $wp_customize->add_setting( 'link_schoolweb', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_schoolweb', array(
        'label' => __( 'Link School Web', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_informacion_padres_familia'
    ));

    $wp_customize->add_setting( 'id_schoolweb', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_schoolweb', array(
        'label' => __( 'Imagen School Web', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_informacion_padres_familia'
    ) ) );

    $wp_customize->add_setting( 'link_biblioteca', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_biblioteca', array(
        'label' => __( 'Link Biblioteca', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_informacion_padres_familia'
    ));

    $wp_customize->add_setting( 'id_biblioteca', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_biblioteca', array(
        'label' => __( 'Imagen Biblioteca', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_informacion_padres_familia'
    ) ) );

    $wp_customize->add_setting( 'link_pse', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_pse', array(
        'label' => __( 'Link Pagos PSE', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_informacion_padres_familia'
    ));

    $wp_customize->add_setting( 'id_PSE', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_PSE', array(
        'label' => __( 'Imagen pagos PSE', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_informacion_padres_familia'
    ) ) );

    $wp_customize->add_setting( 'link_pild', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_pild', array(
        'label' => __( 'Link Pildoras Informativas', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_informacion_padres_familia'
    ));

    $wp_customize->add_setting( 'id_pild', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_pild', array(
        'label' => __( 'Imagen Pildoras Informativas', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_informacion_padres_familia'
    ) ) );

    $wp_customize->add_setting( 'link_tardes', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_tardes', array(
        'label' => __( 'Link Tardes Bartolinas', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_informacion_padres_familia'
    ));

    $wp_customize->add_setting( 'id_tardes', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_tardes', array(
        'label' => __( 'Imagen Tardes Bartolinas', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_informacion_padres_familia'
    ) ) );

    $wp_customize->add_setting( 'link_download', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_download', array(
        'label' => __( 'Link Descargar Recibo', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_informacion_padres_familia'
    ));

    $wp_customize->add_setting( 'id_download', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_download', array(
        'label' => __( 'Imagen Descarga Recibo', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_informacion_padres_familia'
    ) ) );

    $wp_customize->add_setting( 'fondo_gestion_humana_convenios', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_gestion_humana_convenios', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'convenios'
    ) ) );

    $wp_customize->add_setting( 'convenios_gestion', array(
        'type' => 'theme_mod',
        'default' => __( 'GESTIÓN HUMANA CONVENIOS', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'convenios_gestion', array(
        'label' => __( 'Gestión Humana Convenios', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'convenios'
    ));

    $wp_customize->add_setting( 'link_canapro', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_canapro', array(
        'label' => __( 'Link Canapro', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'convenios'
    ));

    $wp_customize->add_setting( 'id_canapro', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_canapro', array(
        'label' => __( 'Imagen Canapro', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'convenios'
    ) ) );

    $wp_customize->add_setting( 'link_colmedicos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_colmedicos', array(
        'label' => __( 'Link Colmedicos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'convenios'
    ));

    $wp_customize->add_setting( 'id_colmedicos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_colmedicos', array(
        'label' => __( 'Imagen Colmedicos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'convenios'
    ) ) );

    $wp_customize->add_setting( 'link_emi', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_emi', array(
        'label' => __( 'Link Emi', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'convenios'
    ));

    $wp_customize->add_setting( 'id_emi', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_emi', array(
        'label' => __( 'Imagen Emi', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'convenios'
    ) ) );

    $wp_customize->add_setting( 'link_olivos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_olivos', array(
        'label' => __( 'Link Olivos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'convenios'
    ));

    $wp_customize->add_setting( 'id_olivos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_olivos', array(
        'label' => __( 'Imagen Olivos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'convenios'
    ) ) );

    $wp_customize->add_setting( 'link_compensar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_compensar', array(
        'label' => __( 'Link Compensar', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'convenios'
    ));

    $wp_customize->add_setting( 'id_compensar', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_compensar', array(
        'label' => __( 'Imagen Compensar', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'convenios'
    ) ) );

    $wp_customize->add_setting( 'link_coomeva', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_coomeva', array(
        'label' => __( 'Link Coomeva', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'convenios'
    ));

    $wp_customize->add_setting( 'id_coomeva', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_coomeva', array(
        'label' => __( 'Imagen Coomeva', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'convenios'
    ) ) );

    $wp_customize->add_setting( 'link_fecosba', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_fecosba', array(
        'label' => __( 'Link Fecosba', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'convenios'
    ));

    $wp_customize->add_setting( 'id_fecosba', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_fecosba', array(
        'label' => __( 'Imagen Fecosba', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'convenios'
    ) ) );

    $wp_customize->add_setting( 'link_37', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_37', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'convenios'
    ));

    $wp_customize->add_setting( 'id_37', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_37', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'convenios'
    ) ) );

    $wp_customize->add_setting( 'fondo_donaciones', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_donaciones', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_donaciones'
    ) ) );

    $wp_customize->add_setting( 'items_donac', array(
        'type' => 'theme_mod',
        'default' => __( 'RESPONSABILIDAD SOCIAL', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'items_donac', array(
        'label' => __( 'Responsabilidad Social', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'items_donaciones'
    ));

    $wp_customize->add_setting( 'link_plan_p', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_plan_p', array(
        'label' => __( 'Link Plan Padrino', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_donaciones'
    ));

    $wp_customize->add_setting( 'id_plan_p', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_plan_p', array(
        'label' => __( 'Imagen Plan Padrino', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_donaciones'
    ) ) );

    $wp_customize->add_setting( 'link_mayor_sonamos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_mayor_sonamos', array(
        'label' => __( 'Link Mayor que Soñamos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_donaciones'
    ));

    $wp_customize->add_setting( 'id_mayor_sonamos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_mayor_sonamos', array(
        'label' => __( 'Imagen Mayor que Soñamos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_donaciones'
    ) ) );

    $wp_customize->add_setting( 'link_54', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_54', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_donaciones'
    ));

    $wp_customize->add_setting( 'id_54', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_54', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_donaciones'
    ) ) );

    $wp_customize->add_setting( 'link_55', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_55', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_donaciones'
    ));

    $wp_customize->add_setting( 'id_55', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_55', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_donaciones'
    ) ) );

    $wp_customize->add_setting( 'link_56', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_56', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_donaciones'
    ));

    $wp_customize->add_setting( 'id_56', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_56', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_donaciones'
    ) ) );

    $wp_customize->add_setting( 'link_57', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_57', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_donaciones'
    ));

    $wp_customize->add_setting( 'id_57', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_57', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_donaciones'
    ) ) );

    $wp_customize->add_setting( 'link_58', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_58', array(
        'label' => __( 'Link Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_donaciones'
    ));

    $wp_customize->add_setting( 'id_58', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_58', array(
        'label' => __( 'Imagen Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_donaciones'
    ) ) );

    $wp_customize->add_setting( 'link_59', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_59', array(
        'label' => __( 'Link Nuevo Item 6', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_donaciones'
    ));

    $wp_customize->add_setting( 'id_59', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_59', array(
        'label' => __( 'Imagen Nuevo Item 6', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_donaciones'
    ) ) );

    $wp_customize->add_setting( 'fondo_items_politica', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_items_politica', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items-politica'
    ) ) );

    $wp_customize->add_setting( 'politica', array(
        'type' => 'theme_mod',
        'default' => __( 'RESPONSABILIDAD SOCIAL POLÍTICAS', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'politica', array(
        'label' => __( 'Items Politica', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'items-politica'
    ));

    $wp_customize->add_setting( 'link_nuestrahistoria', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_nuestrahistoria', array(
        'label' => __( 'Link Nuestra Historia', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items-politica'
    ));

    $wp_customize->add_setting( 'id_nuestrahistoria', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_nuestrahistoria', array(
        'label' => __( 'Imagen Nuestra Historia', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items-politica'
    ) ) );

    $wp_customize->add_setting( 'link_territortio', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_territortio', array(
        'label' => __( 'Link Nuestro Territorio', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items-politica'
    ));

    $wp_customize->add_setting( 'id_territorio', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_territorio', array(
        'label' => __( 'Imagen Nuestro Territorio', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items-politica'
    ) ) );

    $wp_customize->add_setting( 'link_60', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_60', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items-politica'
    ));

    $wp_customize->add_setting( 'id_60', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_60', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items-politica'
    ) ) );

    $wp_customize->add_setting( 'link_61', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_61', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items-politica'
    ));

    $wp_customize->add_setting( 'id_61', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_61', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items-politica'
    ) ) );

    $wp_customize->add_setting( 'link_62', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_62', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items-politica'
    ));

    $wp_customize->add_setting( 'id_62', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_62', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items-politica'
    ) ) );

    $wp_customize->add_setting( 'link_63', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_63', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items-politica'
    ));

    $wp_customize->add_setting( 'id_63', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_63', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items-politica'
    ) ) );

    $wp_customize->add_setting( 'link_64', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_64', array(
        'label' => __( 'Link Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items-politica'
    ));

    $wp_customize->add_setting( 'id_64', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_64', array(
        'label' => __( 'Imagen Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items-politica'
    ) ) );

    $wp_customize->add_setting( 'fondo_programas_pastoral', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_programas_pastoral', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_programas_patoral'
    ) ) );

    $wp_customize->add_setting( 'link_', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_programas_patoral'
    ));

    $wp_customize->add_setting( 'link_ecc', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_ecc', array(
        'label' => __( 'Link Encuentros con Cristo', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_programas_patoral'
    ));

    $wp_customize->add_setting( 'id_ecc', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_ecc', array(
        'label' => __( 'Imagen Encuentros con Cristo', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_programas_patoral'
    ) ) );

    $wp_customize->add_setting( 'link_fas', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_fas', array(
        'label' => __( 'Link FAS', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_programas_patoral'
    ));

    $wp_customize->add_setting( 'id_fas', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_fas', array(
        'label' => __( 'Imagen FAS', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_programas_patoral'
    ) ) );

    $wp_customize->add_setting( 'link_eppi', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_eppi', array(
        'label' => __( 'Link EPPI', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_programas_patoral'
    ));

    $wp_customize->add_setting( 'id_eppi', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_eppi', array(
        'label' => __( 'Imagen EPPI', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_programas_patoral'
    ) ) );

    $wp_customize->add_setting( 'link_ciculares', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_ciculares', array(
        'label' => __( 'Link Circulares', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_programas_patoral'
    ));

    $wp_customize->add_setting( 'id_circulares', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_circulares', array(
        'label' => __( 'Imagen Circulares', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_programas_patoral'
    ) ) );

    $wp_customize->add_setting( 'link_ejercicios_espirituales', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_ejercicios_espirituales', array(
        'label' => __( 'Link Ejercicios Espirituales', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_programas_patoral'
    ));

    $wp_customize->add_setting( 'id_ejercicios_es', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_ejercicios_es', array(
        'label' => __( 'Imagen Ejercicios Espirituales', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_programas_patoral'
    ) ) );

    $wp_customize->add_setting( 'link_64', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_64', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_programas_patoral'
    ));

    $wp_customize->add_setting( 'id_64', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_64', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_programas_patoral'
    ) ) );

    $wp_customize->add_setting( 'link_65', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_65', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_programas_patoral'
    ));

    $wp_customize->add_setting( 'id_65', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_65', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_programas_patoral'
    ) ) );

    $wp_customize->add_setting( 'link_66', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_66', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_programas_patoral'
    ));

    $wp_customize->add_setting( 'id_66', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_66', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_programas_patoral'
    ) ) );

    $wp_customize->add_setting( 'fondo_proyectos_pastoral', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_proyectos_pastoral', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_pastoral'
    ) ) );

    $wp_customize->add_setting( 'proyectos_past', array(
        'type' => 'theme_mod',
        'default' => __( 'PROYECTOS PASTORAL', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'proyectos_past', array(
        'label' => __( 'Proyectos Pastoral', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'items_proyectos_pastoral'
    ));

    $wp_customize->add_setting( 'link_campamento', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_campamento', array(
        'label' => __( 'Link Campamento Misión', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_pastoral'
    ));

    $wp_customize->add_setting( 'id_campamento_mision', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_campamento_mision', array(
        'label' => __( 'Imagen Campamento Misión', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_circulares', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_circulares', array(
        'label' => __( 'Link Circulares', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_pastoral'
    ));

    $wp_customize->add_setting( 'id_circulares', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_circulares', array(
        'label' => __( 'Imagen Circulares', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_pastoral_sacramental', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_pastoral_sacramental', array(
        'label' => __( 'Link Patoral Sacramental', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_pastoral'
    ));

    $wp_customize->add_setting( 'id_sacramental', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_sacramental', array(
        'label' => __( 'Imagen Patoral Sacramental', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_grupos_apostolicos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_grupos_apostolicos', array(
        'label' => __( 'Link Grupos Apostolicos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_pastoral'
    ));

    $wp_customize->add_setting( 'id_apostolicos_grupos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_apostolicos_grupos', array(
        'label' => __( 'Imagen Grupos Apostolicos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_curso_taller', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_curso_taller', array(
        'label' => __( 'Link Curso Taller', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_pastoral'
    ));

    $wp_customize->add_setting( 'id_curso_taller', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_curso_taller', array(
        'label' => __( 'Imagen Curso Taller', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_celebraciones', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_celebraciones', array(
        'label' => __( 'Link Celebraciones Liturgicas', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_pastoral'
    ));

    $wp_customize->add_setting( 'id_liturgicas_celebraciones', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_liturgicas_celebraciones', array(
        'label' => __( 'Imagen Celebraciones Liturgicas', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_70', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_70', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_pastoral'
    ));

    $wp_customize->add_setting( 'id_70', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_70', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_71', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_71', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_pastoral'
    ));

    $wp_customize->add_setting( 'id_71', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_71', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_pastoral'
    ) ) );

    $wp_customize->add_setting( 'fondo_padres_familia', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_padres_familia', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'padres_familia'
    ) ) );

    $wp_customize->add_setting( 'page_padres_familia', array(
        'type' => 'theme_mod',
        'default' => __( 'PADRES DE FAMILIA', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'page_padres_familia', array(
        'label' => __( 'Padres de Familia', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'padres_familia'
    ));

    $wp_customize->add_setting( 'link_pastoral', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_pastoral', array(
        'label' => __( 'Link Pastoral', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'padres_familia'
    ));

    $wp_customize->add_setting( 'id_pastoral', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_pastoral', array(
        'label' => __( 'Imagen Pastoral', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'padres_familia'
    ) ) );

    $wp_customize->add_setting( 'link_school_web', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_school_web', array(
        'label' => __( 'Link School Web', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'padres_familia'
    ));

    $wp_customize->add_setting( 'id_school_web', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_school_web', array(
        'label' => __( 'Imagen School Web', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'padres_familia'
    ) ) );

    $wp_customize->add_setting( 'link_circulares_comunicados', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_circulares_comunicados', array(
        'label' => __( 'Link Circulares y Comunicados', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'padres_familia'
    ));

    $wp_customize->add_setting( 'id_circulares_comunicados', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_circulares_comunicados', array(
        'label' => __( 'Imagen Circulares y Comunicados', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'padres_familia'
    ) ) );

    $wp_customize->add_setting( 'link_pildoras', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_pildoras', array(
        'label' => __( 'Link Pildoras Informativas', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'padres_familia'
    ));

    $wp_customize->add_setting( 'id_pildoras', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_pildoras', array(
        'label' => __( 'Imagen Pildoras Informativas', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'padres_familia'
    ) ) );

    $wp_customize->add_setting( 'link_pse', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_pse', array(
        'label' => __( 'Link PSE', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'padres_familia'
    ));

    $wp_customize->add_setting( 'id_pse', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_pse', array(
        'label' => __( 'Imagen PSE', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'padres_familia'
    ) ) );

    $wp_customize->add_setting( 'link_admisiones', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_admisiones', array(
        'label' => __( 'Link Admisiones', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'padres_familia'
    ));

    $wp_customize->add_setting( 'id_admisiones', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_admisiones', array(
        'label' => __( 'Imagen Admisiones', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'padres_familia'
    ) ) );

    $wp_customize->add_setting( 'link_documentos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_documentos', array(
        'label' => __( 'Link Documentos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'padres_familia'
    ));

    $wp_customize->add_setting( 'id_documentos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_documentos', array(
        'label' => __( 'Imagen Documentos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'padres_familia'
    ) ) );

    $wp_customize->add_setting( 'link_asomayor', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_asomayor', array(
        'label' => __( 'Link Asomayor', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'padres_familia'
    ));

    $wp_customize->add_setting( 'id_asomayor', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_asomayor', array(
        'label' => __( 'Imagen Asomayor', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'padres_familia'
    ) ) );

    $wp_customize->add_setting( 'fondo_page_default', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_page_default', array(
        'label' => __( 'Fondo Cuadros Page Template', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'sanbartolome_theme_default_cs'
    ) ) );

    $wp_customize->add_setting( 'fondo_pastoral', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_pastoral', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_pastoral'
    ) ) );

    $wp_customize->add_setting( 'pastoral_page', array(
        'type' => 'theme_mod',
        'default' => __( 'PASTORAL', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'pastoral_page', array(
        'label' => __( 'Pastoral', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'page_pastoral'
    ));

    $wp_customize->add_setting( 'link_programas', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_programas', array(
        'label' => __( 'Link Programas', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_pastoral'
    ));

    $wp_customize->add_setting( 'id_programas', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_programas', array(
        'label' => __( 'Imagen Programas', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_project_pastoralista', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_project_pastoralista', array(
        'label' => __( 'Link Proyectos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_pastoral'
    ));

    $wp_customize->add_setting( 'id_project_pastoralista', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_project_pastoralista', array(
        'label' => __( 'Imagen Proyectos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_sacrament', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_sacrament', array(
        'label' => __( 'Link Pastoral Sacramental', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_pastoral'
    ));

    $wp_customize->add_setting( 'id_sacrament', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_sacrament', array(
        'label' => __( 'Imagen Pastoral Sacramental', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_celebraciones_litur', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_celebraciones_litur', array(
        'label' => __( 'Link Celebraciones Liturgicas', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_pastoral'
    ));

    $wp_customize->add_setting( 'id_celebrac_litur', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_celebrac_litur', array(
        'label' => __( 'Imagen Celebraciones Liturgicas', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_85', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_85', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_pastoral'
    ));

    $wp_customize->add_setting( 'id_85', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_85', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_86', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_86', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_pastoral'
    ));

    $wp_customize->add_setting( 'id_86', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_86', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_87', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_87', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_pastoral'
    ));

    $wp_customize->add_setting( 'id_87', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_87', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_88', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_88', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'page_pastoral'
    ));

    $wp_customize->add_setting( 'id_88', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_88', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'page_pastoral'
    ) ) );

    $wp_customize->add_setting( 'fondo_pagos_admisiones', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_pagos_admisiones', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pago_admisiones'
    ) ) );

    $wp_customize->add_setting( 'pago_admi', array(
        'type' => 'theme_mod',
        'default' => __( 'PAGOS ADMISIONES', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'pago_admi', array(
        'label' => __( 'Pago Admisiones', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'pagina_pago_admisiones'
    ));

    $wp_customize->add_setting( 'link_ps', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_ps', array(
        'label' => __( 'Link PSE', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pago_admisiones'
    ));

    $wp_customize->add_setting( 'id_ps', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_ps', array(
        'label' => __( 'Imagen PSE', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pago_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_instruct', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_instruct', array(
        'label' => __( 'Link Instructivo', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pago_admisiones'
    ));

    $wp_customize->add_setting( 'id_instruct', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_instruct', array(
        'label' => __( 'Imagen Instructivo', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pago_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_72', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_72', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pago_admisiones'
    ));

    $wp_customize->add_setting( 'id_72', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_72', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pago_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_73', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_73', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pago_admisiones'
    ));

    $wp_customize->add_setting( 'id_73', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_73', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pago_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_74', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_74', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pago_admisiones'
    ));

    $wp_customize->add_setting( 'id_74', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_74', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pago_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_75', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_75', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pago_admisiones'
    ));

    $wp_customize->add_setting( 'id_75', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_75', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pago_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_76', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_76', array(
        'label' => __( 'Link Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pago_admisiones'
    ));

    $wp_customize->add_setting( 'id_76', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_76', array(
        'label' => __( 'Imagen Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pago_admisiones'
    ) ) );

    $wp_customize->add_setting( 'link_77', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_77', array(
        'label' => __( 'Link Nuevo Item 6', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pago_admisiones'
    ));

    $wp_customize->add_setting( 'id_77', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_77', array(
        'label' => __( 'Imagen Nuevo Item 6', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pago_admisiones'
    ) ) );

    $wp_customize->add_setting( 'fondo_exalumnos_pastoral', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_exalumnos_pastoral', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pastoral_exalumnos'
    ) ) );

    $wp_customize->add_setting( 'pastoral_exalumnos', array(
        'type' => 'theme_mod',
        'default' => __( 'EXALUMNOS PASTORAL', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'pastoral_exalumnos', array(
        'label' => __( 'Exalumnos Pastoral', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'pagina_pastoral_exalumnos'
    ));

    $wp_customize->add_setting( 'link_acompañamiento_espiritual', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_acompañamiento_espiritual', array(
        'label' => __( 'Link Acompañamiento Espiritual', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pastoral_exalumnos'
    ));

    $wp_customize->add_setting( 'id_acompañamientos_espiritual', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_acompañamientos_espiritual', array(
        'label' => __( 'Imagen Acompañamiento Espiritual', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pastoral_exalumnos'
    ) ) );

    $wp_customize->add_setting( 'link_pastoral_sacram', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_pastoral_sacram', array(
        'label' => __( 'Link Pastoral Sacramental', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pastoral_exalumnos'
    ));

    $wp_customize->add_setting( 'id_ Pastoral Sacram', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_ Pastoral Sacram', array(
        'label' => __( 'Imagen  Pastoral Sacramental', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pastoral_exalumnos'
    ) ) );

    $wp_customize->add_setting( 'link_formacion_liderazgo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_formacion_liderazgo', array(
        'label' => __( 'Link Formación en Liderazgo', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pastoral_exalumnos'
    ));

    $wp_customize->add_setting( 'id_formacion_liderazgo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_formacion_liderazgo', array(
        'label' => __( 'Imagen Formación en Liderazgo', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pastoral_exalumnos'
    ) ) );

    $wp_customize->add_setting( 'link_sabados_espiritualidad', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_sabados_espiritualidad', array(
        'label' => __( 'Link Sabados de Espritualidad', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pastoral_exalumnos'
    ));

    $wp_customize->add_setting( 'id_espiritualidad', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_espiritualidad', array(
        'label' => __( 'Imagen Sabados de Espiritualidad', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pastoral_exalumnos'
    ) ) );

    $wp_customize->add_setting( 'link_78', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_78', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pastoral_exalumnos'
    ));

    $wp_customize->add_setting( 'id_78', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_78', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pastoral_exalumnos'
    ) ) );

    $wp_customize->add_setting( 'link_79', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_79', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pastoral_exalumnos'
    ));

    $wp_customize->add_setting( 'id_79', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_79', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pastoral_exalumnos'
    ) ) );

    $wp_customize->add_setting( 'link_80', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_80', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pastoral_exalumnos'
    ));

    $wp_customize->add_setting( 'id_80', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_80', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pastoral_exalumnos'
    ) ) );

    $wp_customize->add_setting( 'link_81', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_81', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_pastoral_exalumnos'
    ));

    $wp_customize->add_setting( 'id_81', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_81', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_pastoral_exalumnos'
    ) ) );

    $wp_customize->add_setting( 'fondo_pastoral_padres_familia', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_pastoral_padres_familia', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_padres_familia_pastoral'
    ) ) );

    $wp_customize->add_setting( 'padres_pastoral', array(
        'type' => 'theme_mod',
        'default' => __( 'PADRES DE FAMILIA PASTORAL', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'padres_pastoral', array(
        'label' => __( 'Padres de Familia Pastoral', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'pagina_padres_familia_pastoral'
    ));

    $wp_customize->add_setting( 'link_esprit_acom', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_esprit_acom', array(
        'label' => __( 'Link Acompañamiento Espiritual', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_padres_familia_pastoral'
    ));

    $wp_customize->add_setting( 'id_espirit_acom', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_espirit_acom', array(
        'label' => __( 'Imagen Acompañamiento Espiritual', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_padres_familia_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_past_sacram', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_past_sacram', array(
        'label' => __( 'Link Pastoral Sacramental', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_padres_familia_pastoral'
    ));

    $wp_customize->add_setting( 'id_past_sacram', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_past_sacram', array(
        'label' => __( 'Imagen Pastoral Sacramental', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_padres_familia_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_circ', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_circ', array(
        'label' => __( 'Link Circulares', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_padres_familia_pastoral'
    ));

    $wp_customize->add_setting( 'id_circ', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_circ', array(
        'label' => __( 'Imagen Circulares', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_padres_familia_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_saturday', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_saturday', array(
        'label' => __( 'Link Sabados de Espiritualidad', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_padres_familia_pastoral'
    ));

    $wp_customize->add_setting( 'id_saturday', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_saturday', array(
        'label' => __( 'Imagen Sabados de Espiritualidad', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_padres_familia_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_81', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_81', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_padres_familia_pastoral'
    ));

    $wp_customize->add_setting( 'id_81', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_81', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_padres_familia_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_82', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_82', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_padres_familia_pastoral'
    ));

    $wp_customize->add_setting( 'id_82', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_82', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_padres_familia_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_83', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_83', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_padres_familia_pastoral'
    ));

    $wp_customize->add_setting( 'id_83', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_83', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_padres_familia_pastoral'
    ) ) );

    $wp_customize->add_setting( 'link_84', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_84', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_padres_familia_pastoral'
    ));

    $wp_customize->add_setting( 'id_84', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_84', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_padres_familia_pastoral'
    ) ) );

    $wp_customize->add_setting( 'fondo_profesores_administrativos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_profesores_administrativos', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_profesores_administrativos'
    ) ) );

    $wp_customize->add_setting( 'profesores-admin', array(
        'type' => 'theme_mod',
        'default' => __( 'PROFESORES Y ADMINISTRATIVOS', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'profesores-admin', array(
        'label' => __( 'Profesores y Administrativos', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'pagina_profesores_administrativos'
    ));

    $wp_customize->add_setting( 'link_school', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_school', array(
        'label' => __( 'Link School Pack', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_profesores_administrativos'
    ));

    $wp_customize->add_setting( 'id_school', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_school', array(
        'label' => __( 'Imagen School Pack', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_profesores_administrativos'
    ) ) );

    $wp_customize->add_setting( 'link_email', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_email', array(
        'label' => __( 'Link Correo Institucional', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_profesores_administrativos'
    ));

    $wp_customize->add_setting( 'id_email', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_email', array(
        'label' => __( 'Imagen Correo Institucional', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_profesores_administrativos'
    ) ) );

    $wp_customize->add_setting( 'link_quality', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_quality', array(
        'label' => __( 'Link Calidad', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_profesores_administrativos'
    ));

    $wp_customize->add_setting( 'id_quality', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_quality', array(
        'label' => __( 'Imagen Calidad', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_profesores_administrativos'
    ) ) );

    $wp_customize->add_setting( 'link_management', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_management', array(
        'label' => __( 'Link Gestión Humana', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_profesores_administrativos'
    ));

    $wp_customize->add_setting( 'id_management', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_management', array(
        'label' => __( 'Imagen Gestión Humana', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_profesores_administrativos'
    ) ) );

    $wp_customize->add_setting( 'link_94', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_94', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_profesores_administrativos'
    ));

    $wp_customize->add_setting( 'id_94', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_94', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_profesores_administrativos'
    ) ) );

    $wp_customize->add_setting( 'link_95', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_95', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_profesores_administrativos'
    ));

    $wp_customize->add_setting( 'id_95', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_95', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_profesores_administrativos'
    ) ) );

    $wp_customize->add_setting( 'link_96', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_96', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_profesores_administrativos'
    ));

    $wp_customize->add_setting( 'id_96', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_96', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_profesores_administrativos'
    ) ) );

    $wp_customize->add_setting( 'link_97', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_97', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_profesores_administrativos'
    ));

    $wp_customize->add_setting( 'id_97', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_97', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_profesores_administrativos'
    ) ) );

    $wp_customize->add_setting( 'fondo_profesores_administrativos_items', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_profesores_administrativos_items', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_profes_administrativos'
    ) ) );

    $wp_customize->add_setting( 'profes_admin_items', array(
        'type' => 'theme_mod',
        'default' => __( 'ITEMS PROFESROES Y ADMINISTRATIVOS', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'profes_admin_items', array(
        'label' => __( 'Items Profesores y Administrativos', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'items_profes_administrativos'
    ));

    $wp_customize->add_setting( 'link_schoolpack', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_schoolpack', array(
        'label' => __( 'Link School Pack', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_profes_administrativos'
    ));

    $wp_customize->add_setting( 'id_school_pack', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_school_pack', array(
        'label' => __( 'Imagen School Pack', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_profes_administrativos'
    ) ) );

    $wp_customize->add_setting( 'link_correo_insti', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_correo_insti', array(
        'label' => __( 'Link Correo Institucional', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_profes_administrativos'
    ));

    $wp_customize->add_setting( 'id_correo_instit', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_correo_instit', array(
        'label' => __( 'Imagen Correo Institucional', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_profes_administrativos'
    ) ) );

    $wp_customize->add_setting( 'link_gestion_integral', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_gestion_integral', array(
        'label' => __( 'Link Sistema de Gestión Integral', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_profes_administrativos'
    ));

    $wp_customize->add_setting( 'id_sistemas_integral', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_sistemas_integral', array(
        'label' => __( 'Imagen Sistema de Gestión Integral', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_profes_administrativos'
    ) ) );

    $wp_customize->add_setting( 'link_89', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_89', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_profes_administrativos'
    ));

    $wp_customize->add_setting( 'id_89', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_89', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_profes_administrativos'
    ) ) );

    $wp_customize->add_setting( 'link_90', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_90', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_profes_administrativos'
    ));

    $wp_customize->add_setting( 'id_90', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_90', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_profes_administrativos'
    ) ) );

    $wp_customize->add_setting( 'link_91', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_91', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_profes_administrativos'
    ));

    $wp_customize->add_setting( 'id_91', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_91', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_profes_administrativos'
    ) ) );

    $wp_customize->add_setting( 'link_92', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_92', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_profes_administrativos'
    ));

    $wp_customize->add_setting( 'id_92', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_92', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_profes_administrativos'
    ) ) );

    $wp_customize->add_setting( 'link_93', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_93', array(
        'label' => __( 'Link Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_profes_administrativos'
    ));

    $wp_customize->add_setting( 'id_93', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_93', array(
        'label' => __( 'Imagen Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_profes_administrativos'
    ) ) );

    $wp_customize->add_setting( 'fondo_responsabilidad_social', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_responsabilidad_social', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_responsabilidad'
    ) ) );

    $wp_customize->add_setting( 'responsabilidad_page', array(
        'type' => 'theme_mod',
        'default' => __( 'RESPONSABILIDAD SOCIAL', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'responsabilidad_page', array(
        'label' => __( 'Responsabilidad Social', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'pagina_responsabilidad'
    ));

    $wp_customize->add_setting( 'link_whatsapp_responsabilidad', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_whatsapp_responsabilidad', array(
        'label' => __( 'Link Contactanos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_responsabilidad'
    ));

    $wp_customize->add_setting( 'id_whatsapp_responsabilidad', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_whatsapp_responsabilidad', array(
        'label' => __( 'Imagen Contactanos Whatsapp', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_responsabilidad'
    ) ) );

    $wp_customize->add_setting( 'link_donaciones', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_donaciones', array(
        'label' => __( 'Link Donaciones', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_responsabilidad'
    ));

    $wp_customize->add_setting( 'id_donaciones', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_donaciones', array(
        'label' => __( 'Imagen Donaciones', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_responsabilidad'
    ) ) );

    $wp_customize->add_setting( 'link_politica', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_politica', array(
        'label' => __( 'Link Politica', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_responsabilidad'
    ));

    $wp_customize->add_setting( 'id_politica', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_politica', array(
        'label' => __( 'Imagen Politica', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_responsabilidad'
    ) ) );

    $wp_customize->add_setting( 'link_project', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_project', array(
        'label' => __( 'Link Proyectos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_responsabilidad'
    ));

    $wp_customize->add_setting( 'id_project', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_project', array(
        'label' => __( 'Imagen Proyectos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_responsabilidad'
    ) ) );

    $wp_customize->add_setting( 'link_98', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_98', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_responsabilidad'
    ));

    $wp_customize->add_setting( 'id_98', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_98', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_responsabilidad'
    ) ) );

    $wp_customize->add_setting( 'link_99', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_99', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_responsabilidad'
    ));

    $wp_customize->add_setting( 'id_99', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_99', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_responsabilidad'
    ) ) );

    $wp_customize->add_setting( 'link_100', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_100', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_responsabilidad'
    ));

    $wp_customize->add_setting( 'id_100', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_100', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_responsabilidad'
    ) ) );

    $wp_customize->add_setting( 'link_101', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_101', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_responsabilidad'
    ));

    $wp_customize->add_setting( 'id_101', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_101', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_responsabilidad'
    ) ) );

    $wp_customize->add_setting( 'fondo_sae', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_sae', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_sae'
    ) ) );

    $wp_customize->add_setting( 'page_sae', array(
        'type' => 'theme_mod',
        'default' => __( 'SAE', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'page_sae', array(
        'label' => __( 'SAE', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'pagina_sae'
    ));

    $wp_customize->add_setting( 'link_106', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_106', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_sae'
    ));

    $wp_customize->add_setting( 'id_106', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_106', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_sae'
    ) ) );

    $wp_customize->add_setting( 'link_107', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_107', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_sae'
    ));

    $wp_customize->add_setting( 'id_107', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_107', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_sae'
    ) ) );

    $wp_customize->add_setting( 'link_108', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_108', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_sae'
    ));

    $wp_customize->add_setting( 'id_108', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_108', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_sae'
    ) ) );

    $wp_customize->add_setting( 'link_109', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_109', array(
        'label' => __( 'Link Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_sae'
    ));

    $wp_customize->add_setting( 'id_109', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_109', array(
        'label' => __( 'Imagen Nuevo Item 4', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_sae'
    ) ) );

    $wp_customize->add_setting( 'link_110', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_110', array(
        'label' => __( 'Link Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_sae'
    ));

    $wp_customize->add_setting( 'id_110', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_110', array(
        'label' => __( 'Imagen Nuevo Item 5', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_sae'
    ) ) );

    $wp_customize->add_setting( 'link_111', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_111', array(
        'label' => __( 'Link Nuevo Item 6', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_sae'
    ));

    $wp_customize->add_setting( 'id_111', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_111', array(
        'label' => __( 'Imagen Nuevo Item 6', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_sae'
    ) ) );

    $wp_customize->add_setting( 'link_112', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_112', array(
        'label' => __( 'Link Nuevo Item 7', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_sae'
    ));

    $wp_customize->add_setting( 'id_112', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_112', array(
        'label' => __( 'Imagen Nuevo Item 7', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_sae'
    ) ) );

    $wp_customize->add_setting( 'link_113', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_113', array(
        'label' => __( 'Link Nuevo Item 8', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'pagina_sae'
    ));

    $wp_customize->add_setting( 'id_113', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_113', array(
        'label' => __( 'Imagen Nuevo Item 8', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'pagina_sae'
    ) ) );

    $wp_customize->add_setting( 'fondo_proyectos_responsabilidad_social', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'fondo_proyectos_responsabilidad_social', array(
        'label' => __( 'Fondo Cuadros', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_responsabilidad_social'
    ) ) );

    $wp_customize->add_setting( 'items_responsabiliad', array(
        'type' => 'theme_mod',
        'default' => __( 'PROYECTOS RESPONSABILIDAD SOCIAL', 'sanbartolome_theme' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'items_responsabiliad', array(
        'label' => __( 'Items Responsabilidad Social', 'sanbartolome_theme' ),
        'type' => 'text',
        'section' => 'items_proyectos_responsabilidad_social'
    ));

    $wp_customize->add_setting( 'link_canal_cocina', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_canal_cocina', array(
        'label' => __( 'Link Canal de Cocina', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_responsabilidad_social'
    ));

    $wp_customize->add_setting( 'id_cocina', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_cocina', array(
        'label' => __( 'Imagen Canal de Cocina', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_responsabilidad_social'
    ) ) );

    $wp_customize->add_setting( 'link_cursos', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_cursos', array(
        'label' => __( 'Link Cursos Universidad Javeriana', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_responsabilidad_social'
    ));

    $wp_customize->add_setting( 'id_cursos_javeriana', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_cursos_javeriana', array(
        'label' => __( 'Imagen Cursos Universidad Javeriana', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_responsabilidad_social'
    ) ) );

    $wp_customize->add_setting( 'link_filarmonica', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_filarmonica', array(
        'label' => __( 'Link Filarmonica', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_responsabilidad_social'
    ));

    $wp_customize->add_setting( 'id_filarmonica', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_filarmonica', array(
        'label' => __( 'Imagen Filarmonica', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_responsabilidad_social'
    ) ) );

    $wp_customize->add_setting( 'link_conversatorios', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_conversatorios', array(
        'label' => __( 'Link Conversatorios', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_responsabilidad_social'
    ));

    $wp_customize->add_setting( 'id_conversatorio', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_conversatorio', array(
        'label' => __( 'Imagen Conversatorios', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_responsabilidad_social'
    ) ) );

    $wp_customize->add_setting( 'link_sabados', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_sabados', array(
        'label' => __( 'Link Sabados Ignacianos', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_responsabilidad_social'
    ));

    $wp_customize->add_setting( 'id_sabados', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_sabados', array(
        'label' => __( 'Imagen Sabados Ignacianos', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_responsabilidad_social'
    ) ) );

    $wp_customize->add_setting( 'link_67', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_67', array(
        'label' => __( 'Link Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_responsabilidad_social'
    ));

    $wp_customize->add_setting( 'id_67', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_67', array(
        'label' => __( 'Imagen Nuevo Item 1', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_responsabilidad_social'
    ) ) );

    $wp_customize->add_setting( 'link_68', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_68', array(
        'label' => __( 'Link Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_responsabilidad_social'
    ));

    $wp_customize->add_setting( 'id_68', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_68', array(
        'label' => __( 'Imagen Nuevo Item 2', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_responsabilidad_social'
    ) ) );

    $wp_customize->add_setting( 'link_69', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link_69', array(
        'label' => __( 'Link Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'url',
        'section' => 'items_proyectos_responsabilidad_social'
    ));

    $wp_customize->add_setting( 'id_69', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'id_69', array(
        'label' => __( 'Imagen Nuevo Item 3', 'sanbartolome_theme' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'items_proyectos_responsabilidad_social'
    ) ) );

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'sanbartolome_theme_customize_register' );
endif;// sanbartolome_theme_customize_register


if ( ! function_exists( 'sanbartolome_theme_enqueue_scripts' ) ) :
    function sanbartolome_theme_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, null, true);

    wp_deregister_script( 'sanbartolome_theme-bootstrap' );
    wp_enqueue_script( 'sanbartolome_theme-bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'sanbartolome_theme-smartforms' );
    wp_enqueue_script( 'sanbartolome_theme-smartforms', get_template_directory_uri() . '/assets/js/smart-forms.min.js', false, null, true);

    wp_deregister_script( 'sanbartolome_theme-bsinit' );
    wp_enqueue_script( 'sanbartolome_theme-bsinit', get_template_directory_uri() . '/assets/js/bs-init.js', false, null, true);

    wp_deregister_script( 'sanbartolome_theme-contactformvmodalfullwithgooglemap' );
    wp_enqueue_script( 'sanbartolome_theme-contactformvmodalfullwithgooglemap', get_template_directory_uri() . '/assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js', false, null, true);

    wp_deregister_script( 'sanbartolome_theme-fixednavbarstartingwithtransparency' );
    wp_enqueue_script( 'sanbartolome_theme-fixednavbarstartingwithtransparency', get_template_directory_uri() . '/assets/js/Fixed-navbar-starting-with-transparency.js', false, null, true);

    wp_register_script( 'inline-script-1', '', [], '', true );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', 'var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src=\'https://embed.tawk.to/5efbf4b74a7c6258179ba72f/1ecnajuc8\';
                s1.charset=\'UTF-8\';
                s1.setAttribute(\'crossorigin\',\'*\');
                s0.parentNode.insertBefore(s1,s0);
                })();');

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'sanbartolome_theme-bootstrap' );
    wp_enqueue_style( 'sanbartolome_theme-bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-style' );
    wp_enqueue_style( 'sanbartolome_theme-style', 'https://fonts.googleapis.com/css?family=Cookie', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-gothic' );
    wp_enqueue_style( 'sanbartolome_theme-gothic', get_template_directory_uri() . '/assets/css/gothic.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-style-1' );
    wp_enqueue_style( 'sanbartolome_theme-style-1', 'https://fonts.googleapis.com/css?family=Lora', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-fontawesome' );
    wp_enqueue_style( 'sanbartolome_theme-fontawesome', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-ionicons' );
    wp_enqueue_style( 'sanbartolome_theme-ionicons', get_template_directory_uri() . '/assets/fonts/ionicons.min.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-fixednavbarstartingwithtransparency' );
    wp_enqueue_style( 'sanbartolome_theme-fixednavbarstartingwithtransparency', get_template_directory_uri() . '/assets/css/Fixed-navbar-starting-with-transparency-1.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-fixednavbarstartingwithtransparency-1' );
    wp_enqueue_style( 'sanbartolome_theme-fixednavbarstartingwithtransparency-1', get_template_directory_uri() . '/assets/css/Fixed-navbar-starting-with-transparency.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-articleclean' );
    wp_enqueue_style( 'sanbartolome_theme-articleclean', get_template_directory_uri() . '/assets/css/Article-Clean.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-articlelist' );
    wp_enqueue_style( 'sanbartolome_theme-articlelist', get_template_directory_uri() . '/assets/css/Article-List.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-contactformclean' );
    wp_enqueue_style( 'sanbartolome_theme-contactformclean', get_template_directory_uri() . '/assets/css/Contact-Form-Clean.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-contactformvmodalfullwithgooglemap' );
    wp_enqueue_style( 'sanbartolome_theme-contactformvmodalfullwithgooglemap', get_template_directory_uri() . '/assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-footer_' );
    wp_enqueue_style( 'sanbartolome_theme-footer_', get_template_directory_uri() . '/assets/css/footer_2021-1.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-footer_-1' );
    wp_enqueue_style( 'sanbartolome_theme-footer_-1', get_template_directory_uri() . '/assets/css/footer_2021.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-footer_icontec_actualizado' );
    wp_enqueue_style( 'sanbartolome_theme-footer_icontec_actualizado', get_template_directory_uri() . '/assets/css/footer_icontec_actualizado.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-footerdark' );
    wp_enqueue_style( 'sanbartolome_theme-footerdark', get_template_directory_uri() . '/assets/css/Footer-Dark.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-footermayorsanbartolome' );
    wp_enqueue_style( 'sanbartolome_theme-footermayorsanbartolome', get_template_directory_uri() . '/assets/css/Footer-Mayor-San-Bartolome.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-animate' );
    wp_enqueue_style( 'sanbartolome_theme-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-navigationclean' );
    wp_enqueue_style( 'sanbartolome_theme-navigationclean', get_template_directory_uri() . '/assets/css/Navigation-Clean-1.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-navigationclean-1' );
    wp_enqueue_style( 'sanbartolome_theme-navigationclean-1', get_template_directory_uri() . '/assets/css/Navigation-Clean.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-navigationmenu' );
    wp_enqueue_style( 'sanbartolome_theme-navigationmenu', get_template_directory_uri() . '/assets/css/Navigation-Menu.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-prettyfooter' );
    wp_enqueue_style( 'sanbartolome_theme-prettyfooter', get_template_directory_uri() . '/assets/css/Pretty-Footer.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-styles' );
    wp_enqueue_style( 'sanbartolome_theme-styles', get_template_directory_uri() . '/assets/css/styles.css', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-style-2' );
    wp_enqueue_style( 'sanbartolome_theme-style-2', 'https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-style-3' );
    wp_enqueue_style( 'sanbartolome_theme-style-3', 'https://fonts.googleapis.com/css?family=Average&display=swap', false, null, 'all');

    wp_deregister_style( 'sanbartolome_theme-style-4' );
    wp_enqueue_style( 'sanbartolome_theme-style-4', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'sanbartolome_theme_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_smart_navwalker.php";

    /* Pinegrow generated Include Resources End */
?>