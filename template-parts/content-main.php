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

<article class="post">
    <header class="entry-header">
        <a href="<?php the_permalink(); ?>">
        <h2 class="entry-title"> <?php the_title(); ?></h2>
            <?php the_post_thumbnail('medium_large'); ?>
            
        </a>
    </header>
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>
</article>