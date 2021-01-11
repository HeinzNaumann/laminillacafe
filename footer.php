<?php

 /**
  * Online Shop for flowers
  *
  * Tienda online de flores
  *
  * @package    Flower Power Theme
  * @author     Heinz Naumann<info@webstudiomallorca.com>
  * @copyright  Flower Power
  * @version    1.0
  */
 
 defined( 'ABSPATH' ) || exit;
?>

    <footer id="colophon" class="site-footer">
        <div class="wrap">
            <div class="site-info">
                <div class="footer-creds">
                    <p>&copy;   <?php echo date('Y') ?> &middot <?php bloginfo('name'); ?></p>
                </div>
            </div>
            <nav id="site-navigation" class="secondary-navigation"> 
            <?php wp_nav_menu(
                        array(
                        'theme_location' => 'social_menu',
                        )
                    ); ?>   
            </nav>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>
</html>