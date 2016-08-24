<?php 
/**
 * Montreal Pokemon League Functions
 *
 * [Long Description.]
 *
 * @link functions.php
 * @since 1.0
 *
 * @package plugin
 */
// function cwc_maintenance_mode() {
//     if ( !current_user_can( 'edit_themes' ) || !is_user_logged_in() ) {
//         wp_die('Maintenance, please come back soon.');
//     }
// }
// add_action('get_header', 'cwc_maintenance_mode');



/**
 * Setup function
 * Sets up the title tags for wp_head(); along with 
 * tumbnail size and the nav menu
 */

function sttbcstl_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 285, 175, true );
  register_nav_menus( array(
    'menu-left'  => __( 'Navigation', 'sttbcstl' ),
    'menu-top'   => __( 'Onglets',    'sttbcstl' )
    ) );


  // Start Registering Sidebars
  register_sidebar(array(
    'name'          =>'left',
    'id'            =>'left',
    'before_widget' => '<div class="widget">
                        <div class="wbox">',
    'after_widget'  => '</div>
                        </div><!-- block -->
                        </div><!-- click -->
                        </div><!-- wbox -->',
    'before_title'  => '<h3 class="click">',
    'after_title'   => '</h3>
                        <div class="clicked">
                        <div class="block">',
    ));
   register_sidebar(array(
    'name'          =>'RSS',
    'id'            =>'rss',
    'before_widget' => '',
    'after_widget'  => '</section>',
    'before_title'  => '<section>',
    'after_title'   => '',
  ));
}
add_action( 'after_setup_theme', 'sttbcstl_setup' );


/* Java scrip Detection
 * Add a js / no-js class to html
*/
function sttbcstl_js_detect() {
  echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'sttbcstl_js_detect', 0 );

// Loads the Css and Font awesome
function sttbcstl_scripts() {
  wp_enqueue_style( 'sttbcstl_style', get_stylesheet_uri() );
  wp_enqueue_style( 'sttbcstl_fa_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'sttbcstl_scripts' );


/**
 * Filter the except length to 55 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function sttbcstl_get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
 
  return $excerpt;
}

function the_word_excerpt() {
  echo sttbcstl_get_excerpt(55);
}