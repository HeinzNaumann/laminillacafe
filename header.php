<?php
/**
 * The main template
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy
 * 
 * @package cero
 * 
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>
    <meta name="description" content="<?php  bloginfo('description')?>">
    <?php wp_head(); ?>
</head>
<body>
    <div class="hero">
        <header id="masthead" class="header contenedor">
            
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>"> 
                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                        <img  width="70" height="auto" src="<?php echo $image[0]; ?>" alt=""></a>
                </div>
                <nav id="site-navigation" class="navegacion">
                        <?php wp_nav_menu(
                            array(
                            'theme_location' => 'main_menu',
                            )
                        ); 
                        ?>
                        <?php /*dynamic_sidebar( 'id-nueva-zona' );*/  ?>
                </nav>
                
                <div class="menu-registro">
                
                    <div class="register-menu">
                        
                            <?php 
                            get_search_form();
                            wp_nav_menu(
                                array(
                                'theme_location' => 'register_menu',
                                )
                            ); 
                            
                            ?>  
                    </div>

                          <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                        
                    </a>
                        
                </div>

                <div id="menu-hamburger" class="menu-hamburger">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
                </div>   
                                            

            <div id="prueba" class="transformicon">         
                <button type="button" class="tcon toggle-menu tcon-menu--xbutterfly openbtn" onclick="openNav()" aria-label="toggle menu">
                <span class="tcon-menu__lines" aria-hidden="true"></span>
                <span class="tcon-visuallyhidden">toggle menu</span>
                </button>
            </div>
            
        </header>
        <div class="contenido-hero contenedor">
            <h1>Un cafe extraodinario no es producto de la casualidad</h1>
            <p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. </p>
            <div class="contenedor-button">
                <a href="#" class="button ">Comprar Cafe</a>
            </div>
        </div>  <!--  contenido hero -->
    </div> <!--  hero -->