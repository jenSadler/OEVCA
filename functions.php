<?php
add_image_size( 'oev-thumbnail', 1080 , 500, true );
add_image_size('oev-thumbnail-small', 540,250,true);
add_image_size('oev-nav-image', 100,80,true);

add_filter( 'get_the_archive_title', function ($title) {
        if ( is_category() ) {
                $title = single_cat_title( '', false );
            } elseif ( is_tag() ) {
                $title = single_tag_title( '', false );
            } elseif ( is_author() ) {
                $title = '<span class="vcard">' . get_the_author() . '</span>' ;
            } elseif ( is_tax() ) { //for custom post types

                $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
            }  elseif ( is_month() ) {
		            $title = single_month_title( ' ', false );
            } elseif (is_post_type_archive()) {
                $title = post_type_archive_title( '', false );
            }
        return $title;
    });

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'main-nav-menu' => __( 'Main Navigation Menu' ),
      'top-nav-list' => __( 'Top Navigation Menu - separated links' ),
      'top-nav-social'=>__('Top Navigation Menu - Social Icons'),
      'home-link-bar'=>__('Link Bar - Home Page'),
      'news-events-link-bar'=>__('Link Bar - News and Events'),
      'support-link-bar'=>__('Link Bar - Support'),
      'work-link-bar'=>__('Link Bar -Work'),
      'footer-nav'=>__('Footer - List of Pages'),
      'footer-social'=>__('Footer - Social Icons'),
      'footer-extra'=>__('Footer -Other Links'),
    )
  );
}


function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails' );
}
function add_all_sidebars() {

  $my_sidebars = array(
    array(
      'name'          => 'Default Sidebar',
      'id'            => 'default-sidebar',
      'description'   => 'shown on the contact page',
    ),
    array(
      'name'          => 'Single Page Sidebar',
      'id'            => 'single-sidebar',
      'description'   => 'Shown on a single page',
    ),
    array(
      'name'          => 'Contact Sidebar',
      'id'            => 'contact-sidebar',
      'description'   => 'shown on the contact page',
    ),
    array(
      'name'          => 'Bulletin Sidebar',
      'id'            => 'bulletin-sidebar',
      'description'   => 'shown on the news and events page',
    ),
    array(
      'name'          => 'Home Sidebar',
      'id'            => 'home-sidebar',
      'description'   => 'shown on the home page',
    ),
    array(
      'name'          => 'Support Us Sidebar',
      'id'            => 'support-sidebar',
      'description'   => 'shown on the support us page',
    ),
    array(
      'name'          => 'Work Sidebar',
      'id'            => 'work-sidebar',
      'description'   => 'shown on the our work page',
    ),



  );

  $defaults = array(
    'name'          => 'Default Sidebar',
    'id'            => 'default-sidebar',
    'description'   => __( 'This sidebar appears on the left-hand side of a post page' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  );

  foreach( $my_sidebars as $sidebar ) {
    $args = wp_parse_args( $sidebar, $defaults );
    register_sidebar( $args );
  }

}

add_action( 'init', 'wpb_custom_new_menu' );
add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );
add_action( 'widgets_init', 'add_all_sidebars' );

?>
