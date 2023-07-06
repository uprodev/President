<form role="search" method="get" action="<?php echo home_url( '/' ) ?>" class="form-search">
  <label for="s"></label>
  <input type="text" name="s" id="s" placeholder="<?php _e('חיפוש באתר…', 'President') ?>" value="<?= get_search_query() ?: '' ?>">
  <input type="hidden" name="post_type" value="post" />
  <a href="#" class="close-search"><img src="<?= get_stylesheet_directory_uri() ?>/img/close-search.svg" alt=""></a>
  <button type="submit"><img src="<?= get_stylesheet_directory_uri() ?>/img/search.svg" alt=""></button>
</form>