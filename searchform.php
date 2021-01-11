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

?>


<form id="searchform" class="search-box" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" name="s" placeholder="Type to search.." value="<?php echo get_search_query(); ?>">
    <input type="hidden" name="post_type[]" value="book" />
    <input type="hidden" name="post_type[]" value="magazine" />
    <input type="hidden" name="post_type[]" value="ebook" />
    <input type="hidden" name="post_type[]" value="pdf" />
    <input type="submit" value="Search">
    <div class="search-icon menu-registro-icon ">
        <span class="material-icons lupa ">search</span>
    </div>
    <div class="cancel-icon">
    <span class="material-icons">cancel </span>
    </div>
    <div class="search-data">
    </div>
</form>



