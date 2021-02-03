<?php

function load_stylesheets()

{
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' , array() , false , 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('style', get_template_directory_uri() . '/style.css' , array() , false , 'all');
	wp_enqueue_style('style');
	
}
add_action('wp_enqueue_scripts','load_stylesheets');



function load_js()
{
	wp_register_script('editedjs', get_template_directory_uri() . '/js/edited.js' , '', '1' , true);
	wp_enqueue_script('editedjs');

	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js' , '', '1' , true);
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts','load_js');


	function a_theme_setup(){
	add_theme_support('menus');
	add_theme_support('post-thumbnails');
	register_nav_menus(
	array(

		'top-menu' => __('Top Menu' , 'theme'),
		'footer-menu' => __('Footer Menu' , 'theme'),
	)
	);
}
add_action('after_setup_theme','a_theme_setup');


function widgetside($id){
	register_sidebar(
		array(
			'name'				=>	'Sidebar',
			'id'				=>	'sidebar',
			'before_widget'	=>	'<div class="p-4">',
			'after_widget'		=>	'</div>',
			'before_title'		=>	'<h4 class="font-italic">',
			'after_title'		=>	'</h4>',


		)
		);
}
add_action('widgets_init','widgetside');