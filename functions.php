<?php 

// CSS
function import_stylesheets() {
	wp_enqueue_style('reset', get_template_directory_uri()."css/reset.css");
	wp_enqueue_style('style', get_template_directory_uri(). "/style.css", array('reset'));
}

	add_action('wp_enqueue_scripts', 'import_stylesheets');

// Fonts
function add_fonts () {
	wp_enqueue_style( 'add_google_font', 'https://fonts.googleapis.com/css?family=Lato:400,700,900', false );
}

	add_action( 'wp_enqueue_scripts', 'add_fonts' );


// Menyer
function menus() {
	register_nav_menus( array(
		'headerMenu' => 'Header Menu',
		'sidebarMenu' => 'Sidebar Menu',
		
	));
}

// Widgets
function widgetAreas() {
	register_sidebar (array (
		'name' => 'Footer #1',
		'id' => 'footer1',
		'desciption' => 'First Footer',
		'before_widget' =>'<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
		register_sidebar (array (
		'name' => 'Footer #2',
		'id' => 'footer2',
		'desciption' => 'Second Footer',
		'before_widget' =>'<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
		register_sidebar (array (
		'name' => 'Footer #3',
		'id' => 'footer3',
		'desciption' => 'Third Footer',
		'before_widget' =>'<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
		register_sidebar (array (
		'name' => 'Footer #4',
		'id' => 'footer4',
		'desciption' => 'Fourth Footer',
		'before_widget' =>'<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}

add_action ('widgets_init', 'widgetAreas');



?>