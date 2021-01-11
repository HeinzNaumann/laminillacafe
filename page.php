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
<?php get_header(); ?>
<div id="primary" class="content-area">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post();  ?>
                <?php  get_template_part('template-parts/content-page', get_post_type()); ?>
            <?php endwhile; ?>
        <?php endif; ?>
   
</div> 
<?php get_footer(); ?>


