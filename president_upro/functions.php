<?php 

// show_admin_bar( false );

add_action('wp_enqueue_scripts', 'load_style_script');
function load_style_script(){
	wp_enqueue_style('pr-normalize', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('pr-fonts', 'https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;600;700;800&display=swap');
	wp_enqueue_style('pr-fonts-2', 'https://fonts.googleapis.com/css2?family=Heebo:wght@400;700&display=swap');
	wp_enqueue_style('pr-fontawesome', get_template_directory_uri() . '/fonts/fontawesome-5-pro-master/css/all.css');
	wp_enqueue_style('pr-font', get_template_directory_uri() . '/css/font.css');
	wp_enqueue_style('pr-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
	wp_enqueue_style('pr-select', get_template_directory_uri() . '/css/nice-select.css');
	wp_enqueue_style('pr-swiper', get_template_directory_uri() . '/css/swiper.min.css');
	wp_enqueue_style('pr-styles', get_template_directory_uri() . '/css/styles.css');
	wp_enqueue_style('pr-responsive', get_template_directory_uri() . '/css/responsive.css');
	wp_enqueue_style('pr-style-main', get_template_directory_uri() . '/style.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script('pr-swiper', get_template_directory_uri() . '/js/swiper.js', array(), false, true);
	wp_enqueue_script('pr-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), false, true);
	wp_enqueue_script('pr-rellax', get_template_directory_uri() . '/js/rellax.min.js', array(), false, true);
	wp_enqueue_script('pr-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), false, true);
	wp_enqueue_script('pr-select', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array(), false, true);
	wp_enqueue_script('pr-nav', get_template_directory_uri() . '/js/jquery.nav.js', array(), false, true);
	wp_enqueue_script('pr-fixto', get_template_directory_uri() . '/js/fixto.js', array(), false, true);
	wp_enqueue_script('pr-cuttr', get_template_directory_uri() . '/js/cuttr.min.js', array(), false, true);
	wp_enqueue_script('pr-script', get_template_directory_uri() . '/js/script.js', array(), false, true);
	wp_enqueue_script('pr-add', get_template_directory_uri() . '/js/add.js', array(), false, true);
}


add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header' => __('Header menu', 'President'),
		'header-mobile' => __('Header mobile menu 1', 'President'),
		'header-mobile-2' => __('Header mobile menu 2', 'President'),
		'header-mobile-3' => __('Header mobile menu 3', 'President'),
		'footer' => __('Footer menu', 'President'),
        'footer-2' => __('Footer menu-2', 'President'),
        'footer-3' => __('Footer menu-3', 'President'),
	) );
});


add_theme_support( 'title-tag' );
add_theme_support('html5');
add_theme_support( 'post-thumbnails' ); 


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Main settings',
		'menu_title'	=> 'Theme options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


add_filter('wpcf7_autop_or_not', '__return_false');


function override_mce_options($initArray) {
	$opts = '*[*]';
	$initArray['valid_elements'] = $opts;
	$initArray['extended_valid_elements'] = $opts;
	return $initArray;
}
add_filter('tiny_mce_before_init', 'override_mce_options');


function custom_language_switcher(){
	$languages = icl_get_languages('skip_missing=0&orderby=id&order=desc');
	if(!empty($languages)){

		foreach($languages as $index => $language){
			if($language['active'] === '1') echo '<div class="wrap"><i class="far fa-globe"></i><span class="current">' . $language['native_name'] . '</span></div>';
		}

		echo '<ul class="list">';

		foreach($languages as $index => $language){

			$selected_class = $language['active'] === '1' ? ' selected' : '';
			echo '<li class="option' . $selected_class . '"><a href="' . $language['url'] . '">' . $language['native_name'] . '</a></li>';

		}

		echo '</ul>';

	}
}


add_post_type_support('page', 'excerpt');
remove_filter('the_excerpt', 'wpautop');



add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'custom_text',
            'title'             => __('Text (President)'),
            'description'       => __('Add Text'),
            'render_template'   => 'parts/blocks/text.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'title_with_line',
            'title'             => __('Title  with line (President)'),
            'description'       => __('Add Title  with line'),
            'render_template'   => 'parts/blocks/title_with_line.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'title_with_id',
            'title'             => __('Title  with ID (President)'),
            'description'       => __('Add Title with ID'),
            'render_template'   => 'parts/blocks/title_with_id.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'image_with_caption',
            'title'             => __('Image (President)'),
            'description'       => __('Image with 2 fields for left and right description below the image'),
            'render_template'   => 'parts/blocks/image.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'custom_link',
            'title'             => __('Link (President)'),
            'description'       => __('A block in which you can set an anchor, add a button with a link to something, set an image for the button and make it blue if necessary'),
            'render_template'   => 'parts/blocks/link.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'custom_map',
            'title'             => __('Map (President)'),
            'description'       => __('Add Map'),
            'render_template'   => 'parts/blocks/map.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'custom_map_visible',
            'title'             => __('Map (Visible) (President)'),
            'description'       => __('Add Map (Visible)'),
            'render_template'   => 'parts/blocks/map_visible.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'custom_form',
            'title'             => __('Form (President)'),
            'description'       => __('Add Form'),
            'render_template'   => 'parts/blocks/form.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'image_with_share',
            'title'             => __('Image with share (President)'),
            'description'       => __('A block in which you can add an image, with buttons on social networks to share the page'),
            'render_template'   => 'parts/blocks/image_with_share.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'wrap_section_start',
            'title'             => __('Wrap section start (President)'),
            'description'       => __('Add Wrap section start'),
            'render_template'   => 'parts/blocks/wrap_section_start.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'section_start',
            'title'             => __('Section start (President)'),
            'description'       => __('Add Section start'),
            'render_template'   => 'parts/blocks/section_start.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'grey_section_start',
            'title'             => __('Grey section start (President)'),
            'description'       => __('Add Grey section start'),
            'render_template'   => 'parts/blocks/grey_section_start.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'text_section_start_1',
            'title'             => __('Text section start (.content-text) (President)'),
            'description'       => __('Add Text section start (.content-text)'),
            'render_template'   => 'parts/blocks/text_section_start_1.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'text_section_start_2',
            'title'             => __('Text section start (.text) (President)'),
            'description'       => __('Add Section start (.text)'),
            'render_template'   => 'parts/blocks/text_section_start_2.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'section_end',
            'title'             => __('Section end (President)'),
            'description'       => __('Add Section end'),
            'render_template'   => 'parts/blocks/section_end.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'custom_background',
            'title'             => __('Background (President)'),
            'description'       => __('Add Background'),
            'render_template'   => 'parts/blocks/background.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'custom_gallery',
            'title'             => __('Gallery (President)'),
            'description'       => __('A block for a section with a large number of images, in which you can also add a description on the left and right under the image'),
            'render_template'   => 'parts/blocks/gallery.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'custom_links',
            'title'             => __('Links (President)'),
            'description'       => __('A block in which you can make buttons for downloading any files'),
            'render_template'   => 'parts/blocks/links.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'links_with_title',
            'title'             => __('Links with title (President)'),
            'description'       => __('Add Links with title'),
            'render_template'   => 'parts/blocks/links_with_title.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'custom_posts',
            'title'             => __('Posts (President)'),
            'description'       => __('Add Posts'),
            'render_template'   => 'parts/blocks/posts.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'custom_line',
            'title'             => __('Line (President)'),
            'description'       => __('A block that separates text with a line, you can set the color to blue'),
            'render_template'   => 'parts/blocks/line.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'line_with_image',
            'title'             => __('Line with image (President)'),
            'description'       => __('Block with a dividing line that automatically pulls up, with the ability to insert an image'),
            'render_template'   => 'parts/blocks/line_with_image.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'custom_quote',
            'title'             => __('Quote (President)'),
            'description'       => __('Add Quote'),
            'render_template'   => 'parts/blocks/quote.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'custom_list',
            'title'             => __('List (President)'),
            'description'       => __('Block that is intended for repeating text and title'),
            'render_template'   => 'parts/blocks/list.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
        acf_register_block_type(array(
            'name'              => 'custom_widget',
            'title'             => __('Widget (President)'),
            'description'       => __('Add Widget'),
            'render_template'   => 'parts/blocks/widget.php',
            'category'          => 'common',
            'post_types'        => array('post', 'page'),
        ));
    }
}



function search_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_search) {
      $query->set('paged', ( get_query_var('paged') ) ? get_query_var('paged') : 1 );
      $query->set('posts_per_page',10);
  }
}
}
add_action( 'pre_get_posts', 'search_filter' );