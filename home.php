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
    <header class="entry-header">
        <div class="archive-title">
            <h1 class="entry-title"><?php single_post_title(); ?>
            </h1>
        </div>
    </header>
    <section class="posts-wrapper">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post();  ?>
                <?php  get_template_part('template-parts/content-main', get_post_type()); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
    <?php  get_template_part('template-parts/pagination', get_post_type()); ?>
</div> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>

