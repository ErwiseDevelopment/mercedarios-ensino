<?php

function single_create_post_type() { 

	register_post_type( 'curso', array(
		'labels'      => array( 'name' => 'Cursos', 'singular_name' => 'Curso', 'all_items' => 'Todos os cursos' ),
		'public' 	  => true,
		'has_archive' => true,
		'menu_icon'	  => 'dashicons-welcome-learn-more',
		'supports' 	  => array( 'title' ) 
	));

	register_post_type( 'Galeria', array(
		 	'labels' 		=> array( 'name' => 'Galerias', 'singular_name' => 'Galeria', 'all_items' => 'Todas Galerias' ),
		 	'public' 		=> true,
		 	'has_archive'	=> true,
		 	'menu_icon'		=> 'dashicons-images-alt2',
		 	'supports' 		=> array( 'title', 'thumbnail' ) 
		 ) );
}
add_action( 'init', 'single_create_post_type' );
