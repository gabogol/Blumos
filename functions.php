<?php

if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
}
add_post_type_support( 'page', 'excerpt' );

add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
  show_admin_bar(false);

}

?>