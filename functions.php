<?php
/**
 * The main template
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 * 
 * @package cero
 * 
 */

 // Enqueue Scripts and Styles añadimos los archivos externos

 add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
    'header-text' => array( 'site-title'),
) );

 add_action('wp_enqueue_scripts', 'cero_scripts_styles');
    if(!function_exists('cero_scripts_styles')):
        function cero_scripts_styles(){
            wp_enqueue_style( 
                'cero_main_styles',
             get_stylesheet_uri(), 
                array(
                    'cero_google_fonts'
                ),
                '1.0',
                'all'
            );
            wp_enqueue_style('cero_google_fonts', '//fonts.googleapis.com/css?family=Material+Icons|Rubik:wght@300;400;500', array(), '1.0', 'all');
        }

    endif;

    add_action( 'wp_enqueue_scripts', 'wstyle_enqueue_styles');

    function wstyle_enqueue_styles() {
	        wp_enqueue_style( 'wstyle-style', get_stylesheet_directory_uri() . '/woocomerceStyle.css', array(), wp_get_theme()->get('1.0'));
            wp_enqueue_style( 'st_transformicon', get_stylesheet_directory_uri() . '/assets/transformicons.css', array(), wp_get_theme()->get('1.0'));
            wp_enqueue_script('js_tranformicon',get_stylesheet_directory_uri().'/assets/transformicons.js', array(), '1.0.0', true);
}

    // Register menus 
add_action('init', 'flowerpower_nav_menus');
function flowerpower_nav_menus(){
        register_nav_menus( array(
            'main_menu' => 'Menu Principal',
            'social_menu' => 'Menu Footer',
            'register_menu' =>'Menu Registro y Mi Cuenta'
        )
    );
}

//Agregamos la zona de widget para 

function dcms_agregar_nueva_zona_widgets() {

	register_sidebar( array(
		'name'          => 'Nueva Zona Widget',
		'id'            => 'id-nueva-zona',
		'description'   => 'Descripción de la nueva Zona de Widgets',
		'before_widget' => '<span id="%1$s" class="widget %2$s ">',
		'after_widget'  => '</span>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
}

add_action( 'widgets_init', 'dcms_agregar_nueva_zona_widgets' );

//Aceptamos los 
add_theme_support( 'post-thumbnails' );

// Creamos un CPT con soporte para Genesis

if( ! function_exists('crear_cpt_testimonio ') ) {

    // Registramos el CPT
    
    function crear_cpt_testimonio() {
    
        $labels = array(
            'name'                  => _x( 'Testimonios', 'Post Type General Name', 'crear_cpt_testimonio' ),
            'singular_name'         => _x( 'Testimonio', 'Post Type Singular Name', 'crear_cpt_testimonio' ),
            'menu_name'             => __( 'Testimonios', 'crear_cpt_testimonio' ),
            'name_admin_bar'        => __( 'Testimonios', 'crear_cpt_testimonio' ),
            'archives'              => __( 'Archivo de Testimonio', 'crear_cpt_testimonio' ),
            'parent_item_colon'     => __( 'padre', 'crear_cpt_testimonio' ),
            'all_items'             => __( 'Todos Testimonios', 'crear_cpt_testimonio' ),
            'add_new_item'          => __( 'Añadir Testimonio', 'crear_cpt_testimonio' ),
            'add_new'               => __( 'Añadir nueva', 'crear_cpt_testimonio' ),
            'new_item'              => __( 'Nuevo Testimonio', 'crear_cpt_testimonio' ),
            'edit_item'             => __( 'Editar Testimonio', 'crear_cpt_testimonio' ),
            'update_item'           => __( 'Actuzalizar Testimonio', 'crear_cpt_testimonio' ),
            'view_item'             => __( 'Ver Testimonio', 'crear_cpt_testimonio' ),
            'search_items'          => __( 'Buscar Testimonio', 'crear_cpt_testimonio' ),
            'not_found'             => __( 'No encontrado', 'crear_cpt_ID del CPT' ),
            'not_found_in_trash'    => __( 'No encontrado en la basura', 'crear_cpt_testimonio' ),
            'featured_image'        => __( 'Imagen destacada', 'crear_cpt_testimonio' ),
            'set_featured_image'    => __( 'Poner imagen destacada', 'crear_cpt_testimonio' ),
            'remove_featured_image' => __( 'Quira imagen destacada', 'crear_cpt_testimonio' ),
            'use_featured_image'    => __( 'Usar imagen destacada', 'crear_cpt_testimonio' ),
            'insert_into_item'      => __( 'Insertar en Testimonio', 'crear_cpt_testimonio' ),
            'uploaded_to_this_item' => __( 'Subido a Testimonio', 'crear_cpt_testimonio' ),
            'items_list'            => __( 'Lista Testimonios', 'crear_cpt_testimonio' ),
            'items_list_navigation' => __( 'Testimonios lista de navegacion', 'crear_cpt_testimonio' ),
            'filter_items_list'     => __( 'Filtrar Testimonios', 'crear_cpt_testimonio' ),
        );
        $args = array(
            'label'                 => __( 'post_type_testimonio', 'crear_cpt_testimonio' ),
            'description'           => __( 'Custom Post Type para Testimonios', 'crear_cpt_testimonio' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-testimonial',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,		
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
        );
        register_post_type( 'testimonio', $args );
    
    }
    add_action( 'init', 'crear_cpt_testimonio', 0 );
    }

    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

    add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
    add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

    function my_theme_wrapper_start() {
        echo '<section id="main">';
    }

    function my_theme_wrapper_end() {
        echo '</section>';
    }