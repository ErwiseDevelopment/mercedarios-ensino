<?php

function ed_create_page() {

    if( function_exists('acf_add_options_page') ) {	
        acf_add_options_page( 
            array( 
                'page_title' => 'Informações Gerais', 
                'menu_title' => 'Informações Gerais', 
                'menu_slug'  => 'Informações Gerais', 
                'capability' => 'edit_posts', 
                'position'   => '23,3', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-info' 
        ));
    }

    if( function_exists('acf_add_options_page') ) {	
        acf_add_options_page( 
            array( 
                'page_title' => 'Informativos', 
                'menu_title' => 'Informativos', 
                'menu_slug'  => 'Informativos', 
                'capability' => 'edit_posts', 
                'position'   => '50', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-excerpt-view' 
        ));
    }

    if( function_exists('acf_add_options_page') ) {	
        acf_add_options_page( 
            array( 
                'page_title' => 'API', 
                'menu_title' => 'API', 
                'menu_slug'  => 'api', 
                'capability' => 'edit_posts', 
                'position'   => '23,7', 
                'redirect'   => false, 
                'icon_url'   => 'dashicons-rest-api',
        ));
    }
    register_post_type( 'equipe', array(
		'labels' 		=> array( 'name' => 'Equipe', 'singular_name' => 'Equipe', 'all_items' => 'Equipe' ),
		'public' 		=> true,
		'has_archive' 	=> true,
		'menu_icon' 	=> 'dashicons-businessperson',
		'supports' 		=> array( 'title',  'thumbnail',  )
	) );
}
add_action( 'init', 'ed_create_page' );

//Criar taxonomia:
function erwise_create_taxonomy() {

	register_taxonomy( 'areas', 'equipe', array( 'labels' => array( 'name' => 'Cargo', 'singular_name' => 'Cargo' ), 'hierarchical' => true, 'show_admin_column' => true ) );

}
add_action( 'init', 'erwise_create_taxonomy' );