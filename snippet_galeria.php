<div class="gallery">
        <?php
                $params = array('posts_per_page' => 5, 'post_type' => 'product');
                $wc_query = new WP_Query($params);
                ?>
                <ul class="gallery-container">
                    <?php if ($wc_query->have_posts()) : ?>
                    <?php while ($wc_query->have_posts()) :
                                $wc_query->the_post(); ?>
                    <li>
                        <h3>
                            <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                            </a>
                        </h3>
                        <img class="gallery-item" src=" <?php the_post_thumbnail(); ?>">  
                        <?php the_excerpt(); ?>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else:  ?>
                    <li>
                        <?php _e( 'No Products' ); ?>
                    </li>
                    <?php endif; ?>
                </ul>
    
        <div class="gallery-controls"></div>
    </div>
