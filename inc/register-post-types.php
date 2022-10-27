<?php

function single_create_post_type() { 

	register_post_type( 'curso', array(
		'labels'      => array( 'name' => 'Cursos', 'singular_name' => 'Curso', 'all_items' => 'Todos os cursos' ),
		'public' 	  => true,
		'has_archive' => true,
		'menu_icon'	  => 'dashicons-welcome-learn-more',
		'supports' 	  => array( 'title' ) 
	));

	register_post_type( 'galeria', array(
		 	'labels' 		=> array( 'name' => 'Galerias', 'singular_name' => 'Galeria', 'all_items' => 'Todas Galerias' ),
		 	'public' 		=> true,
		 	'has_archive'	=> true,
		 	'menu_icon'		=> 'dashicons-images-alt2',
		 	'supports' 		=> array( 'title', 'thumbnail' ) 
		 ) );

	// register_post_type( 'estrutura', array(
	// 	'labels' 		=> array( 'name' => 'Estrutura', 'singular_name' => 'Estrutura', 'all_items' => 'Todas Estruturas' ),
	// 	'public' 		=> true,
	// 	'has_archive'	=> true,
	// 	'menu_icon'		=> 'dashicons-building',
	// 	'supports' 		=> array( 'title', 'thumbnail' ) 
	// ) );
}
add_action( 'init', 'single_create_post_type' );

// function erwise_create_taxonomy() {
// 	register_taxonomy( 'ambientes', 'estrutura', array( 'labels' => array( 'name' => 'Ambientes', 'singular_name' => 'Ambientes' ), 'hierarchical' => true, 'show_admin_column' => true ) );
// 	register_taxonomy( 'unidades', 'estrutura', array( 'labels' => array( 'name' => 'Unidades', 'singular_name' => 'Unidades' ), 'hierarchical' => true, 'show_admin_column' => true ) );

// }
// add_action( 'init', 'erwise_create_taxonomy' );