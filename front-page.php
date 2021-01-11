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

    <div class="semilla">
    <img src="http://localhost:10072/wp-content/uploads/2020/12/Coffee-Seeds.png" width="280px" height="auto"/>
    </div>
    <div class="title-after-header-fp">
    <h2>Nuestros Cafe</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dignissim mauris sed ipsum malesuada eleifend. </p>
    </div>
    <div class="gallery">
    <?php
                $params = array('posts_per_page' => 5, 'post_type' => 'product');
                $wc_query = new WP_Query($params);
                ?>
        <div class="gallery-container">
        <?php if ($wc_query->have_posts()) : ?>
                    <?php while ($wc_query->have_posts()) :
                                $wc_query->the_post(); ?>
            <div class="gallery-item">
                 <?php the_post_thumbnail();?>
                    <div class="product-desc">
                        <h4> 
                            <a class="desc" href="#"> <?php the_title(); ?> </a> 
                        </h4>
                        <h4> 
                            <a class="desc" href="#"> <?php woocommerce_template_loop_price(); ?></a> 
                        </h4>
                        <?php woocommerce_template_loop_add_to_cart(); ?>
                    </div>
            </div> 
        
            <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
        </div>
        <div class="gallery-controls"></div>
    </div>

        <section >
           <div class="wrap">
                <div class="box">
                    <p><?php the_field('group_5fdb92ebcf45e'); ?></p>

                    <?php 

                        global $post;

                        $args = array(

                            'posts_per_page' => 4,
                            'post_type'      => 'testimonio'
                        );
                    
                        $myposts = get_posts($args);
                        foreach ( $myposts as $post) : setup_postdata($post); ?>


                        <article class="testimonial">
                            <header class="entry-header">
                               <img src="<?php the_field('imagen'); ?> " alt="">                            
                            </header>

                            <div class="entry-content">
                    <?php the_excerpt(); ?>   
                            <p class="testimonial-name"> <?php the_post_thumbnail(); ?></p>
                            </div>
                        </article>
                    
                   <?php  endforeach;
                        wp_reset_postdata();
                    ?>

                    <p><?php the_field('descripcion'); ?></p>
                </div>

                <img src="http://localhost:10072/wp-content/uploads/2020/12/producto1.jpg">
       
           </div>  
        </section>
        
        
<?php get_footer(); ?>


