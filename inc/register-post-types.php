<?php

function single_create_post_type() { 

	register_post_type( 'curso', array(
		'labels'      => array( 'name' => 'Cursos', 'singular_name' => 'Curso', 'all_items' => 'Todos os cursos' ),
		'public' 	  => true,
		'has_archive' => true,
		'menu_icon'	  => 'dashicons-welcome-learn-more',
		'supports' 	  => array( 'title' ) 
	));

	// register_post_type( 'atividade', array(
	// 	'labels'      => array( 'name' => 'Atividades Extracurriculares', 'singular_name' => 'Atividade Extracurriculares', 'all_items' => 'Todos as atividades' ),
	// 	'public' 	  => true,
	// 	'has_archive' => true,
	// 	'menu_icon'	  => 'dashicons-welcome-learn-more',
	// 	'supports' 	  => array( 'title', 'editor', 'thumbnail' ) 
	// ));

	register_post_type( 'galeria', array(
		 	'labels' 		=> array( 'name' => 'Galerias', 'singular_name' => 'Galeria', 'all_items' => 'Todas Galerias' ),
		 	'public' 		=> true,
		 	'has_archive'	=> true,
		 	'menu_icon'		=> 'dashicons-images-alt2',
		 	'supports' 		=> array( 'title', 'thumbnail' ) 
		 ) );


		 if(get_field('estrutura', 'option') == '1'):{
	register_post_type( 'estrutura', array(
		'labels' 		=> array( 'name' => 'Estrutura', 'singular_name' => 'Estrutura', 'all_items' => 'Todas Estruturas' ),
		'public' 		=> true,
		'has_archive'	=> true,
		'menu_icon'		=> 'dashicons-building',
		'supports' 		=> array( 'title', 'thumbnail' ) 
	) );
	}; endif;

	register_post_type( 'equipe', array(
		'labels' 		=> array( 'name' => 'Equipe', 'singular_name' => 'Equipe', 'all_items' => 'Equipe' ),
		'public' 		=> true,
		'has_archive' 	=> true,
		'menu_icon' 	=> 'dashicons-businessperson',
		'supports' 		=> array( 'title',  'thumbnail',  )
	) );
}
add_action( 'init', 'ed_create_page' );

add_action( 'init', 'single_create_post_type' );


function erwise_create_taxonomy() {
	register_taxonomy( 'ambiente', 'estrutura', array( 'labels' => array( 'name' => 'Ambientes', 'singular_name' => 'Cidade' ), 'hierarchical' => true, 'show_admin_column' => true ) );
	register_taxonomy( 'unidade', 'estrutura', array( 'labels' => array( 'name' => 'Unidades', 'singular_name' => 'Categoria' ), 'hierarchical' => true, 'show_admin_column' => true ) );
	register_taxonomy( 'areas', 'equipe', array( 'labels' => array( 'name' => 'Cargo', 'singular_name' => 'Cargo' ), 'hierarchical' => true, 'show_admin_column' => true ) );
	register_taxonomy( 'tipo', 'curso', array( 'labels' => array( 'name' => 'Tipo', 'singular_name' => 'Tipo' ), 'hierarchical' => true, 'show_admin_column' => true ) );

}
add_action( 'init', 'erwise_create_taxonomy' );