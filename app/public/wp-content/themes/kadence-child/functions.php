<?php 
/* theme enfant genéré */
            
if ( ! function_exists( 'b7ectg_theme_enqueue_styles' ) ) {            
    add_action( 'wp_enqueue_scripts', 'b7ectg_theme_enqueue_styles' );
    
    function b7ectg_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
    }
}
//chargemt stylecss dans le child
function styleplanty() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
    
    }
    add_action( 'wp_enqueue_scripts', 'styleplanty');
    // END ENQUEUE PARENT ACTION
    
//hook admin
function link_admin($items, $args) {
    if( is_user_logged_in() && $args->theme_location == 'primary' ){
    $items .= '<li><a href="http://localhost/planty/wp-admin" class="admin">Admin</a></li>'; 
    }

  return $items;
}
add_filter('wp_nav_menu_items', 'link_admin', 10, 2);