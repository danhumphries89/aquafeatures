<?php

/** Add Menus that we wish to use **/
function registerMenus() {
  register_nav_menus(
  	array( 
  		'mainmenu' => __( 'Main Menu' ),
    )
  );
}
add_action( 'init', 'registerMenus' );

add_theme_support( 'post-thumbnails' ); 

?>