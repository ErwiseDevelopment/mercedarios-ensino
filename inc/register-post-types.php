<?php

function single_create_post_type() { 

	register_post_type( 'curso', array(
		'labels'      => array( 'name' => 'Cursos', 'singular_name' => 'Curso', 'all_items' => 'Todos os cursos' ),
		'public' 	  => true,
		'has_archive' => true,
		'menu_icon'	  => 'dashicons-welcome-write-blog',
		'supports' 	  => array( 'title', 'editor',  'thumbnail', 'revisions', 'author' ) 
	));

	register_post_type( 'post-example', array(
		'labels'      => array( 'name' => 'Post Exemplo', 'singular_name' => 'Post Exemplo', 'all_items' => 'Todos os posts' ),
		'public' 	  => true,
		'has_archive' => true,
		'menu_icon'	  => 'dashicons-welcome-write-blog',
		'supports' 	  => array( 'title', 'editor',  'revisions', 'author' ) 
	));
}
add_action( 'init', 'single_create_post_type' );
