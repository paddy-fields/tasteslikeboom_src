<?php 

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support('custom-logo');

show_admin_bar( false );

/* CSS and JS */
function bspk_theme_styles(){

	wp_enqueue_style ( 'fontawesome_css', get_template_directory_uri(). '/assets/css/font-awesome.css' );
	wp_enqueue_style ( 'fullpage_css', get_template_directory_uri(). '/assets/css/fullPage.css' );
	wp_enqueue_style ( 'main_css', get_template_directory_uri(). '/style.css?v=@version@' );
	wp_enqueue_style ( 'google_css', 'https://fonts.googleapis.com/css?family=Space+Mono');
}

add_action( 'wp_enqueue_scripts', 'bspk_theme_styles');


function bspk_theme_js() {

	wp_enqueue_script( 'fullPage', get_template_directory_uri() . '/assets/js/fullPage.js', array('jquery'), '', true);
	wp_enqueue_script( 'google_js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD2GglbnAKyvyN2MCsTSUVWS0Z2Hl3JP-E', '', '' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js?v=@version@', array('jquery'), '', true);
}

add_action( 'wp_enqueue_scripts', 'bspk_theme_js' );

/* MENUS */
function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' )
		)
	);

}

add_action( 'init', 'register_theme_menus');

/* WIDGETS */

	register_sidebar(array(
		'name' => __( 'Heading hookline' ),	 
		'id' => 'heading-hookline',
		'description' => __( 'Displays some small text below the site logo' ),
		'class' => '',
		'before_widget' => '<div class="heading-hookline">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));