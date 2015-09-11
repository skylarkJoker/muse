<?php
  function addTheme(){
    wp_enqueue_style( 'style', get_template_directory_uri()."/css/app.css" );
    wp_enqueue_style( 'icons', get_template_directory_uri()."/css/foundation-icons/foundation-icons.css" );
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js');
    wp_enqueue_script( 'foundation', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js');
    wp_enqueue_script( 'modernizr','https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js');
    wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '1.0.0', true);
    wp_enqueue_script( 'navi', get_template_directory_uri() . '/navigation/navigation.js', array(), '1.0.0', true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true);
  }

  add_action('wp_enqueue_scripts', 'addTheme');

  function themename_widgets_init() {

    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));

    register_sidebar( array(
        'name'          => __( 'Primary Sidebar'),
        'id'            => 'sidebar-1',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>'
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget'),
        'id'            => 'footer-1',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5><hr>'
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 2'),
        'id'            => 'footer-2',
        'before_title'  => '<h5 class="widget-title ">',
        'after_title'   => '</h5><hr>'
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 3'),
        'id'            => 'footer-3',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5><hr>'
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 4'),
        'id'            => 'footer-4',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5><hr>'
    ) );


}
add_action( 'widgets_init', 'themename_widgets_init' );

//add feat. img support
function load()
{
  # code...
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 180, 120, true);
  add_image_size('banner', 1000, 1000, true);
  add_image_size('image_reg', 500, 500, true);
  add_image_size('featured', 1000, 100, true);

  add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'load');

function display_primary_menu() {
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'menu' => 'Primary Menu',
		'container' => false, // remove nav container
		'container_class' => '', // class of container
		'menu_class' => 'left', // adding custom nav class
		'before' => '', // before each link <a>
		'after' => '', // after each link </a>
		'link_before' => '', // before each link text
		'link_after' => '', // after each link text
		'depth' => 5, // limit the depth of the nav
		'fallback_cb' => false, // fallback function (see below)
		'walker' => new top_bar_walker()
	) );
}
/**
 * Customized menu output
 */
class top_bar_walker extends Walker_Nav_Menu {

	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
		$element->has_children = !empty( $children_elements[$element->ID] );
		$element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';
		$element->classes[] = ( $element->has_children ) ? 'has-dropdown not-click' : '';

		parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}

	function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
		$item_html = '';
		parent::start_el( $item_html, $object, $depth, $args );

		$output .= ( $depth == 0 ) ? '<li class="divider"></li>' : '';

		$classes = empty( $object->classes ) ? array() : (array) $object->classes;
		if ( in_array('label', $classes) ) {
			$output .= '<li class="divider"></li>';
			$item_html = preg_replace( '/<a[^>]*>(.*)<\/a>/iU', '<label>$1</label>', $item_html );
		}

		if ( in_array('divider', $classes) ) {
			$item_html = preg_replace( '/<a[^>]*>( .* )<\/a>/iU', '', $item_html );
		}

		$output .= $item_html;
	}

	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$output .= "\n<ul class=\"sub-menu dropdown\">\n";
	}

}


 ?>
