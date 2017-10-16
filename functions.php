<?php 


function wpbootstrap_scripts_with_jquery()
{
         wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), null, false );
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/materialize.js', array( 'jquery' ) );	
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/particles.js', array(), '1.0.0', true );
	wp_enqueue_script( 'init-script', get_template_directory_uri() . '/js/init.js', array(), '1.0.0', true );
	$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	wp_localize_script( 'init-script', 'object_name', $translation_array );	
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}

function register_my_menus() {
	register_nav_menus( array('top_bar' => __( 'Top Bar' )) );
	register_nav_menus( array('footer_menu' => __( 'Footer Menu' )) );
}
add_action( 'init', 'register_my_menus' );


add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
add_theme_support( 'post-thumbnails' ); 

add_editor_style('css/materialize.css');
add_editor_style('css/style.css');

?>