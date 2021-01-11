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


<?php if(get_next_posts_link()|| get_preview_post_link()  ): ?>
<div class="pagination">
    <nav>
        <?php 
            echo paginate_links(
                array(
                    'prev_text' => 'Anteriores',
                    'next_text' => 'Siguiente',
            )
        );

        ?>
    </nav>
</div>
<?php endif; ?>