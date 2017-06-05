<?php
// Custom logo
add_theme_support( 'custom-logo' );

// Register menu
function affiliate_menus() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'affiliate_menus' );

?>